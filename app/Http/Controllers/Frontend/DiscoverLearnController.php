<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiscoverLearnController extends Controller
{
   
    public function index()
    {
        return view('frontend.pages.discover-and-learn');
    }
    public function viewAll()
    {
        return view('frontend.pages.discover-all');
    }
    public function single()
    {
        return view('frontend.pages.discover-single');
    }


}

