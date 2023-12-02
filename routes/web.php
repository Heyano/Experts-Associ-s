<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutPecbController;
use App\Http\Controllers\Admin\AdminActualiteController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\AdminFormationController;
use App\Http\Controllers\Admin\AdminNewsLetterController;
use App\Http\Controllers\Admin\AdminSubscriptionController;
use App\Http\Controllers\Admin\AdminTeamController;
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
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ManagerSceanceController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;
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

Route::get('/index',[IndexController::class,'Index'])->name('getIndex');

Route::get('about',[AboutController::class,'About'])->name('about');

Route::get('aboutPecb',[AboutPecbController::class,'AboutPecb'])->name('aboutPecb');

Route::get('formation',[FormationController::class,'Formation'])->name('formation');

Route::post('news-letter', [ContactController::class, 'newsLetter'])->name('postNewsLetter');

Route::get('service-formation', [FormationController::class, 'service_formation'])->name('getServiceFormation'); //commentaire d'introduction de la formation

Route::get('formation-view', [FormationController::class, 'view'])->name('getFormationView');

Route::get('contact',[ContactController::class,'Contact'])->name('contact');

Route::post('contact', [ContactController::class, 'contact_form'])->name('postContactForm');

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

Route::post('news-letter', [ContactController::class, 'newsLetter'])->name('postNewsLetter');




//Route Admin



Route::middleware('auth')->group(function() {

    Route::get('admin-home', [AdminController::class, 'index'])->name('getAdminIndex');

    //category
    Route::get('admin-category', [AdminFormationController::class, 'getCategory'])->name('getAdminCategory');
    Route::post('admin-category', [AdminFormationController::class, 'postCategory'])->name('AdminPostCategory');
    Route::get('admin-category/delete/{id}', [AdminFormationController::class, 'delete_category'])->name('deleteCategory');
    Route::get('admin-category/edit', [AdminFormationController::class, 'edit_category'])->name('AdminEditCategory');
    //annee
    Route::get('admin-annee', [AdminSubscriptionController::class, 'getAnnee'])->name('getAdminAnnee');
    Route::post('admin-annee', [AdminSubscriptionController::class, 'postAnnee'])->name('AdminPostAnnee');
    Route::get('admin-annee/delete/{id}', [AdminSubscriptionController::class, 'delete_annee'])->name('deleteAnnee');
    Route::get('admin-annee/edit', [AdminSubscriptionController::class, 'edit_annee'])->name('AdminEditAnnee');
    //session
    Route::get('admin-session', [AdminSubscriptionController::class, 'getSessoin'])->name('getAdminSession');
    Route::post('admin-session', [AdminSubscriptionController::class, 'postSession'])->name('AdminPostSession');
    Route::get('admin-session/delete/{id}', [AdminSubscriptionController::class, 'delete_session'])->name('deleteSession');
    Route::get('admin-session/edit_session', [AdminSubscriptionController::class, 'edit_session'])->name('AdminEditSession');
    //formation
    Route::get('admin-formation', [AdminFormationController::class, 'formation'])->name('getAdminFormation');
    Route::get('admin-formation/edit', [AdminFormationController::class, 'edit'])->name('editFormation');
    Route::post('admin-formation/edit', [AdminFormationController::class, 'create'])->name('postFormation');
    Route::get('admin-formation/edit/{id}', [AdminFormationController::class, 'update_formation'])->name('updateFormation');
    Route::get('admin-formation/delete/{id}', [AdminFormationController::class, 'delete_formation'])->name('deleteFormation');
    Route::post('admin-formation/validate', [AdminFormationController::class, 'validate_formation'])->name('validateFormation');
    Route::get('admin-formation/view/{id}', [AdminFormationController::class, 'view'])->name('adminFormationView');

    //actualite
    Route::get('admin-actualite', [AdminActualiteController::class, 'Actualite'])->name('getAdminActualite');
    Route::get('admin-actualite/edit', [AdminActualiteController::class, 'edit'])->name('editActualite');
    Route::post('admin-actualite/edit', [AdminActualiteController::class, 'create'])->name('postActualite');
    Route::get('admin-actualite/edit/{id}', [AdminActualiteController::class, 'update_actualite'])->name('updateActualite');
    Route::get('admin-actualite/delete/{id}', [AdminActualiteController::class, 'delete_actualite'])->name('deleteActualite');
    Route::post('admin-actualite/validate', [AdminActualiteController::class, 'validate_actualite'])->name('validateActualite');
    Route::get('admin-actualite/view/{id}', [AdminActualiteController::class, 'view'])->name('adminActualiteView');

    //team
    Route::get('admin-team', [AdminTeamController::class, 'Team'])->name('getAdminTeam');
    Route::get('admin-team/edit', [AdminTeamController::class, 'edit'])->name('editTeam');
    Route::post('admin-team/edit', [AdminTeamController::class, 'create'])->name('postTeam');
    Route::get('admin-team/edit/{id}', [AdminTeamController::class, 'update_team'])->name('updateTeam');
    Route::get('admin-team/delete/{id}', [AdminTeamController::class, 'delete_team'])->name('deleteTeam');
    Route::post('admin-team/validate', [AdminTeamController::class, 'validate_team'])->name('validateTeam');
    Route::get('admin-team/view/{id}', [AdminTeamController::class, 'view'])->name('adminTeamView');

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
