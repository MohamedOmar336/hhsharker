<?php
namespace App\Http\Controllers\Frontend;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndustryInsightsController extends Controller
{
   
    public function index()
    {
        $blogs = BlogPost::latest()->get();
        return view('frontend.pages.industry-insights',compact('blogs'));
    }


}
