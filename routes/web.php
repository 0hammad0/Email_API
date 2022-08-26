<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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
    $data = [
        'title' => 'Hi I am Hammad',
        'content' => 'I am Future Millionaire'
    ];

    Mail::send('email', $data, function ($message) {
        $message->from('hammadazam101010@gmail.com', 'Hammad');
        $message->sender('hammadazam101010@gmail.com', 'Hammad');
        $message->to('muhammadhammadgc@gmail.com', 'Hammad');
        $message->subject('Hellow');
    });
});
