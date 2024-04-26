<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['']);


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

});
