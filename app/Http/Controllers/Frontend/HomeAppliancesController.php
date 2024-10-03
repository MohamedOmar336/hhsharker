<?php
namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeAppliancesController extends Controller
{
   
    public function index()
    {
        $homeApplianceArr = Category::where(['category_type'=>'HomeAppliance','parent_id'=>NULL,'active'=>1])->get();
        return view('frontend.pages.home_appliance.index',compact('homeApplianceArr'));
    }

    public function parent(Request $request)
    {
      
        $parentCategoryArr = Category::where(['category_type'=>'HomeAppliance','slug' => $request->parent])->first();
        if(!isset($parentCategoryArr->id)){
            abort(404);
        }
        // $homeApplianceChildArr = Category::where(['category_type'=>'HomeAppliance','parent_id' => $parentCategoryArr->id,'active'=>1])->get();
        
        $where = [
            'type' => 'HomeAppliance',
            'category'=>$parentCategoryArr->name_ar
        ];
        $allProductArr = Product::where($where)->latest()->get();

        return view('frontend.pages.home_appliance.parent',compact('parentCategoryArr','allProductArr'));
    }

    public function productList1(Request $request)
    {
        return view('frontend.pages.home_appliance.product-list-1');        
    }
    public function productList2(Request $request)
    {

        $homeApplianceArr = Category::where(['category_type' => 'HomeAppliance', 'parent_id' => NULL, 'active' => 1])->get();
        return view('frontend.pages.home_appliance.product-list-2',compact('homeApplianceArr'));        
    }
   


}
