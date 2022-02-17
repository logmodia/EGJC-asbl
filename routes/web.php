<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\yearvisionsController;
use App\Http\Controllers\viewcontroller\newsController;
use App\Http\Controllers\viewcontroller\aboutController;
use App\Http\Controllers\viewcontroller\eventController;
use App\Http\Controllers\viewcontroller\contactController;
use App\Http\Controllers\viewcontroller\galleryController;
use App\Http\Controllers\viewcontroller\activityController;
use App\Http\Controllers\viewcontroller\homepageController;
use App\Http\Controllers\viewcontroller\preachingController;
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

Route::get('/vision/create',[yearvisionsController::class,'create'])->name('yearvision_create');
Route::post('/vision/store',[yearvisionsController::class,'store'])->name('yearvision_store');
Route::post('/vision/update',[yearvisionsController::class,'update'])->name('yearvision_update');

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
