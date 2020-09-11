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

Route::get('/category','Crud\CategoryController@index');
Route::post('/categoryadd','Crud\CategoryController@insert');
Route::get('/product','Crud\CategoryController@getAll');
Route::post('/productsave','Crud\ProductController@insert');
Route::get('/productdata','Crud\ProductController@getAll');




