<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Blade;
use App\Repositories\PaymentRepository;
use App\Repositories\TransactionRepository;
use App\Repositories\TransactionItemRepository;
use App\Repositories\PaymentRepositoryInterface;
use App\Repositories\TransactionRepositoryInterface;
use App\Repositories\TransactionItemRepositoryInterface;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Http\Request;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TransactionRepositoryInterface::class, TransactionRepository::class);
        $this->app->bind(TransactionItemRepositoryInterface::class, TransactionItemRepository::class);
        $this->app->bind(PaymentRepositoryInterface::class, PaymentRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });

        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }
        Blade::component('components.admin.header', 'header');
        Blade::component('components.admin.layout', 'layout');
        Blade::component('components.admin.side-bar', 'sidebar');
    }

    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
