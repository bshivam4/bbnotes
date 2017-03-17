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
    return view('welcomeapp');
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index');



//Route::group(['middleware' => 'admin'], function () {	

	Route::get('/admin', function ()
			{
				return view('admin.index');
			})->middleware('admin');

	

	Route::get('/createcollege', 'CollegesController@create');
	Route::post('/createcollege', 'CollegesController@store');


	Route::get('/addquestionpaper', 'QuestionpapersController@create');
	Route::post('/addquestionpaper', 'QuestionpapersController@store');


	Route::get('/adddepartment', 'DepartmentsController@create');
	Route::post('/adddepartment', 'DepartmentsController@store');


	Route::get('/addsubject', 'SubjectsController@create');
	Route::post('/addsubject', 'SubjectsController@store');
//});

Route::get('/redirectfacebook', 'FacebookLoginController@redirect');
Route::get('/callbackfacebook', 'FacebookLoginController@callback');

Route::get('/redirectgoogle', 'GoogleLoginController@redirect');
Route::get('/callbackgoogle', 'GoogleLoginController@callback');

Route::get('/demo', 'FacebookLoginController@demo');

Route::get('/getsem', 'AjaxController@getsem');
Route::get('/getsubject', 'AjaxController@getsubject');