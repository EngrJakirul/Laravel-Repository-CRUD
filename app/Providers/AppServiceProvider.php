<?php

namespace App\Providers;

use App\Repository\Category\CategoryRepository;
use App\Repository\Category\InterfaceCategoryRepository;
use App\Repository\InterfaceProductRepository;
use App\Repository\ProductRepository;
use App\Repository\User\InterfaceUserRepository;
use App\Repository\User\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(InterfaceProductRepository::class, ProductRepository::class);
        $this->app->bind(InterfaceCategoryRepository::class, CategoryRepository::class);
        $this->app->bind(InterfaceUserRepository::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
