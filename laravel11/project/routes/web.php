<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('users', function () {
    $users = [
        ['id' => 1, 'name' => 'Alice', 'email' => 'alice"@example.com'],
        ['id' => 2, 'name' => 'Bob', 'email' => 'bob@example.com'],
        ['id' => 3, 'name' => 'Charlie', 'email' => 'charlie@example.com'],
    ];

    return view('users.index', compact('users'));
});
