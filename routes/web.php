<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return inertia('Index/Index');
// });

Route::get('/', [App\Http\Controllers\IndexController::class, 'Index']);
Route::get('/hello', [App\Http\Controllers\IndexController::class, 'Show']);

Route::resource('/listing', App\Http\Controllers\ListingController::class);

