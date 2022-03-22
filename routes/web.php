<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AssignMemberRole;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\WeektopicController;
use App\Http\Controllers\CommuniquesController;
use App\Http\Controllers\MemberRolesController;
use App\Http\Controllers\YearvisionsController;
use App\Http\Controllers\DepartementsController;
use App\Http\Controllers\NewscategoryController;
use App\Http\Controllers\MemberCategoriesController;
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


//Departement -----------------------------------------------------------------------------------

Route::get('/departement/all',[DepartementsController::class,'index'])->name('departement_all');
Route::get('/departement/create',[DepartementsController::class,'create'])->name('departement_create');
Route::get('/departement/edit/{id?}',[DepartementsController::class,'edit'])->name('departement_edit')->whereNumber('id');

Route::post('/departement/store',[DepartementsController::class,'store'])->name('departement_store');
Route::post('/departement/update',[DepartementsController::class,'update'])->name('departement_update');
Route::post('/departement/destroy/{id?}',[DepartementsController::class,'destroy'])->name('departement_destroy')->whereNumber('id');

//Member role -----------------------------------------------------------------------------------

Route::get('/memberRole/all',[MemberRolesController::class,'index'])->name('memberRole_all');
Route::get('/memberRole/create',[MemberRolesController::class,'create'])->name('memberRole_create');
Route::get('/memberRole/edit/{id?}',[MemberRolesController::class,'edit'])->name('memberRole_edit')->whereNumber('id');

Route::post('/memberRole/store',[MemberRolesController::class,'store'])->name('memberRole_store');
Route::post('/memberRole/update',[MemberRolesController::class,'update'])->name('memberRole_update');
Route::post('/memberRole/destroy/{id?}',[MemberRolesController::class,'destroy'])->name('memberRole_destroy')->whereNumber('id');

//Member categories -----------------------------------------------------------------------------------

Route::get('/memberCategory/all',[MemberCategoriesController::class,'index'])->name('memberCategory_all');
Route::get('/memberCategory/create',[MemberCategoriesController::class,'create'])->name('memberCategory_create');
Route::get('/memberCategory/edit/{id?}',[MemberCategoriesController::class,'edit'])->name('memberCategory_edit')->whereNumber('id');

Route::post('/memberCategory/store',[MemberCategoriesController::class,'store'])->name('memberCategory_store');
Route::post('/memberCategory/update',[MemberCategoriesController::class,'update'])->name('memberCategory_update');
Route::post('/memberCategory/destroy/{id?}',[MemberCategoriesController::class,'destroy'])->name('memberCategory_destroy')->whereNumber('id');

//Members -----------------------------------------------------------------------------------

Route::get('/member/all',[MembersController::class,'index'])->name('member_all');
Route::get('/member/create',[MembersController::class,'create'])->name('member_create');
Route::get('/member/edit/{id?}',[MembersController::class,'edit'])->name('member_edit')->whereNumber('id');

Route::get('/member/assignrole/{id?}',[MembersController::class,'assignMemberRoles'])->name('assignMemberRole')->whereNumber('id');

Route::post('/member/store',[MembersController::class,'store'])->name('member_store');
Route::post('/member/update',[MembersController::class,'update'])->name('member_update');
Route::post('/member/destroy/{id?}',[MembersController::class,'destroy'])->name('member_destroy')->whereNumber('id');

//Communiques -----------------------------------------------------------------------------------

Route::get('/communique/all',[CommuniquesController::class,'index'])->name('communique_all');
Route::get('/communique/create',[CommuniquesController::class,'create'])->name('communique_create');
Route::get('/communique/edit/{id?}',[CommuniquesController::class,'edit'])->name('communique_edit')->whereNumber('id');

Route::post('/communique/store',[CommuniquesController::class,'store'])->name('communique_store');
Route::post('/communique/update',[CommuniquesController::class,'update'])->name('communique_update');
Route::post('/communique/destroy/{id?}',[CommuniquesController::class,'destroy'])->name('communique_destroy')->whereNumber('id');


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
