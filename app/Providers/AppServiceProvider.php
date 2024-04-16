<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }
    public function boot()
    {
        Paginator::useBootstrap();

        $wedsiteSetting = Setting::first();
        View::share('appSetting', $wedsiteSetting);
        $categories = Category::all();
        View::share('categories', $categories);
    }
}
