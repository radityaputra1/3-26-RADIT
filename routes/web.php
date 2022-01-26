<?php

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
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view(
        'about',
        [
            "title" => "About",
            "nama" => "Raditya Putra Anugra Pratama",
            "email" => "3103120177@student.smktelkom-pwt.sch.id",
            "gambar" => "radit.jpg"
        ]
    );
});
Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});
use App\Http\Controllers\ContactController;
Route::resource('/contacts', ContactController::class);