<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'PostsController@index');

Route::get('/home', 'PostsController@index');

Route::get('/users/edit', 'UsersController@edit');
Route::post('/users/update', 'UsersController@update');
Route::get('/users/{user_id}', 'UsersController@show');

Route::get('/posts/new', 'PostsController@new')->name('new');
Route::post('/posts','PostsController@store');
Route::get('/postsdelete/{post_id}', 'PostsController@destroy');
Route::get('/posts/{post_id}/likes', 'LikesController@store');
Route::post('/posts/{comment_id}/comments','CommentsController@store');

Route::get('/likes/{like_id}', 'LikesController@destroy');

Route::get('/comments/{comment_id}', 'CommentsController@destroy');