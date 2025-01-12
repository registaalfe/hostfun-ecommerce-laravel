<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Repositories\TransactionRepository;
use App\Repositories\TransactionItemRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\TransactionRepositoryInterface;
use App\Repositories\TransactionItemRepositoryInterface;
use App\Repositories\PaymentRepositoryInterface;

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
        Blade::component('components.admin.header', 'header');
        Blade::component('components.admin.layout', 'layout');
        Blade::component('components.admin.side-bar', 'sidebar');
    }
}
