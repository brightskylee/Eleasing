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

//Create New Customer
Route::get('/', 'CreateNewCustomer\CreateNewCustomerController@start');
Route::get('/createNewCustomer', 'CreateNewCustomer\CreateNewCustomerController@start');
Route::post('/createNewCustomer/directStartForm', 'CreateNewCustomer\CreateNewCustomerController@directStartForm');

Route::get('/createNewCustomer/emailInquiry', 'CreateNewCustomer\CreateNewCustomerController@emailInquiry');
Route::get('/createNewCustomer/phoneInquiry', 'CreateNewCustomer\CreateNewCustomerController@phoneInquiry');
Route::get('/createNewCustomer/specialEventInquiry', 'CreateNewCustomer\CreateNewCustomerController@specialEventInquiry');

Route::post('/createNewCustomer/customerPreferences', 'CreateNewCustomer\CreateNewCustomerController@customerPreferences');
Route::get('/createNewCustomer/unqualifiedInquiry', 'CreateNewCustomer\CreateNewCustomerController@unqualifiedInquiry');

Auth::Routes();