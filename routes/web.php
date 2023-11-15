<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutPecbController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\AdminFormationController;
use App\Http\Controllers\Admin\AdminNewsLetterController;
use App\Http\Controllers\Admin\AdminSubscriptionController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\AuditorController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\BusnessSceanceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\FoundationController;
use App\Http\Controllers\ImplementerController;
use App\Http\Controllers\ImplementerSceanceController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ManagerSceanceController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('feature.pages.index');
});

Route::get('about',[AboutController::class,'About'])->name('about');

Route::get('aboutPecb',[AboutPecbController::class,'AboutPecb'])->name('aboutPecb');

Route::get('formation',[FormationController::class,'Formation'])->name('formation');

Route::get('contact',[ContactController::class,'Contact'])->name('contact');

Route::get('management',[ManagementController::class,'Management'])->name('management');

Route::get('foundation',[FoundationController::class,'Foundation'])->name('foundation');

Route::get('auditor',[AuditorController::class,'Auditor'])->name('auditor');

Route::get('implementer',[ImplementerController::class,'Implementer'])->name('implementer');

Route::get('business',[BusinessController::class,'Business'])->name('business');

Route::get('news',[NewsController::class,'News'])->name('news');

Route::get('inscription',[InscriptionController::class,'Inscription'])->name('inscription');

Route::get('faq',[FaqController::class,'Faq'])->name('faq');

Route::get('managerSceance',[ManagerSceanceController::class,'ManagerSceance'])->name('managerSceance');

Route::get('busnessSceance',[BusnessSceanceController::class,'BusnessSceance'])->name('busnessSceance');

Route::get('implementerSceance',[ImplementerSceanceController::class,'ImplementerSceance'])->name('implementerSceance');

Route::get('subscription',[Subscriptioncontroller::class,'Subscription'])->name('subscription');

Route::post('subscription-post', [SubscriptionController::class, 'subscription_form'])->name('SubscriptionForm');

Route::get('subscription-result', [SubscriptionController::class, 'subscription_result'])->name('SubscriptionResult');


//Route Admin



Route::middleware('auth')->group(function() {

    Route::get('admin-home', [AdminController::class, 'index'])->name('getAdminIndex');
    Route::get('admin-formation', [AdminFormationController::class, 'formation'])->name('getAdminFormation');
    Route::get('admin-formation/edit', [AdminFormationController::class, 'edit'])->name('editFormation');
    Route::post('admin-formation/edit', [AdminFormationController::class, 'create'])->name('postFormation');
    Route::get('admin-formation/edit/{id}', [AdminFormationController::class, 'update_formation'])->name('updateFormation');
    Route::get('admin-formation/delete/{id}', [AdminFormationController::class, 'delete_formation'])->name('deleteFormation');
    Route::post('admin-formation/validate', [AdminFormationController::class, 'validate_formation'])->name('validateFormation');
    Route::get('admin-formation/view/{id}', [AdminFormationController::class, 'view'])->name('adminFormationView');

    Route::get('admin-subscription', [AdminSubscriptionController::class, 'subscription'])->name('adminSubscription'); //list
    Route::get('admin-subscription/edit', [AdminSubscriptionController::class, 'edit'])->name('AdminEditSubscription'); //get edit view
    Route::post('admin-subscription/edit', [AdminSubscriptionController::class, 'create'])->name('postAdminSubscription');//add new element
    Route::get('admin-subscription/edit/{id}', [AdminSubscriptionController::class, 'update_subscription'])->name('AdminUpdateSubscription'); //get view for update
    Route::post('admin-subscription/validate', [AdminSubscriptionController::class, 'validate_subscription'])->name('validateUpdateSubscription'); //post for update
    Route::get('admin-subscription/view/{id}', [AdminSubscriptionController::class, 'view'])->name('adminSubscriptionView');//view
    Route::get('admin-subscription/delete/{id}', [AdminSubscriptionController::class, 'delete_subscription'])->name('adminSubscriptionDelete');//delete

    Route::get('admin-news-letter', [AdminNewsLetterController::class, 'newsLetter'])->name('getNewsLetter');
    Route::get('admin-news-letter/delete/{id}', [AdminNewsLetterController::class, 'delete_newsLetter'])->name('deleteAddress');
    Route::get('admin-news-letter/edit', [AdminNewsLetterController::class, 'edit'])->name('AdminEditMail'); //get edit view
    Route::post('admin-news-letter/edit', [AdminNewsLetterController::class, 'create'])->name('AdminPostMail'); //postEditMail

    Route::get('admin-contact', [AdminContactController::class, 'contact_list'])->name('AdminContactList');
    Route::get('admin-contact/delete/{id}', [AdminContactController::class, 'delete_contact'])->name('AdminDeleteContact');
    Route::get('admin-contact/view/{id}', [AdminContactController::class, 'view'])->name('adminContactView');//view
    Route::get('admin-contact/edit', [AdminContactController::class, 'edit'])->name('AdminEditContact'); //get edit view
    Route::post('admin-contact/edit', [AdminContactController::class, 'create'])->name('AdminPostContact'); //
    Route::get('admin-contact/edit/{id}', [AdminContactController::class, 'update_contact'])->name('AdminUpdateContact');
    Route::post('admin-contact/validate', [AdminContactController::class, 'validate_contact'])->name('getValidateContact');
});

//Auth Admin
Route::get('admin-login', [LoginController::class, 'showLogin'] )->name('getLogin');
Route::post('admin-login', [LoginController::class, 'signInUser'] )->name('postLogin');
Route::get('admin-register', [LoginController::class, 'showRegister'] )->name('getRegister');
Route::post('admin-register', [LoginController::class, 'register'] )->name('postRegister');
Route::get('admin-logout', [LoginController::class, 'signUpUser'] )->name('admin.logout');
