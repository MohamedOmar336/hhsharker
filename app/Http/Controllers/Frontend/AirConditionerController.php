<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class AirConditionerController extends Controller
{

    public function index()
    {
        $airConditionerArr = Category::where(['category_type' => 'AirConditioner', 'parent_id' => NULL, 'active' => 1])->get();
        return view('frontend.pages.air_conditioner.index', compact('airConditionerArr'));
    }

    public function parent(Request $request)
    {

        $parentCategoryArr = Category::where(['category_type' => 'AirConditioner', 'slug' => $request->parent])->first();
        if (!isset($parentCategoryArr->id)) {
            abort(404);
        }
        $airConditionerChildArr = Category::where(['category_type' => 'AirConditioner', 'parent_id' => $parentCategoryArr->id, 'active' => 1])->get();
        return view('frontend.pages.air_conditioner.parent', compact('airConditionerChildArr', 'parentCategoryArr'));
    }

    public function child(Request $request)
    {

        $parentCategoryArr = Category::where(['category_type' => 'AirConditioner', 'slug' => $request->parent])->first();
        if (!isset($parentCategoryArr->id)) {
            abort(404);
        }

        $childCategoryArr = Category::where(['category_type' => 'AirConditioner', 'slug' => $request->child, 'parent_id' => $parentCategoryArr->id])->first();
        if (!isset($childCategoryArr->id)) {
            abort(404);
        }
        $airConditionerSubChildArr = Category::where(['category_type' => 'AirConditioner', 'parent_id' => $childCategoryArr->id, 'active' => 1])->get();

        $airConditionProducts = Product::where([
            'type' => 'AirConditioner'
        ])->latest();

        if ($airConditionerSubChildArr->count() > 0) {
            return view('frontend.pages.air_conditioner.child1', compact('airConditionerSubChildArr', 'parentCategoryArr', 'childCategoryArr'));
        } else {

            $where = [
                'type' => 'AirConditioner',
                'category'=>$childCategoryArr->name_ar
            ];
            $allProductArr = Product::where($where)->latest()->get();
            $coolOnlyProductArr = Product::where($where)->whereHas('children',function ($query) {
                $query->where('main_option','Cool Only'); 
            })->get();

            $heatCoolProductArr = Product::where($where)->whereHas('children',function ($query) {
                $query->where('main_option','Heat & Cold'); 
            })->get();
            return view('frontend.pages.air_conditioner.child2', compact('parentCategoryArr', 'childCategoryArr','allProductArr','coolOnlyProductArr','heatCoolProductArr'));
        }
    }
    public function subChild(Request $request)
    {

        $parentCategoryArr = Category::where(['category_type' => 'AirConditioner', 'slug' => $request->parent])->first();
        if (!isset($parentCategoryArr->id)) {
            abort(404);
        }

        $childCategoryArr = Category::where(['category_type' => 'AirConditioner', 'slug' => $request->child, 'parent_id' => $parentCategoryArr->id])->first();
        if (!isset($childCategoryArr->id)) {
            abort(404);
        }

        $subChildCategoryArr = Category::where(['category_type' => 'AirConditioner', 'slug' => $request->subchild, 'parent_id' => $childCategoryArr->id])->first();
        if (!isset($subChildCategoryArr->id)) {
            abort(404);
        }

        $subSubChildCategoryArr = Category::where(['category_type' => 'AirConditioner', 'parent_id' => $subChildCategoryArr->id])->get();
        $subSubChildCategoryNameArr = $subSubChildCategoryArr->pluck('name_en')->toArray() ?? [];

        $where = [
            'type' => 'AirConditioner'
        ];
        $allProductArr = Product::where($where)->whereIn('child',$subSubChildCategoryNameArr)->latest()->get();

        $coolOnlyProductArr =  Product::where($where)
        ->whereIn('child',$subSubChildCategoryNameArr)
        ->whereHas('children',function ($query) {
            $query->where('main_option','Cool Only'); 
        })->get();        

        
        $heatCoolProductArr = Product::where($where)
        ->whereIn('child',$subSubChildCategoryNameArr)
        ->whereHas('children',function ($query) {
            $query->where('main_option','Heat & Cold'); 
        })->get();


        return view('frontend.pages.air_conditioner.subchild', compact('parentCategoryArr', 'childCategoryArr', 'subChildCategoryArr','subSubChildCategoryArr','allProductArr','coolOnlyProductArr','heatCoolProductArr'));
    }

    public function productDetails()
    {
        return view('frontend.pages.air_conditioner.product');
    }

    public function concealedList(Request $request)
    {
        return view('frontend.pages.air_conditioner.concealed-list');
    }

    public function productPage($locale, $id)
    {

        $record = Product::whereId($id)->with('children')->first();

        if (!$record || !count($record->children)) {
            abort(404);  // Ensure the product exists and has children
        }

        // Assuming each product has a 'type' attribute or is linked to a category that has a 'type'
        $relatedProducts = Product::where('type', $record->type)
            ->where('id', '<>', $id)  // Exclude the current product
            ->with('children')
            ->get();

        return view('frontend.pages.product.product', compact('record', 'relatedProducts'));
    }
}
