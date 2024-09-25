<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalesAndSupportController extends Controller
{
   
    public function index()
    {
        return view('frontend.pages.sales-and-support');
    }


}

