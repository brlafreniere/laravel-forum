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

Route::get('/', 'TopicsController@index');
Route::get('/admin/dashboard', 'AdminController@show');

Route::get('topic/{topic_title}/', 'PostsController@index')->name('topic-posts');

Route::resource('posts', 'PostsController');
Route::resource('user-sessions', 'UserSessionController');
Route::resource('admin/topics', 'Admin\TopicsController');