<?php

namespace App\Http\Controllers\CreateNewCustomer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateNewCustomerController extends Controller
{
    public function start() {
        return view('createNewCustomer.start');
    }

    public function directStartForm(Request $request) {
        $customerContactType = $request->input('customerContact');
        switch($customerContactType) {
            //Inquiry Customers
            case "email":
            case "phone":
            case "specialEvent":
                $inquiryCustomer = $request->input('inquiryCustomer');
                //Determine if the customer has an inquiry
                if($inquiryCustomer == 'yes') {
                    //Redirect to specific form contact input
                    $redirectionUrl = $this->loadContactInformation($customerContactType);
                    return redirect($redirectionUrl);
                }
                break;
            //Leasing Customers
            case "walkIn":
                $leasingCustomerAppointment = $request->input('leasingCustomerAppointment');
                //Determine if the customer has an appointment
                echo $leasingCustomerAppointment;
                break;
            default:
                return back();
                break;
        }
        return back();
    }

    /*
     * Function: Determine the user's appropriate contact
     * information form based on contact type
     *
     * @param $contactType | string redirect user to appropriate form
     */
    private function loadContactInformation($contactType) {
        //Determine contact type-specific form views
        switch($contactType) {
            case "email":
                return '/createNewCustomer/emailInquiry';
            break;
            case "phone":
                return '/createNewCustomer/phoneInquiry';
            break;
            case "specialEvent":
                return '/createNewCustomer/specialEventInquiry';
            break;
            default:
                return '/';
            break;
        }
    }

    public function emailInquiry() {
        return view('createNewCustomer.emailInquiry');
    }

    public function phoneInquiry() {
        return view('createNewCustomer.phoneInquiry');
    }

    public function specialEventInquiry() {
        return view('createNewCustomer.specialEventInquiry');
    }

    public function directContactForm(Request $request) {
        //todo Determine contact form used to find required information
        $contactFormUsed = $request->input('contactFormUsed');
        echo $contactFormUsed;
    }
}
