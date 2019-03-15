<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('sap', function(){
    return 'Hello Safira! Halo semuanya, selamat belajar Laravel.';
});