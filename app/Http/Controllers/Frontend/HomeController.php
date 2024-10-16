<?php
namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $airConditionProducts = Product::where([
            'type' => 'AirConditioner'
        ])->latest()->limit(6)->get();

        $airConditionFeaturedProducts = Product::where([
            'type' => 'AirConditioner',
            'featured' => 1
        ])->latest()->limit(4)->get();

        $homeApplianceProducts = Product::where([
            'type' => 'HomeAppliances'
        ])->latest()->limit(6)->get();

        $homeApplianceBestSellerProducts = Product::where([
            'type' => 'HomeAppliances',
            'best_selling' => 1
        ])->latest()->get();

        $homeApplianceArr = Category::where(['category_type'=>'HomeAppliance','parent_id'=>NULL,'active'=>1])->get();
        $airConditionerArr = Category::where(['category_type'=>'AirConditioner','parent_id'=>NULL,'active'=>1])->get();

        return view('frontend.pages.home',compact('airConditionProducts','airConditionFeaturedProducts','homeApplianceProducts','homeApplianceBestSellerProducts','homeApplianceArr','airConditionerArr'));
    }

}
