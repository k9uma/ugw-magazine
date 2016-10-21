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

Route::auth();
Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', [
    'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
    'uses' => 'AdminController@index',
    'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);

<<<<<<< HEAD
 Route::get('/student', function(){
 	return view('student.index');
 });

Route::auth();
=======
 Route::get('student',
     ['middleware' => ['auth', 'roles'],
      'uses'=> 'StudentController@index',
     'roles' => ['student']
     ]);
>>>>>>> 1451ab6fcfc4b10b3be3ec6ef1877450f4944ea8

Route::get('/home', 'HomeController@index');

Route::get('/admin', 'AdminController@admin');

Route::get('/coordinator', 'CoordinatorController@coordinator');

Route::get('/manager', 'ManagerController@manager');

Route::get('/student', 'StudentController@student');

Route::get('/guest', 'GuestController@guest'); 