<?php

use App\Http\Controllers\Api\AuthaaController;
use App\Http\Controllers\Api\PropertyController;
use App\Http\Controllers\Api\ResetPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('email/verification-notification', [EmailVerificationController::class, 'sendVerificationEmail'])->middleware('auth:sanctum');
Route::get('verify-email/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name('verification.verify')->middleware('auth:sanctum');

Route::post('forgot-password', [ResetPasswordController::class, 'forgotPassword']);
Route::post('reset-password', [ResetPasswordController::class, 'reset']);

// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(AuthaaController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->middleware(['auth:sanctum']);
    Route::post('/register', 'register');
});
//->middleware(['auth:sanctum']);


Route::controller(PropertyController::class)->group(function () {
Route::get('newproperty', 'show')->name('newproperty')->middleware('sanctum');
Route::get('recommendhotel', 'recommendhotel')->name('recommendhotel');
Route::get('filterdata', 'filter')->name('filterdata');
Route::get('settingesapp', 'settinges')->name('settingesapp');
Route::get('forcountry', 'index')->name('forcountry');
Route::get('searchnameorcountrey', 'search')->name('searchnameorcountrey');
Route::get('catogerydata', 'create')->name('catogerydata');
Route::get('propertydetalis/{id}', 'showdetalis')->name('propertydetalis');
Route::post('updateviews/{id}', 'updateViews')->name('updateviews');
Route::post('addreport', 'addreport')->name('addreport');
Route::post('addenqueris', 'addenqueris')->name('addenqueris');
Route::post('addproperty/{id}', 'updateViews')->name('addproperty');
Route::get('mostview', 'getMostViewedProperties')->name('mostview');
})->middleware(['auth:sanctum']);;
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

