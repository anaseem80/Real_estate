<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvisorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CatogeryController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\PaintController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\testControler;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebControlle;
use App\Mail\Testmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::get('/send',function () {
    Mail::to('d4a3bd7aa2@boxmail.lol')->send(new Testmail);

    return response('seeeeend');
});
 Route::get('/login', function () {
     return view('auth\login');
 })->name('login');

// Route::get('/dashboard', function () {
//     return view('realest.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::controller(PaintController::class)->group(function(){
    Route::get('/paints','index')->name('paints');
    Route::post('paint.store','store')->name('paint.store');
    Route::get('/viewPaints','viewPaints')->name('viewPaints');
    Route::get('paint_delete','destroy')->name('paint_delete');
});
Route::controller(BlogController::class)->group(function () {
Route::get('/blogview',  'index')->name('blogview');
Route::get('/blogscreate',  'create')->name('blogscreate')->middleware(['admin','auth']);
Route::post('/blogs.store', 'store')->name('blogs.store')->middleware(['admin','auth']);;
Route::get('/blogs/{id}/edit',  'edit')->name('blogs.edit')->middleware(['admin','auth']);;
Route::post('/blogs.update', 'update')->name('blogs.update')->middleware(['admin','auth']);;
Route::post('/blogs.destroy', 'destroy')->name('blogs.destroy')->middleware(['admin','auth']);;
Route::get('/blogs/{id}', 'show')->name('showblog');
});






Route::controller(WebControlle::class)->group(function () {
Route::get('/','index')->name('test');
Route::get('/test','index')->name('test');
Route::post('/addenqueris','addenqueris')->name('addenqueris');
Route::post('/addreport', 'addreport')->name('addreport');
Route::get('/detelisscreen/{id}', 'detalisscreen')->name('detelisscreen');
Route::get('/moreproperty/{country}', 'moreproperty')->name('moreproperty');
Route::get('/aboutpage', 'aboutpage')->name('aboutpage');
Route::get('/terms', 'terms')->name('terms');
Route::get('/morepropertyCato/{catogery}', 'morepropertyCato')->name('morepropertyCato');
});








Route::middleware('auth')->group(function () {

  Route::controller(PropertyController::class)->group(function () {
        Route::get('/dashboard', 'dashboarddata')->name('dashboard')->middleware(['admin','auth']);
        Route::get('/propertys', 'index')->name('propertys')->middleware(['admin','auth']);
        Route::get('/propertyinsertview', 'indexinsert')->name('propertyinsertview');
        Route::get('/propertyinsertweb', 'indexinsertweb')->name('propertyinsertweb');
        Route::post('/property.store', 'store')->name('property.store')->middleware(['auth']);
        Route::post('/property.recommended', 'recommended')->name('property.recommended')->middleware(['admin','auth']);
        Route::post('/property.edit', 'edit')->name('property.edit')->middleware(['admin','auth']);
        Route::post('/property.destroy', 'destroy')->name('property.destroy')->middleware(['admin','auth']);
        Route::get('/adsproperty', 'ads')->name('adsproperty')->middleware(['admin','auth']);
    });
    
    Route::controller(CatogeryController::class)->group(function () {
       // Route::get('/catogery', 'index')->name('catogery');
        Route::get('/catogeryview', 'index')->name('catogeryview')->middleware(['auth']);
        Route::post('/catogerystore', 'store')->name('catogery.store')->middleware(['auth']);
        Route::post('/catogeryupdate', 'update')->name('catogery.update')->middleware(['auth']);
        Route::post('/catogerydestroy', 'destroy')->name('catogery.destroy')->middleware(['auth']);
    });


    Route::controller(SettingController::class)->group(function () {
        Route::get('/setting', 'index')->name('setting')->middleware(['admin','auth']);
        Route::post('/setting.store', 'store')->name('setting.store')->middleware(['admin','auth']);
        Route::post('/setting.update', 'update')->name('setting.update')->middleware(['admin','auth']);
        Route::post('/setting.destroy', 'destroy')->name('setting.destroy')->middleware(['admin','auth']);
    });

    
    Route::controller(ReportController::class)->group(function () {
        Route::get('/report', 'index')->name('report')->middleware(['admin','auth']);
        Route::post('/report.store', 'store')->name('report.store')->middleware(['admin','auth']);
        Route::post('/report.update', 'update')->name('report.update')->middleware(['admin','auth']);
        Route::post('/report.destroy', 'destroy')->name('report.destroy')->middleware(['admin','auth']);
    });
    Route::controller(EnquiryController::class)->group(function () {
        Route::get('/enquiry', 'index')->name('enquiry')->middleware(['admin','auth']);
        Route::post('/enquiry.store', 'store')->name('enquiry.store')->middleware(['admin','auth']);
        Route::post('/enquiry.update', 'update')->name('enquiry.update')->middleware(['admin','auth']);
        Route::post('/enquiry.destroy', 'destroy')->name('enquiry.destroy')->middleware(['admin','auth']);
    });
    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('user')->middleware(['admin','auth']);;
        Route::post('/user.store', 'store')->name('user.store')->middleware(['admin','auth']);;
        Route::post('/user.edit', 'edit')->name('user.edit')->middleware(['admin','auth']);;
        Route::post('/user.update', 'update')->name('user.update')->middleware(['admin','auth']);
        Route::post('/user.destroy', 'destroy')->name('user.destroy')->middleware(['admin','auth']);
    });
    Route::controller(AdvisorController::class)->group(function(){
        Route::get('/advisors','index')->name('advisors')->middleware(['auth']);
        Route::get('advisors.search','search')->name('advisors.search');
        //Route::get('PurposeOfPurchase','PurposeOfPurchase')->name('PurposeOfPurchase')->middleware(['auth']);
    });
    Route::get('search',[SearchController::class,'search'])->name('search');
    Route::get('property_ajax/{id}',[SearchController::class,'property_ajax'])->name('property_ajax');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    
});

//Route::get('/{page}', 'AdminController@index');
require __DIR__.'/auth.php';
Route::get('/{page}', [AdminController::class,'index']);