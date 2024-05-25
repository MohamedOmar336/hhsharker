<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\TicketPriorityController;
use App\Http\Controllers\Admin\TicketStatusController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\TicketHistoryController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\NotificationController;

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
})->name('admin.login');

Auth::routes(['verify' => false]);

Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => ['auth', 'Localization', 'check.permissions']], function () {

        Route::get('/change-lang/{lang}', function ($lang) {
            App::setLocale($lang);
            \Illuminate\Support\Facades\Config::set('locale', $lang);
            \Illuminate\Support\Facades\Session::put('locale', $lang);
            return redirect()->back();
        })->name('change.lang');

        Route::get('/home', [HomeController::class, 'index'])->name('home');

        Route::resource('/products', ProductController::class);

        Route::get('/products/bulk-delete', [ProductController::class, 'bulkDelete'])->name('products.bulk-delete');

        Route::resource('/users', UserController::class);

        Route::resource('/categories', CategoryController::class);

        Route::get('/categoriess/bulk-delete', [CategoryController::class, 'bulkDelete'])->name('categories.bulk-delete');

        Route::resource('/blogposts', BlogPostController::class);

        Route::resource('/comments', CommentController::class);

        Route::resource('/tags', TagController::class);

        Route::resource('/contacts', ContactController::class);

        Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');

        Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

        Route::get('/profile/change-password', [ProfileController::class, 'showChangePasswordForm'])->name('profile.change_password_form');

        Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.change_password');

        Route::resource('/roles', RolesController::class);

        Route::get('/chat/{user}', [ChatController::class, 'index'])->name('chat.index');

        Route::post('/chat/check-room', [ChatController::class, 'checkRoom'])->name('chat.checkRoom');

        Route::post('/chat/create-room', [ChatController::class, 'create'])->name('chat.create');

        Route::resource('/tickets', TicketController::class);

        Route::Resource('/ticket-priorities', TicketPriorityController::class);

        Route::Resource('/ticket-statuses', TicketStatusController::class);

        Route::Resource('/ticket-histories', TicketHistoryController::class);

        Route::get('/my-tickets', [TicketController::class, 'myTickets'])->name('tickets.my');

        Route::get('/ticket_histories/ticket/{ticketId}', [TicketHistoryController::class, 'showByTicketId'])->name('ticket_histories.show_by_ticket');

        Route::resource('/ticket_histories', TicketHistoryController::class);

        Route::resource('/appointments', AppointmentController::class);

        Route::get('/my-appointments', [AppointmentController::class, 'myAppointments'])->name('appointments.myAppointments');

        Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');

        Route::get('/activitylogs', [ActivityLogController::class, 'index'])->name('activitylogs.index');

        Route::patch('/notifications/{id}/read', [NotificationController::class, 'markAsRead'])->name('notifications.markAsRead');

    });
});

// Front Routes
Route::view('/', 'website.home.index');
Route::view('/about', 'website.about')->name('about');
Route::view('/founders', 'website.founders')->name('founders');
Route::view('/vision', 'website.vision')->name('vision');
Route::view('/lcac', 'website.lcac')->name('lcac');
