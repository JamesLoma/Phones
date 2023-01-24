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

Route::get('/phones', function () {
    $phones=[
        ['type'=> 'iPhones', 'base'=> 'X, Xs max, 12 Promax'], 
        ['type'=> 'Samsung', 'base'=> 'S9, Note 10, S21'],
        ['type'=> 'Google pixel', 'base'=> '3a, 4, 4a']
    ];
   return view('phones',['phones' => $phones]);
   //return 'phones';
});