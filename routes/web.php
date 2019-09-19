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
    return view('posts/welcome');
});

Route::get('posts', function () {
    $name='Purvik';
	return view('posts/welcome', compact('name'));
});


Route::get('posts/viewallposts', function () {
	$posts=DB::table('tb_posts')->get();
	return view('posts/viewallposts', compact('posts'));
});


Route::get('posts/createnewposts', function () {
	$posts=DB::table('tb_posts')->get();
	return view('posts/createpost', compact('posts'));
});


Route::post('posts/store', 'PostsController@store');

Route::get('logout/', 'PostsController@logout');
