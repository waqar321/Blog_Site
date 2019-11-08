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


//Registeration
Route::match(['get', 'post'],'Loginpage', 'Home@form_login');
Route::get('Logoutpage', 'Home@Logoutpage');
Route::match(['get', 'post'],'RegisterPage', 'Home@form_register');
				
//body				
Route::group(['middleware'=>['checkhome']], function(){
	
	Route::get('home', 'Home@home');
	Route::get('Update/{id}', 'Home@Update');
	Route::get('Delete/{id}', 'Home@Delete');
	Route::match(['get', 'post'],'create', 'Home@create');
	Route::get('portfolio/', 'Home@portfolio');
	Route::get('contact_us', 'Home@contact_us');
	Route::get('services', 'Home@services');
	Route::get('about_us', 'Home@about_us');
});

// Route::get('home', 'Home@home')->middleware('checkhome');


//practice 
// Route::get('list', 'Home@lists');
// Route::get('product/details/{id}', 'Home@Product_details');
// Route::get('waqar', 'products@lists');
// Route::get('centre', 'Home@centre');
// Route::get('navigation', 'Home@navigation');

// Route::get('product/details/{id}', 'products@Product_details');

Auth::routes();

// Route::get('home', 'HomeController@index')->name('home');
