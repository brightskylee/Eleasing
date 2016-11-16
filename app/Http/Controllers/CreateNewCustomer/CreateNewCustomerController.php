<?php

namespace App\Http\Controllers\CreateNewCustomer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateNewCustomerController extends Controller
{
    public function start() {
        return view('createNewCustomer.start');
    }

    public function contactInformation() {
        return view('createNewCustomer.contactInformation');
    }

    public function customerPreferences() {
        echo "Customer preferences reached.";
    }
}
