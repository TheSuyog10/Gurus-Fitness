<?php

use App\Models\Membership;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\contact_infoController;

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
    return view('mains.index');
});
Route::get('/aboutUs', function () {
    return view('mains.aboutUs');
});
//For showing COntact Form
Route::get('/contactUs', [contact_infoController::class, 'create'])->middleware('auth');

// Route::get('/contactUs', function () {
//     return view('contact_info.contactUs');
// });
//For Storing the  Contact Information
Route::post('/contact_info', [contact_infoController::class, 'store']);
//To show Login Form
Route::get('/login', [UserController::class, 'create'])->name('login');
//Create Users / Store User Information
Route::post('/users', [UserController::class, 'store']);
//To Logout User
Route::post('/logout', [UserController::class, 'logout']);
//Login User / Authenticate User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
//Show all the forums
Route::get('/forum', [ForumController::class, 'index'])->middleware('auth');
//Show Form to post in forum
Route::get('/postforum', [ForumController::class, 'create'])->middleware('auth');
//For Storing the  Forum Information
Route::post('/forum', [ForumController::class, 'store'])->middleware('auth');
//Show Membership Plan
Route::get('/membership', [MembershipController::class, 'index']);
//Show Membership Booking Form
Route::get('/booking', [MembershipController::class, 'create']);
//For Storing the  Booking  Information
Route::post('/membership', [MembershipController::class, 'store']);