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
Route::get('/', function() { return view('createNewCustomer.start'); });
Route::get('/createNewCustomer', function() { return view('createNewCustomer.start'); });
Route::post('/createNewCustomer/directStartForm', 'CreateNewCustomer\CreateNewCustomerController@directStartForm');
//Display of forms required for create new customer
Route::get('/createNewCustomer/emailInquiry', function() { return view('createNewCustomer.emailInquiry'); });
Route::get('/createNewCustomer/phoneInquiry', function() { return view('createNewCustomer.phoneInquiry'); });
Route::get('/createNewCustomer/specialEventInquiry', function() { return view('createNewCustomer.specialEventInquiry'); });
Route::get('/createNewCustomer/unqualifiedInquiry', function() { return view('createNewCustomer.unqualifiedInquiry'); });
Route::post('/createNewCustomer/customerPreferences', 'CreateNewCustomer\CreateNewCustomerController@customerPreferences');
//Submit of all collected information for create new customer
Route::post('/createNewCustomer/submitCustomerInformation', 'CreateNewCustomer\CreateNewCustomerController@submitCustomerInformation');

////Individual inquiry page
//Route::get('/inquiry/{customer}', function (App\Customers\Customer $customer) {
//    return $customer;
//});

Auth::Routes();