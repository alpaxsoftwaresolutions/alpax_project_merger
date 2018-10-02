<?php

/
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
/

Route::get('/', function () {
	return view('pages.home');
});

Route::get('/insert-module','PagesController@insert_module');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD

//View authentications
Route::get('/auth/', 'authController@index')->name('index.authentications'); 

=======
//View authentications
Route::get('/auth/', 'authController@index')->name('index.authentications'); 
>>>>>>> 3ed9c05346495638ad02a0386ae89c9052ba092e
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
<<<<<<< HEAD

=======
>>>>>>> 3ed9c05346495638ad02a0386ae89c9052ba092e
Route::get('/auth/delete/{authId}', 'authController@delete')->name('delete.authentications'); 
//View Roles
Route::get('/role/', 'roleController@index')->name('index.role'); 
//Saving New role
Route::get('/role/create', 'roleController@create')->name('create.role'); 
Route::post('/role/create', 'roleController@store')->name('store.role');
//Updating authentications
Route::get('/role/edit/{roleId}', 'roleController@edit')->name('edit.role');  
Route::post('/role/edit/{roleId}', 'roleController@update')->name('update.role');
//Delete role
<<<<<<< HEAD

=======
Route::get('/role/delete/{roleId}', 'roleController@delete')->name('delete.role'); 
>>>>>>> 3ed9c05346495638ad02a0386ae89c9052ba092e
//View company
Route::get('/company/', 'companyController@index')->name('index.company'); 
//Saving company
Route::get('/company/edit/{companyID}', 'companyController@edit')->name('edit.company');  
Route::post('/company/edit/{companyID}', 'companyController@update')->name('update.company');
//Delete company
Route::get('/company/delete/{companyID}', 'companyController@delete')->name('delete.company'); 
<<<<<<< HEAD










//Create Database Table
Route::get('/table/create/', 'tableController@create')->name('create.table'); 
Route::post('/table/create/', 'tableController@store')->name('store.table'); 

=======
//Create Database Table
Route::get('/table/create/', 'tableController@create')->name('create.table'); 
Route::post('/table/create/', 'tableController@store')->name('store.table'); 
>>>>>>> 3ed9c05346495638ad02a0386ae89c9052ba092e
