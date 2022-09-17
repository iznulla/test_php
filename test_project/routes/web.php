<?php

use App\Http\Controllers\AutorsController;
use App\Http\Controllers\MainController;
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

Route::get('/', 'App\Http\Controllers\MainController@index');
Route::redirect('/', 'authors');
Route::get('/admin', 'App\Http\Controllers\MainController@admin');
Route::get('/lib', 'App\Http\Controllers\MainController@lib');
// Route::get('/{books}', 'App\Http\Controllers\MainController@books');

Route::resource('/authors', AutorsController::class);
