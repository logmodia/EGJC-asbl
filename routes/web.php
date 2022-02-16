<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\yearvisionsController;

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

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/activity', function () {
    return view('layouts.activity');
});

Route::get('/news', function () {
    return view('layouts.news');
});

Route::get('/departement', function () {
    return view('layouts.departement');
});

Route::get('/event', function () {
    return view('layouts.event');
});

Route::get('/gallery', function () {
    return view('layouts.gallery');
});

Route::get('/preaching', function () {
    return view('layouts.preaching');
});

Route::get('/contact', function () {
    return view('layouts.contact');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[homepageController::class,'index'])->name('homepage_index');
Route::get('/vision/create',[yearvisionsController::class,'create'])->name('yearvision_create');
Route::post('/vision/store',[yearvisionsController::class,'store'])->name('yearvision_store');

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
