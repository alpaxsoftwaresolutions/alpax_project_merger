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



Auth::routes();
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {

////////////////////////////////////////////ADMIN////////////////////////////////////////////////////////////////
///
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


////////////////////////////////////////////HRIS///////////////////////////////////////////////////////////////////

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

//View Employement Status
Route::get('/violations', 'violationsController@index')->name('index.violations');
//Save and Edit Employement Status
Route::post('/violations/create', 'violationsController@store')->name('store.violations'); 
//Delete Employement Status
Route::post('/violations/delete', 'violationsController@delete')->name('delete.violations');

//Document Number Setup
Route::get('settings/ezpp/hris/document_number_setup', function(){
	return view('settings.ezpp.hris.document_number_setup');
});

//Profit Center
Route::get('settings/ezpp/hris/profit_center', function(){
	return view('settings.ezpp.hris.profit_center');
});



//Profit Center
Route::get('pages/login', function(){
	return view('pages.login');
});

//SSS Table
Route::get('settings/ezpp/tables/sss_table', function(){
	return view('settings.ezpp.tables.sss_table');
});

//Pagibig Table
Route::get('settings/ezpp/tables/pagibig_table', function(){
	return view('settings.ezpp.tables.pagibig_table');
});

//PhilHealth Table
Route::get('settings/ezpp/tables/philhealth_table', function(){
	return view('settings.ezpp.tables.philhealth_table');
});


//Settings -> EZPP -> Payroll

//Payroll Configuration
Route::get('/settings/ezpp/payroll/payroll_configuration', 'PayrollConfigurationController@index')->name('index.payroll_configuration');

Route::post('/settings/ezpp/payroll/payroll_configuration/create', 'PayrollConfigurationController@store')->name('store.payroll_configuration');

Route::get('/settings/ezpp/payroll/payroll_configuration/delete/{config_id}', 'PayrollConfigurationController@delete')->name('delete.payroll_configuration');

	//GL Accounts
Route::get('settings/financials/gl_determination', function(){
	return view('settings.financials.gl_determination');
});
});


//Create Database Table
Route::get('/table/create/', 'tableController@create')->name('create.table'); 
Route::post('/table/create/', 'tableController@store')->name('store.table'); 