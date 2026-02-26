<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.Beranda.index'); 
})->name('beranda');

Route::get('/User', function () {
    return view('admin.pages.User.User');
})->name('user');

Route::get('/Jurusan', function () {
    return view('admin.pages.Jurusan.Jurusan');
})->name('jurusan');

Route::get('/Pendaftaran', function () {
    return view('admin.pages.Pendaftaran.Pendaftaran');
})->name('pendaftaran');


// Route::get('/guest', function () {
//     return view('guest.layout.app'); 
// });
