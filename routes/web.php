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
Route::post('/createNewCustomer/contactInformation', 'CreateNewCustomer\CreateNewCustomerController@contactInformation');
Auth::routes();