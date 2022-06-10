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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/all', 'App\Http\Controllers\ContactController@allData')->name('contact-data');
Route::get('/contact/{id}', 'App\Http\Controllers\ContactController@showMessage')->name('contact-message');
Route::get('/contact/{id}/update', 'App\Http\Controllers\ContactController@updateMessage')->name('message-update');
Route::get('/contact/{id}/delete', 'App\Http\Controllers\ContactController@deleteMessage')->name('message-delete');


Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');
Route::post('/contact/{id}/update', 'App\Http\Controllers\ContactController@updateMessageSubmit')->name('message-form-submit');

