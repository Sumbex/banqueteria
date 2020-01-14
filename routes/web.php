<?php

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

use App\Mail\SendMessage;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mail', function () {
    Mail::to('test@test.cl')->send(new SendMessage());
    return new SendMessage();
});

Route::post('/send_mail', 'MailController@SendMail');
/* Route::post('auth/login', 'AuthController@login'); */