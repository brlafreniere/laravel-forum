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

Route::get('topic/{topic_slug}/', 'PostsController@index')->name('topic-posts');

Route::resource('posts', 'PostsController');
Route::resource('users', 'UsersController');
Route::resource('user-sessions', 'UserSessionController');

Route::resource('admin/topics', 'Admin\TopicsController');
Route::get('admin/topics/{id}/confirm-delete', 'Admin\TopicsController@confirm_delete');