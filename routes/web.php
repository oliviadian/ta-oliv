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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/Login', function () {
    return view('login');
});

Route::post('/kirimdata', 'login@login');
Route::get('/keluar', 'login@keluar');

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/SeputarLaman', function () {
    return view('seputarlaman');
});

Route::get('/Pencarian', function () {
    return view('pencarian');
});

Route::get('/Daftar', function () {
    return view('daftar');
});

Route::get('/seputarlaman/login', function () {
    return view('seputarlaman-al');
});

Route::get('/Kedalaman/login', function () {
    return view('kedalamankata-al');
});

Route::get('/PencarianNoun/login', function () {
    return view('pencarian-noun');
});

Route::get('/PencarianVerb/login', function () {
    return view('pencarian-verb');
});

