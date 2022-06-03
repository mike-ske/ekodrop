<?php

use App\Http\Controllers\CodeControllerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerRegisterationController;
use App\Http\Controllers\PhoneLoginController;
use App\Http\Controllers\ServiceControllerController;
use App\Http\Controllers\VendorCustomerController;

// use App\Http\Controllers\Auth\PhoneLoginController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendcontact']);

// PHONE LOGIN ROUTE
Route::get('/phonelogin', [PhoneLoginController::class, 'index'])->name('phonelogin');
Route::get('/phonelogin', [PhoneLoginController::class, 'loginWithPhone']);

// CUSOMER ROUTE
Route::get('/customregister', [VendorCustomerController::class, 'customIndex'])->name('customregister');
Route::post('/customregister', [VendorCustomerController::class, 'customCreate']);

// VENDOR ROUTE
Route::get('/vendregister', [VendorCustomerController::class, 'vendIndex'])->name('vendregister');
Route::post('/vendregister', [VendorCustomerController::class, 'vendCreate']);

Route::get('/verifyOTP', [CodeControllerController::class, 'index'])->name('verifyOTP');
Route::get('/onetimeservice', [ServiceControllerController::class, 'index'])->name('verifyOTP');


Auth::routes(['verify'=> true]);

// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

