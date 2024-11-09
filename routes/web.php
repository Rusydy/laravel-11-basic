<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about.index', ['company' => 'Laravel']);
})->name('about.index');

Route::get('/coffee', function () {
    $coffees = [
        ["name" => "Americano", "price" => 2.5, "id" => 1],
        ["name" => "Latte", "price" => 3.5, "id" => 2],
        ["name" => "Cappuccino", "price" => 4.0, "id" => 3],
        ["name" => "Mocha", "price" => 4.5, "id" => 4],
        ["name" => "Macchiato", "price" => 3.0, "id" => 5],
    ];

    return view('coffee.index', ['coffees' => $coffees]);
})->name('coffee.index');