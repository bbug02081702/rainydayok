<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/waiting-a-rainy-day-070922', function(){
    return view('templates.rainy');
});
Route::get('/login', function(){
    return view('templates.login');
});
// Route::post('/rainy-day', function(){
//     return view('templates.rainy-day');
// });
Route::post('/rainy-day', function(){
    return view('templates.rainy-day');
});
