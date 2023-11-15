<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutPecbController;
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
