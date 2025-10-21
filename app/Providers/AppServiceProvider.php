<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

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
        Gate::define('is_user', function (User $user) {
            return $user->isUser();
        });

        Gate::define('is_admin', function (User $user) {
            return $user->isAdmin();
        });

        view()->composer('components.locale-selector', function($view) {
            $view->with('currentLocale', app()->getLocale());
            $view->with('availableLocales', config('app.available_locales'));
        });
    }
}
