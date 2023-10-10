<?php

use App\Http\Controllers\contact_infoController;
use Illuminate\Support\Facades\Route;

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
Route::get('/contactUs', [contact_infoController::class, 'create']);
// Route::get('/contactUs', function () {
//     return view('contact_info.contactUs');
// });
//For Storing the  Contact Information
Route::post('/contact_info', [contact_infoController::class, 'store']);