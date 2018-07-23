<?php

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

Route::get('filemanager', 'FileManagerController@index')->name('filemanager');
Route::post('filemanager', 'FileManagerController@filter');

Route::get('filemanager/{id}', 'FileFolderController@show')->name('filefolder');
Route::post('filefolder', 'FileFolderController@store');
