<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome',[App\Http\Controllers\userNoAuthController::class, 'index']);


Route::middleware(['auth'])->get('/user/dashboard', [App\Http\Controllers\UserDashboardControllerController::class, 'index'])->name('dashboard');


Route::middleware(['auth'])->get('/user/dashboard/view', [App\Http\Controllers\UserDashboardControllerController::class, 'view'])->name('view');

Route::resource('user/bid', '\App\Http\Controllers\BidController');




Auth::routes();

Route::group(['middleware' => ['auth','isAdmin']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/admin/tender/download', [\App\Http\Controllers\TenderController::class, 'download']);
    Route::get('/admin/tender/view', [\App\Http\Controllers\TenderController::class, 'view_tender']);
    Route::resource('/admin/tender', '\App\Http\Controllers\TenderController');
    Route::get('/admin/bids/view', [\App\Http\Controllers\BidController::class, 'index']);
    Route::resource('/admin/bids/delete', '\App\Http\Controllers\BidController');
    Route::resource('/admin/bids/mail', '\App\Http\Controllers\BidMailController');
    
    Route::middleware(['auth'])->resource('/admin/bid', '\App\Http\Controllers\BidController');
 
 
 });