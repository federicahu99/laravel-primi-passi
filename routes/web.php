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
    $data = [
        'links' => 
        [
            ['name' => 'page a', 'url' => '/a'],
            ['name' => 'page b', 'url' => '/b'],
            ['name' => 'page c', 'url' => '/c'],
        ],
    ];
    return view('home' , $data);
});

Route::get('/a', function () {
    return view('pages.a');
});

Route::get('/b', function () {
    return view('pages.b');
});

Route::get('/c', function () {
    return view('pages.c');
});



