<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndustryInsightsController extends Controller
{
   
    public function index()
    {
        return view('frontend.pages.industry-insights');
    }


}
