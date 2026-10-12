<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $mahasiswa = [
        'nama' => 'Budi Santoso',
        'nim' => '1234567890',
        'hobi' => ['Ngoding', 'Gaming', 'Tidur']
    ];
    return view('home', compact('mahasiswa'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hello/{nama}', function ($nama) {
    return view('hello', compact('nama'));
});