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
    /*come chiesto nellla consegna modifico il file per far visualizzare dinamicamente il seguente messaggio*/
    $data = [
        'message' => 'Ti do il benvenuto in questa homepage dinamica'
    ];
    return view('home', $data);
});
