<?php

use App\Http\Controllers\ControllerObat;
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


Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', "ControllerObat@index");
Route::get('/edit/{id}', "ControllerObat@edit");
Route::get('/show/{id}', "ControllerObat@show");
Route::get('/create', "ControllerObat@create");
Route::post('/store', "ControllerObat@store");
Route::post('/update/{id}', "ControllerObat@update");
Route::get('/destroy/{id}', "ControllerObat@destroy");
