<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{user}', [
    'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
    'uses' => 'UserController@index',
    'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);

 Route::get('/student', function(){
 	return view('student.index');
 });

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/admin', 'AdminController@admin');

Route::get('/coordinator', 'CoordinatorController@coordinator');

Route::get('/manager', 'ManagerController@manager');

Route::get('/student', 'StudentController@student');

Route::get('/guest', 'GuestController@guest'); 