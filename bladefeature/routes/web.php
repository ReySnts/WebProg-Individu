<?php

use App\Http\Controllers\ExampleController;
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

Route::get
(
    '/', 
    function () 
    {
        return view('welcome');
    }
);

Route::get
(
    '/home', 
    [
        ExampleController::class, 
        'display'
    ]
);

Route::get
(
    '/auth/redirect', 
    [
        ExampleController::class,
        'redirect'
    ]
);

Route::get
(
    '/auth/callback', 
    [
        ExampleController::class,
        'callback'
    ]
);