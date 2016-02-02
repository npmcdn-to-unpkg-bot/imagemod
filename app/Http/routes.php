<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [
    'as' => 'image', 'uses' => 'ImgController@index'
]);

Route::get('image/moderator', [
    'as' => 'image.moderator', 'uses' => 'ImgController@moderator'
]);

Route::get('image/all', [
    'as' => 'image.all', 'uses' => 'ImgController@all'
]);

Route::get('image/panding', [
    'as' => 'image.panding', 'uses' => 'ImgController@panding'
]);

Route::get('image/rejected', [
    'as' => 'image.rejected', 'uses' => 'ImgController@rejected'
]);

Route::get('image/moderate', [
    'as' => 'image.moderate', 'uses' => 'ImgController@moderate'
]);


Route::resource('image', 'ImgController');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
