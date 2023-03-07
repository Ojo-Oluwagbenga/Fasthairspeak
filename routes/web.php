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

// Had to configure the controller namespace at app/Providers/RouteServiceProvider.php


Route::get('/', 'ApiController@editpage');


//Vercel doesnt seem to comply well with api blablabla so I'm using /apis

Route::post('/apis/save', 'ApiController@save');
Route::post('/apis/gettext', 'ApiController@gettext');
