<?php

use App\Http\Controllers\NewscategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YearvisionsController;
use App\Http\Controllers\WeektopicController;
use App\Http\Controllers\viewcontroller\newsController;
use App\Http\Controllers\viewcontroller\aboutController;
use App\Http\Controllers\viewcontroller\eventController;
use App\Http\Controllers\viewcontroller\contactController;
use App\Http\Controllers\viewcontroller\galleryController;
use App\Http\Controllers\viewcontroller\activityController;
use App\Http\Controllers\viewcontroller\homepageController;
use App\Http\Controllers\viewcontroller\preachingController;
use App\Http\Controllers\viewcontroller\messageboxController;
use App\Http\Controllers\viewcontroller\departementController;

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

Route::get('/',[homepageController::class,'index'])->name('homepage_index');
Route::get('/about',[aboutController::class,'index'])->name('about_index');
Route::get('/activity',[activityController::class,'index'])->name('activity_index');
Route::get('/contact',[contactController::class,'index'])->name('contact_index');
Route::get('/departement',[departementController::class,'index'])->name('departement_index');
Route::get('/event',[eventController::class,'index'])->name('event_index');
Route::get('/gallery',[galleryController::class,'index'])->name('gallery_index');
Route::get('/news',[newsController::class,'index'])->name('news_index');
Route::get('/preaching',[preachingController::class,'index'])->name('preaching_index');

//------------------------------------------- Dashboard -------------------------------------------

Route::get('/dashboard/messagebox/{id?}/{action?}/{actionRoute?}/{cancelRoute?}',[messageboxController::class,'index'])->name('messagebox');

//Year vision -------------------------------------------------------------------------------------

Route::get('/vision/all',[YearvisionsController::class,'index'])->name('yearvision_list');
Route::get('/vision/create',[YearvisionsController::class,'create'])->name('yearvision_create');
Route::get('/vision/edit/{yearvison_id?}',[YearvisionsController::class,'edit'])->name('yearvision_edit')->whereNumber('yearvison_id');

Route::post('/vision/store',[YearvisionsController::class,'store'])->name('yearvision_store');
Route::post('/vision/update',[YearvisionsController::class,'update'])->name('yearvision_update');
Route::post('/vision/destroy/{id?}',[YearvisionsController::class,'destroy'])->name('yearvision_destroy')->whereNumber('id');

//Week topic -----------------------------------------------------------------------------------

Route::get('/weektopic/all',[WeektopicController::class,'index'])->name('weektopic_all');
Route::get('/weektopic/create',[WeektopicController::class,'create'])->name('weektopic_create');
Route::get('/weektopic/edit/{id?}',[WeektopicController::class,'edit'])->name('weektopic_edit')->whereNumber('id');

Route::post('/weektopic/store',[WeektopicController::class,'store'])->name('weektopic_store');
Route::post('/weektopic/update',[WeektopicController::class,'update'])->name('weektopic_update');
Route::post('/weektopic/destroy/{id?}',[WeektopicController::class,'destroy'])->name('weektopic_destroy')->whereNumber('id');


//news categories -----------------------------------------------------------------------------------

Route::get('/newscategory/all',[NewscategoryController::class,'index'])->name('newscategory_all');
Route::get('/newscategory/create',[NewscategoryController::class,'create'])->name('newscategory_create');
Route::get('/newscategory/edit/{id?}',[NewscategoryController::class,'edit'])->name('newscategory_edit')->whereNumber('id');

Route::post('/newscategory/store',[NewscategoryController::class,'store'])->name('newscategory_store');
Route::post('/newscategory/update',[NewscategoryController::class,'update'])->name('newscategory_update');
Route::post('/newscategory/destroy/{id?}',[NewscategoryController::class,'destroy'])->name('newscategory_destroy')->whereNumber('id');



Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', 'App\Http\Controllers\LogoutController@perform')->name('logout.perform');
 });

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
