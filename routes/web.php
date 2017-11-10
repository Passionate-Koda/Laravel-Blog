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

Route::get('/', 'HomepageController@show' );
Route::get('/posts/{id}', 'AddpostController@displayPosts' );
Route::get('/admin', 'AddpostController@displayAdmin' );
Route::post('/admin', 'AdminController@login' );
Route::get('/logout', 'AdminController@logout' );

Route::get('/admin/register', 'AdminController@show' );
Route::post('/admin/addpost', 'AddpostController@publishPost' )->middleware('check');
Route::get('/admin/addpost', 'AddpostController@displayAddPost' )->middleware('bounce');
Route::get('/admin/view', 'ViewpostController@view')->middleware('bounce');
Route::get('/post/edit/{id}', 'ViewpostController@editPost');
Route::put('/post/edit/{id}', 'ViewpostController@updatePost');
Route::get('/post/delete/{id}', 'ViewpostController@confirmDelete');
Route::delete('/post/delete/{id}', 'ViewpostController@deletePost');
Route::post('/post/delete/{id}', 'ViewpostController@returnUndelete');
Route::post('/admin/register', 'AdminController@doAdminReg');
