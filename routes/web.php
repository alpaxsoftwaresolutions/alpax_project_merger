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
//Delete Branch
Route::post('/department/delete', 'departmentController@delete')->name('delete.department');





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



//Users
Route::get('/settings/user_management/users', function(){
	return view('settings.user_management.users');
});


//Departments
Route::get('/settings/ezpp/hris/departments', function(){
	return view('settings.ezpp.hris.departments');
});

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

//Earnings
Route::get('settings/ezpp/hris/earnings', function(){
	return view('settings.ezpp.hris.earnings');
});

//Deductions
Route::get('settings/ezpp/hris/deductions', function(){
	return view('settings.ezpp.hris.deductions');
});

//Positions
Route::get('settings/ezpp/hris/positions', function(){
	return view('settings.ezpp.hris.positions');
});

//Message Board
Route::get('settings/ezpp/hris/kiosk_management/message_board', function(){
	return view('settings.ezpp.hris.kiosk_management.message_board');
});

//Company Activities
Route::get('settings/ezpp/hris/kiosk_management/company_activities', function(){
	return view('settings.ezpp.hris.kiosk_management.company_activities');
});

//Group Message Settings
Route::get('settings/ezpp/hris/kiosk_management/group_message_settings', function(){
	return view('settings.ezpp.hris.kiosk_management.group_message_settings');
});

//Employee Reset Password
Route::get('settings/ezpp/hris/kiosk_management/employee_reset_password', function(){
	return view('settings.ezpp.hris.kiosk_management.employee_reset_password');
});


//Settings -> EZPP -> Tables
//BIR Tax Table
Route::get('settings/ezpp/tables/bir_tax_table', function(){
	return view('settings.ezpp.tables.bir_tax_table');
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
Route::get('settings/ezpp/payroll/payroll_configuration', function(){
	return view('settings.ezpp.payroll.payroll_configuration');
});

//Time Interpretation
Route::get('settings/ezpp/payroll/time_interpretation', function(){
	return view('settings.ezpp.payroll.time_interpretation');
});

//Payroll Period
Route::get('settings/ezpp/payroll/payroll_period', function(){
	return view('settings.ezpp.payroll.payroll_period');
});

//National Holiday
Route::get('settings/ezpp/payroll/national_holiday', function(){
	return view('settings.ezpp.payroll.national_holiday');
});

//Holiday per Branch
Route::get('settings/ezpp/payroll/holiday_per_branch', function(){
	return view('settings.ezpp.payroll.holiday_per_branch');
});

//Chart of Accounts
Route::get('settings/financials/chart_of_accounts', function(){
	return view('settings.financials.chart_of_accounts');
});

//GL Accounts
Route::get('settings/financials/gl_determination', function(){
	return view('settings.financials.gl_determination');
});





//Create Database Table
Route::get('/table/create/', 'tableController@create')->name('create.table'); 
Route::post('/table/create/', 'tableController@store')->name('store.table'); 