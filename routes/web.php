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
    return view('pages.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth', 'authController@index')->name('index.authentications'); 
//Saving New authentications
Route::get('/auth/create', 'authController@create')->name('create.authentications'); 
Route::post('/auth/create', 'authController@store')->name('store.authentications');
//Updating authentications
Route::get('/auth/edit/{authId}', 'authController@edit')->name('edit.authentications');  
Route::post('/auth/edit/{authId}', 'authController@update')->name('update.authentications');
//Updating authentication items
Route::get('/authItems/edit/{authId}', 'authController@editItem')->name('edit.authenticationItems');  
Route::post('/authItems/edit/{authId}', 'authController@updateItem')->name('update.authenticationItems');
//Delete authentications
Route::get('/auth/delete/{authId}', 'authController@delete')->name('delete.authentications');

Route::get('/settings/general_settings', function(){
	return view('settings.general_settings');
});

Route::get('/settings/company_profile', function(){
	return view('settings.company_profile');
});

Route::get('/settings/roles', function(){
	return view('settings.roles');
});