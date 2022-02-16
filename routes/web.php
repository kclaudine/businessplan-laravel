<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IntouchController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/redirect',[HomeController::class, 'redirect']);
Route::get('/',[HomeController::class, 'index']);

Route::get('/product',[AdminController::class, 'product']);
Route::post('/uploadproduct',[AdminController::class, 'uploadproduct']);

Route::get('/redirect/{booking}',[HomeController::class, 'viewbooking'])->name('viewbooking');

// Route::post('/product/booking/store',[BookingController::class, 'booking']);

Route::get('/contact',[ContactController::class, 'contact'])->name('contact');
Route::post('/send-message',[CoachController::class, 'sendEmail'])->name('contact.send');

Route::get('/coach',[CoachController::class, 'coach'])->name('coach');
Route::post('/send',[CoachController::class, 'coachMail'])->name('coach.send');

Route::get('/about',[AboutController::class, 'abt'])->name('about');

Route::get('/intouch',[IntouchController::class, 'intch'])->name('intouch');