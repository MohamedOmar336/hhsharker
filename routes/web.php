<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\BlogPostController;
use App\Http\Controllers\admin\CommentController;
use App\Http\Controllers\admin\TagController;
use App\Http\Controllers\admin\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('auth.login');
});

Auth::routes(['']);

Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => ['auth' , 'Localization']], function () {

        Route::get('/change-lang/{lang}', function ($lang) {
            App::setLocale($lang);
            \Illuminate\Support\Facades\Config::set('locale', $lang);
            \Illuminate\Support\Facades\Session::put('locale', $lang);
            return redirect()->back();
        })->name('change.lang');

        Route::get('/home', [HomeController::class, 'index'])->name('home');

        Route::resource('/products', ProductController::class);

        Route::resource('/users', UserController::class);

        Route::resource('/categories', CategoryController::class);

        Route::resource('/blogposts', BlogPostController::class);

        Route::resource('/comments', CommentController::class);

        Route::resource('/tags', TagController::class);

        Route::resource('/contacts', ContactController::class);

    });
});


// Front Routes
Route::view('/', 'website.home.index');
