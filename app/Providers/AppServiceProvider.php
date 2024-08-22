<?php

namespace App\Providers;

use App\Models\Product;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $loadaer = AliasLoader::getInstance();
        $loadaer->alias('Cart', \Darryldecode\Cart\Facades\CartFacade::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            view()->share([
                'products' => Product::paginate(20),
            ]);
        } catch (\Throwable $th) {
        }
    }
}
