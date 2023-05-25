<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;

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
        // Using view composer to set following variables globally
        view()->composer('*', function ($view) {
            // $view->with('user', Auth::user());
            // $header_tags = DB::table('tagging_tagged')->all();

            $view->with('categories', Category::all(),'user_count',User::all()->count());
        });

    }
}