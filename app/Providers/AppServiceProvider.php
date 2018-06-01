<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $setting=Setting::find(1);
        $pages=Page::all();
        $categories=Category::where("ust_id",null)->get();

        View::share([
            "setting"=>$setting,
            "pages"=>$pages,
            "categories"=>$categories,
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
