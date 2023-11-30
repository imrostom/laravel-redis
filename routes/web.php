<?php

use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
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
    return "Ok";
});

Route::get('/mail', function () {
    Mail::to('rostom@gmail.com')->send(new TestEmail());
    echo  "Send successfully.";
});

Route::get('/mail/redis', function () {
    Mail::to('rostom@gmail.com')->send(new TestEmail());
    echo  "Send successfully.";
});
