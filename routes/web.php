<?php

//use App\Http\Controllers\Admin\MailboxController;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GmailController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\WhatsAppController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\SmtpSettingsController;
use App\Http\Controllers\Admin\TicketStatusController;
use App\Http\Controllers\Frontend\CaseStudyController;
use App\Http\Controllers\Frontend\OurLatestController;
use App\Http\Controllers\Admin\TicketHistoryController;
use App\Http\Controllers\Admin\CharacteristicController;

use App\Http\Controllers\Admin\TicketCategoryController;
use App\Http\Controllers\Admin\TicketPriorityController;
use App\Http\Controllers\Admin\WhatsAppTemplateController;
use App\Http\Controllers\Frontend\DiscoverLearnController;
use App\Http\Controllers\Frontend\AirConditionerController;
use App\Http\Controllers\Frontend\CompanyFounderController;
use App\Http\Controllers\Frontend\HomeAppliancesController;
use App\Http\Controllers\Frontend\ValueAndVisionController;
use App\Http\Controllers\Frontend\SalesAndSupportController;
use App\Http\Controllers\Frontend\IndustryInsightsController;
use App\Http\Controllers\Frontend\CommercialSupportController;
use App\Http\Controllers\Frontend\HomeController as FrontHomeController;
use App\Http\Controllers\Frontend\NewsController as FrontNewsController;
use App\Http\Controllers\Frontend\ContactUsController as FrontContactUsController;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

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
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes(['verify' => false]);

Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => ['auth', 'Localization', 'check.permissions']], function () {

      // Language switch route
Route::get('/change-lang/{lang}', function ($lang) {
    // Validate that the language is supported
    $supportedLanguages = ['en', 'ar']; // Add other supported languages as needed

    if (in_array($lang, $supportedLanguages)) {
        App::setLocale($lang);
        Config::set('locale', $lang);
        Session::put('locale', $lang);
    }

    return redirect()->back();
})->name('change.lang');
        Route::get('/home', [HomeController::class, 'index'])->name('home');

        Route::get('/analytics', [HomeController::class, 'analytics'])->name('analytics');

        Route::resource('/characteristics', CharacteristicController::class);

        Route::get('/smtp-settings', [SmtpSettingsController::class, 'edit'])->name('smtp-settings.edit');

        Route::post('/smtp-settings', [SmtpSettingsController::class, 'update'])->name('smtp-settings.update');

        Route::get('product/import', [ProductController::class, 'importForm'])->name('products.import.form');

        Route::post('product/import', [ProductController::class, 'import'])->name('products.import');

        Route::resource('/products', ProductController::class);

        Route::get('/product/export', [ProductController::class, 'export'])->name('products.exports');

        Route::post('/products/bulk-delete', [ProductController::class, 'bulkDelete'])->name('products.bulkdelete');

        Route::resource('/users', UserController::class);

        Route::post('/user/bulk-delete', [UserController::class, 'massDestroy'])->name('users.bulkDelete');

        Route::resource('/categories', CategoryController::class);

        Route::post('/categoriess/bulk-delete', [CategoryController::class, 'bulkDelete'])->name('categories.bulk-delete');

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

        Route::post('/ticket/bulk-delete', [TicketController::class, 'massDestroy'])->name('tickets.bulkDelete');

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
        Route::get('/mails/{id}', [MailController::class, 'show'])->name('mails.show');

        // Route to display the reply form
        Route::get('/mails/{id}/reply', [MailController::class, 'reply'])->name('mails.reply');

        // Route to handle sending the reply
        Route::post('/mails/{id}/sendReply', [MailController::class, 'sendReply'])->name('mails.sendReply');

        Route::post('/mails/bulk-action', [MailController::class, 'bulkAction'])->name('mails.bulkAction');

        Route::resource('/ticket_categories', TicketCategoryController::class);

        Route::put('/tickets/{id}/update/{field}', [TicketController::class, 'updateField'])->name('tickets.update_field');

        Route::post('/send-whatsapp-message', [WhatsAppController::class, 'sendMessage'])->name('send-whatsapp-message');

        Route::post('/receive-whatsapp-message', [WhatsAppController::class, 'receiveMessage']);

        Route::get('/whatsApp/room', [WhatsAppController::class, 'roomMessages'])->name('whatsapp.room');

        Route::get('/whatsApp', [WhatsAppController::class, 'index'])->name('whatsapp.chat');

        Route::get('/whatsApp-chat', [WhatsAppController::class, 'chat'])->name('whatsapp.index');

        Route::post('/whatsApp-template', [WhatsAppController::class, 'sendTemplate'])->name('whatsapp.template');

        Route::get('/contact/exports', [ContactController::class, 'export'])->name('contacts.export');

        Route::get('contact/import', [ContactController::class, 'importForm'])->name('contacts.import.form');

        Route::post('contact/import', [ContactController::class, 'import'])->name('contacts.import');

        Route::post('/products/characteristics', [ProductController::class, 'storeCharacteristics'])->name('products.storeCharacteristics');

        Route::get('/characteristic/list', [CharacteristicController::class, 'listInProducts'])->name('characteristics.list');

        // Route::get('/mails/inbox', [MailController::class, 'inbox'])->name('mails.inbox');
        // Route::get('/mails/starred', [MailController::class, 'starred'])->name('mails.starred');
        // Route::get('/mails/important', [MailController::class, 'important'])->name('mails.important');
        // Route::get('/mails/drafts', [MailController::class, 'drafts'])->name('mails.drafts');
        // Route::get('/mails/sent', [MailController::class, 'sent'])->name('mails.sent');
        // Route::get('/mails/trash', [MailController::class, 'trash'])->name('mails.trash');

        Route::get('/mails/compose', [MailController::class, 'compose'])->name('mails.compose');

        Route::post('/mails/send', [MailController::class, 'send'])->name('mails.send');

        Route::patch('/mails/{mail}/star', [MailController::class, 'markStarred'])->name('mails.markStarred');

        Route::patch('/mails/{mail}/important', [MailController::class, 'markImportant'])->name('mails.markImportant');

        Route::patch('/mails/{mail}/trash', [MailController::class, 'moveTrash'])->name('mails.moveTrash');

        Route::post('/mails/bulk-action', [MailController::class, 'bulkAction'])->name('mails.bulkAction');
        Route::post('/mails/toggle-state/{email}/{type}', [MailController::class, 'toggleState'])->name('mails.toggleState');


        Route::get('/emails/more', [GmailController::class, 'getMoreEmails'])->name('emails.get-more');

        Route::get('/submitForm', [FormController::class, 'submitForm']);

        Route::get('/gmail', [GmailController::class, 'getEmails'])->name('gmail');
        Route::get('/gmail/compose', [GmailController::class, 'compose'])->name('gmail.compose');
        Route::post('/gmail/send', [GmailController::class, 'send'])->name('gmail.send');

        // Sales emails routes
        Route::get('/sales/emails/more', [GmailController::class, 'getMoreSalesEmails'])->name('sales.emails.get-more');
        Route::get('/sales/gmail', [GmailController::class, 'getSalesEmails'])->name('sales.gmail');

        // Support emails routes
        Route::get('/support/emails/more', [GmailController::class, 'getMoreSupportEmails'])->name('support.emails.get-more');
        Route::get('/support/gmail', [GmailController::class, 'getSupportEmails'])->name('support.gmail');
        Route::resource('tasks', TaskController::class);


        Route::resource('news', NewsController::class);

        Route::resource('whatsapp-templates', WhatsAppTemplateController::class);

        Route::post('whatsapp-templates/{id}/send', [WhatsAppTemplateController::class, 'sendTemplate']);


      Route::post('/ticket-categories/bulk-delete', [TicketCategoryController::class, 'bulkDelete'])->name('ticket_categories.bulkDelete');
      Route::post('/ticket-statuses/bulk-delete', [TicketStatusController::class, 'bulkDelete'])->name('ticket_statuses.bulkDelete');
      Route::post('/appointments/bulk-delete', [AppointmentController::class, 'bulkDelete'])->name('appointments.bulkDelete');
      Route::post('blogposts/bulk-delete', [BlogPostController::class, 'bulkDelete'])->name('blogposts.bulkdelete');
      Route::post('tags/bulk-delete', [TagController::class, 'bulkDelete'])->name('tags.bulkdelete');
      Route::post('/roles/bulk-delete', [RolesController::class, 'bulkDelete'])->name('roles.bulkdelete');

      Route::post('/ticket-priorities/bulk-delete', [TicketPriorityController::class, 'bulkDelete'])->name('ticket-priorities.bulkdelete');
      Route::post('/contacts/bulk-delete', [ContactController::class, 'bulkDelete'])->name('contacts.bulkDelete');
      Route::post('/groups/bulk-delete', [GroupController::class, 'bulkDelete'])->name('groups.bulkDelete');
      Route::post('/tasks/bulk-delete', [TaskController::class, 'bulkDelete'])->name('tasks.bulkDelete');
      Route::get('gmail/email/{subject}', [GmailController::class, 'showEmail'])->name('gmail.email.show');


      Route::get('/emails/inbox', [GmailController::class, 'getSupportEmails'])->name('emails.inbox');
      Route::get('/emails/starred', [GmailController::class, 'getSupportEmails'])->name('emails.starred')->defaults('filter', 'starred');
      Route::get('/emails/important', [GmailController::class, 'getSupportEmails'])->name('emails.important')->defaults('filter', 'important');
      Route::get('/emails/draft', [GmailController::class, 'getSupportEmails'])->name('emails.draft')->defaults('filter', 'draft');
      Route::get('/emails/sent', [GmailController::class, 'getSupportEmails'])->name('emails.sent')->defaults('filter', 'sent');
      Route::get('/emails/trash', [GmailController::class, 'getSupportEmails'])->name('emails.trash')->defaults('filter', 'trash');
      Route::get('/emails/unread', [GmailController::class, 'getSupportEmails'])->name('emails.unread')->defaults('filter', 'unread');

Route::get('/my-tasks', [TaskController::class, 'mytasks'])->name('mytasks');

    });
});


