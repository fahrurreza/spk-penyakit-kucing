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

Route::get('/', 'HomeController@index');

Route::resource('/client', 'ClientController');

Route::resource('/admin', 'AdminController');

Route::resource('/penyakit', 'PenyakitController');

Route::resource('/gejala', 'GejalaController');

Route::resource('/ct', 'CtController');

Route::resource('/rule', 'RuleController');

Route::resource('/rule_gejala', 'RulegejalaController');

Route::resource('/rule_penyakit', 'RulepenyakitController');

Route::resource('/diagnosa', 'DiagnosaController');

Route::resource('/user', 'UsersController');
Route::post('/password', 'UsersController@edit');


Auth::routes();

