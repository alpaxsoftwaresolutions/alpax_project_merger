<?php
/*
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
*/

Route::get('/', function () {
	return view('pages.home');
});

Route::get('/settings/general_settings', function () {
	return view('settings.general_settings');
});

Route::get('/insert-module','PagesController@insert_module');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//View authentications and AuthenticationItems
Route::get('/auth/', 'authController@index')->name('index.authentications'); 
//Saving New authentications and AuthenticationItems
Route::post('/auth/create', 'authController@store')->name('store.authentications');
//Delete authentications
Route::get('/auth/delete/{authId}', 'authController@delete')->name('delete.authentications'); 


//View Roles
Route::get('/role/', 'roleController@index')->name('index.role'); 
//Saving And Editting New role 
Route::post('/role/create', 'roleController@store')->name('store.role');
//Delete role
Route::get('/role/delete/{roleId}', 'roleController@delete')->name('delete.role'); 




//View company
Route::get('/company/', 'companyController@index')->name('index.company'); 
//Saving and Editting company 
Route::post('/company/create/', 'companyController@store')->name('store.company');
//Delete company
Route::post('/company/delete', 'companyController@delete')->name('delete.company'); 




//View Branch
Route::get('/branch/', 'branchController@index')->name('index.branch'); 
//Save and Edit Branch
Route::post('/branch/create', 'branchController@store')->name('store.branch'); 
//Delete Branch
Route::get('/branch/delete/{branchID}', 'branchController@delete')->name('delete.branch');




//View Departments
Route::get('/department', 'departmentController@index')->name('index.department');
//Save and Edit Departments
Route::post('/department/create', 'departmentController@store')->name('store.department'); 
//Delete Departments
Route::post('/department/delete', 'departmentController@delete')->name('delete.department');




//View Employement Status
Route::get('/empstatus', 'empstatusController@index')->name('index.empstatus');
//Save and Edit Employement Status
Route::post('/empstatus/create', 'empstatusController@store')->name('store.empstatus'); 
//Delete Employement Status
Route::post('/empstatus/delete', 'empstatusController@delete')->name('delete.empstatus');


//Employment Status
Route::get('/settings/ezpp/hris/employment_status', function(){
	return view('settings.ezpp.hris.employment_status');
});

//Violation
Route::get('/settings/ezpp/hris/violations', function(){
	return view('settings.ezpp.hris.violations');
});

//Document Number Setup
Route::get('settings/ezpp/hris/document_number_setup', function(){
	return view('settings.ezpp.hris.document_number_setup');
});

//Profit Center
Route::get('settings/ezpp/hris/profit_center', function(){
	return view('settings.ezpp.hris.profit_center');
});
















//Create Database Table
Route::get('/table/create/', 'tableController@create')->name('create.table'); 
Route::post('/table/create/', 'tableController@store')->name('store.table'); 