<?php
namespace App\Http\Controllers\Frontend;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
   
    public function index()
    {
        $news = News::orderBy('created_at','ASC')->get();
        return view('frontend.pages.news',compact('news'));
    }


}
