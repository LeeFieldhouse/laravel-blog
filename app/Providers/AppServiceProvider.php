<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view)
        {
            $footerCategories = Category::all();
            $footerPosts = Post::latest()->take(2)->get();
            $view->with([
                'footerCategories' => $footerCategories,
                'footerPosts' => $footerPosts
            ]);
        });
    }
}
