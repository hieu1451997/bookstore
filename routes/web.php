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

Route::get('/','AdminController@index');

//Category
// danh sach category
Route::get('/list-category-product','CategoryProductController@list');
// them category
Route::post('/save-category-product','CategoryProductController@save_category');
// sua category
Route::post('/edit-category-product/{category_id}','CategoryProductController@edit_category');
// xoa category
Route::post('/delete-category-product/{category_id}','CategoryProductController@delete_category');

//Publisher
// danh sach publisher
Route::get('/list-publisher','PublisherController@list');
// them Publisher
Route::get('/add-publisher','PublisherController@add_publisher');
Route::post('/save-publisher','PublisherController@save_publisher');