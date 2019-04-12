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

Route::get('/', function () {
    return view('welcome');
});

Route::get('step', function(){
    return 'Hello Stephani! Halo semuanya, selamat belajar Laravel.';
});

Route::get('welcome', function(){
    return 'Welcome';
});


Route::get('/index', function () {
echo "<a href='".route('create')."'>Akses Route dengan nama </a>";
});

Route::get('/create', function () {
echo "Route diakses menggunakan nama";
})->name('create');

Route::get('/barangs', 'barangsController@index');

Route::get('/barangs/show', 'barangsController@show');

Route::get('/halaman',function(){
$title = 'Harry Pooter';
$konten = 'harry potter and the deathly hallows: part 2';
return view('konten.halaman',compact('title','konten'));
});

Route::get('/pelanggan','pelangganController@index');

Route::resource('barangs','barangsController');