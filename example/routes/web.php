<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', 'App\Http\Controllers\BlogController@index')->name('ind.index');
Route::get('/blog/{blogs}', 'App\Http\Controllers\BlogController@show')->name('show.index');
Route::get('/about','App\Http\Controllers\AboutController@index')->name('about.index');
Route::get('/contact','App\Http\Controllers\ContactController@index')->name('contact.index');
Route::get('/main','App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/admin','App\Http\Controllers\admin\AdminController@index')->name('index.index');
Route::get('/admin/create','App\Http\Controllers\admin\AdminController@create')->name('create.index');
Route::post('/admin/create', 'App\Http\Controllers\admin\AdminController@storer');

Route::get('/admin/{blogs}/edit','App\Http\Controllers\admin\AdminController@edit')->name('edit.index');
Route::patch('/admin/update/{blogs}','App\Http\Controllers\admin\AdminController@update')->name('update.index');
Route::delete('/admin/delete/{blogs})','App\Http\Controllers\admin\AdminController@destroy')->name('destroy.index');


//Route::view('/','default');
//Route::get('/blog','BlogController@index');
