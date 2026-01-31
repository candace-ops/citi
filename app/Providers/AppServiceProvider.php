<?php

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force HTTPS if the URL is set to use HTTPS
        if (preg_match('/(https):\/\//i', config('app.url'))) {
            URL::forceScheme('https');
        }

        Vite::prefetch(concurrency: 10); // Prefetch Vite assets

        Model::shouldBeStrict(! $this->app->environment('production'));

        DB::prohibitDestructiveCommands($this->app->environment('production'));
        Date::use(CarbonImmutable::class);

        Password::defaults(function () {
            $rule = Password::min(8)->letters();

            if ($this->app->environment('production')) {
                return $rule->mixedCase()->numbers()->symbols()->uncompromised();
            }

            return $rule;
        });

        JsonResource::withoutWrapping(); // Disable `data` wrapper attribute
    }
}
