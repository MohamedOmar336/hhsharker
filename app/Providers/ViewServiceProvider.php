<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $airConditionerItems = Category::where(['category_type'=>'AirConditioner','parent_id'=>NULL,'active'=>1])->get();
        View::share('headerAirConditionerArr', $airConditionerItems);
    }
}
