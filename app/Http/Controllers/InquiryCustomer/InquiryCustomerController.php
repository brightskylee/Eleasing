<?php

namespace App\Http\Controllers\InquiryCustomer;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Customers\Customer;

class InquiryCustomerController extends Controller
{
    public function index(Customer $customer) {
        return $customer;
    }
}
