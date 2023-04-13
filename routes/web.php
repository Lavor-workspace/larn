<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if (!Auth::user()) {
        return view('routing.welcome');
    } else {
        return view('routing.main');
    }
});

Route::get('/documentation', function () {
    return view('routing.documentation');
});

Route::get('/login', function () {
    return view('routing.login');
});

Route::get('/personal', function () {
    return view('routing.personal');
});

Route::get('/profile', function () {
    return view('routing.profile');
});

Route::get('/offline', function () {
    return view('routing.offline');
})->name('offline');


Route::get('/document', function () {
    return view('routing.document');
});
