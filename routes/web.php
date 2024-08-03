<?php

use App\Http\Controllers\Admin\MailboxController;
use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\SmtpSettingsController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\TicketHistoryController;
use App\Http\Controllers\Admin\TicketPriorityController;
use App\Http\Controllers\Admin\TicketStatusController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TicketCategoryController;
use App\Http\Controllers\Admin\CharacteristicController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\WhatsAppController;
use App\Http\Controllers\ContactUsController;


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

        Route::get('/analytics', [HomeController::class, 'analytics'])->name('analytics');

        Route::resource('/characteristics', CharacteristicController::class);

        Route::get('/smtp-settings', [SmtpSettingsController::class, 'edit'])->name('smtp-settings.edit');

        Route::post('/smtp-settings', [SmtpSettingsController::class, 'update'])->name('smtp-settings.update');

        Route::get('product/import',  [ProductController::class, 'importForm'])->name('products.import.form');

        Route::post('product/import', [ProductController::class, 'import'])->name('products.import');

        Route::resource('/products', ProductController::class);

        Route::get('/product/export', [ProductController::class, 'export'])->name('products.exports');

        Route::get('/products/bulk-delete', [ProductController::class, 'bulkDelete'])->name('products.bulkdelete');

        Route::resource('/users', UserController::class);

        Route::get('/user/bulk-delete', [UserController::class  , 'massDestroy'])->name('users.bulkDelete');

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

        Route::post('/chat/markAsSeen', [ChatController::class, 'markAsSeen'])->name('chat.markAsSeen');

        Route::resource('/tickets', TicketController::class);

        Route::get('/ticket/bulk-delete', [TicketController::class  , 'massDestroy'])->name('tickets.bulkDelete');

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

        Route::resource('groups', GroupController::class);

        Route::post('messages', [MessageController::class, 'store'])->name('messages.store');

        Route::delete('messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');

        Route::get('/mails', [MailController::class, 'index'])->name('mails.index');
      //  Route::get('/mails/index', [MailController::class, 'index'])->name('mails.index');
        Route::get('/mails/compose', [MailController::class, 'compose'])->name('mails.compose');
        Route::post('/mails/send', [MailController::class, 'send'])->name('mails.send');
        Route::get('/mails/{mail}', [MailController::class, 'show'])->name('mails.show');

        Route::get('/mails/{id}/reply', [MailController::class, 'reply'])->name('mails.reply');
        Route::post('/mails/{id}/sendReply', [MailController::class, 'sendReply'])->name('mails.sendReply');

        Route::post('/mails/bulk-action', [MailController::class, 'bulkAction'])->name('mails.bulkAction');

        Route::resource('/ticket_categories', TicketCategoryController::class);

        Route::put('/tickets/{id}/update/{field}', [TicketController::class, 'updateField'])->name('tickets.update_field');

        Route::post('/send-whatsapp-message', [WhatsAppController::class, 'sendMessage'])->name('send-whatsapp-message');

        Route::post('/receive-whatsapp-message', [WhatsAppController::class , 'receiveMessage']);

        Route::get('/whatsApp/room', [WhatsAppController::class, 'roomMessages'])->name('whatsapp.room');

        Route::get('/whatsApp', [WhatsAppController::class, 'index'] )->name('whatsapp.chat');

        Route::get('/whatsApp-chat', [WhatsAppController::class, 'chat'] )->name('whatsapp.index');

        Route::post('/whatsApp-template', [WhatsAppController::class, 'sendTemplate'] )->name('whatsapp.template');

        Route::get('/contact/exports', [ContactController::class, 'export'])->name('contacts.export');

        Route::get('contact/import', [ContactController::class, 'importForm'])->name('contacts.import.form');

        Route::post('contact/import', [ContactController::class, 'import'])->name('contacts.import');

        Route::post('/products/characteristics', [ProductController::class, 'storeCharacteristics'])->name('products.storeCharacteristics');

        Route::get('/characteristic/list', [CharacteristicController::class, 'listInProducts'])->name('characteristics.list');

        Route::get('/mails/inbox', [MailController::class, 'inbox'])->name('mails.inbox');
        Route::get('/mails/starred', [MailController::class, 'starred'])->name('mails.starred');
        Route::get('/mails/important', [MailController::class, 'important'])->name('mails.important');
        Route::get('/mails/drafts', [MailController::class, 'drafts'])->name('mails.drafts');
        Route::get('/mails/sent', [MailController::class, 'sent'])->name('mails.sent');
        Route::get('/mails/trash', [MailController::class, 'trash'])->name('mails.trash');

        Route::get('/mails/compose', [MailController::class, 'compose'])->name('mails.compose');
        Route::post('/mails/send', [MailController::class, 'send'])->name('mails.send');

        Route::patch('/mails/{mail}/star', [MailController::class, 'markStarred'])->name('mails.markStarred');
        Route::patch('/mails/{mail}/important', [MailController::class, 'markImportant'])->name('mails.markImportant');
        Route::patch('/mails/{mail}/trash', [MailController::class, 'moveTrash'])->name('mails.moveTrash');

        Route::post('/mails/bulk-action', [MailController::class, 'bulkAction'])->name('mails.bulkAction');

    });
});


// Front Routes
Route::view('/', 'website.home.index');
Route::view('/about', 'website.about')->name('about');
Route::view('/founders', 'website.founders')->name('founders');
Route::view('/vision', 'website.vision')->name('vision');
Route::view('/lcac', 'website.lcac')->name('lcac');
Route::view('/terms-of-service', 'website.terms-of-service')->name('terms');
Route::view('/policy', 'website.policy')->name('policy');


Route::get('/test/create', [ContactUsController::class, 'create'])->name('test.create');
Route::post('/test', [ContactUsController::class, 'store'])->name('test.store');


Route::get('/whatsapp-webhook', [WhatsAppController::class, 'verify']);
Route::post('/whatsapp-webhook', [WhatsAppController::class, 'receiveMessage']);
