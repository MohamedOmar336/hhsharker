<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ValueAndVisionController extends Controller
{
   
    public function index()
    {
        return view('frontend.pages.value-and-vision');
    }


}