// Front Routes
// Route::view('/', 'website.home.index');
// Route::view('/about', 'website.about')->name('about');
// Route::view('/founders', 'website.founders')->name('founders');
// Route::view('/vision', 'website.vision')->name('vision');
// Route::view('/lcac', 'website.lcac')->name('lcac');
// Route::view('/terms-of-service', 'website.terms-of-service')->name('terms');
// Route::view('/policy', 'website.policy')->name('policy');
Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'en|ar'],'middleware' => 'setWebLocale'], function () {
    Route::get('/', [FrontHomeController::class,'index'])->name('frontend.home');
    Route::get('/about', [AboutController::class,'index'])->name('frontend.about');
    Route::get('/company-founders', [CompanyFounderController::class,'index'])->name('frontend.company-founder');
    Route::get('/contact-us', [FrontContactUsController::class,'index'])->name('frontend.contact-us');
    Route::post('/contact-us/store', [FrontContactUsController::class,'store'])->name('frontend.contact-us.store');
    Route::get('/industry-insights', [IndustryInsightsController::class,'index'])->name('frontend.industry-insights');
    Route::get('/news', [FrontNewsController::class,'index'])->name('frontend.news');
    Route::get('/value-and-vision', [ValueAndVisionController::class,'index'])->name('frontend.value-and-vision');

    Route::get('/case-studies', [CaseStudyController::class,'index'])->name('frontend.case-studies');
    Route::get('/commercial-support', [CommercialSupportController::class,'index'])->name('frontend.commercial-support');
    Route::get('/our-latest-projects', [OurLatestController::class,'index'])->name('frontend.our-latest-projects');
    Route::get('/sales-and-support', [SalesAndSupportController::class,'index'])->name('frontend.sales-and-support');
    Route::get('/discover-and-learn', [DiscoverLearnController::class,'index'])->name('frontend.discover-and-learn');
    Route::get('/discover-all', [DiscoverLearnController::class,'viewAll'])->name('frontend.discover-all');
    Route::get('/discover-single', [DiscoverLearnController::class,'single'])->name('frontend.discover-single');

    Route::get('/air-conditioner', [AirConditionerController::class,'index'])->name('frontend.air-conditioner');
    Route::get('/air-conditioner/{parent}', [AirConditionerController::class,'parent'])->name('frontend.air-conditioner.parent');
    Route::get('/air-conditioner/{parent}/{child}', [AirConditionerController::class,'child'])->name('frontend.air-conditioner.child');
    Route::get('/air-conditioner/{parent}/{child}/{subchild}', [AirConditionerController::class,'subChild'])->name('frontend.air-conditioner.subchild');
    Route::get('/product-details', [AirConditionerController::class,'productDetails'])->name('frontend.air-conditioner.product-details');
    Route::get('/product/{id}', [AirConditionerController::class,'productPage'])->where('id', '[0-9]+')->name('frontend.product.page');
    Route::get('/concealed-list', [AirConditionerController::class,'concealedList'])->name('frontend.air-conditioner.concealed-list');


    Route::get('/home-appliances', [HomeAppliancesController::class,'index'])->name('frontend.home-appliances');
    Route::get('/home-appliances/{parent}', [HomeAppliancesController::class,'parent'])->name('frontend.home-appliances.parent');
    Route::get('/product-list-1', [HomeAppliancesController::class,'productList1'])->name('frontend.home-appliances.product-list-1');
    Route::get('/product-list-2', [HomeAppliancesController::class,'productList2'])->name('frontend.home-appliances.product-list-1');

});

Route::get('/', function () {
    // Set the default language (you can customize this)
    $defaultLanguage = 'en'; // or 'ar' based on your needs
    return redirect("/$defaultLanguage");
});


Route::get('/test/create', [ContactUsController::class, 'create'])->name('test.create');
Route::post('/test', [ContactUsController::class, 'store'])->name('test.store');


Route::get('/whatsapp-webhook', [WhatsAppController::class, 'verify']);
Route::post('/whatsapp-webhook', [WhatsAppController::class, 'receiveMessage']);

Route::post('/whatsapp-broadcast', [WhatsAppController::class, 'sendBroadcastMessage'])->name('whatsapp.broadcast.post');
Route::get('/whatsapp-broadcast', [WhatsAppController::class, 'broadcastMessage'])->name('whatsapp.broadcast.index');

Route::post('/upload-file', [WhatsAppController::class, 'uploadFile'])->name('upload.file');
