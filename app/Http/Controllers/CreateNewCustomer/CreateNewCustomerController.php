<?php

namespace App\Http\Controllers\CreateNewCustomer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateNewCustomerController extends Controller
{
    /*
     * Function: Loads the form to display
     * available options for contact types
     */
    public function start() {
        return view('createNewCustomer.start');
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

    public function unqualifiedInquiry() {
        return view('createNewCustomer.unqualifiedInquiry');
    }

    /*
     * Function: Based on the selected contact type,
     * a specific form is presented to the user
     *
     * @param Request $request | inputs to determine
     * the appropriate form
     * @return redirect $redirectionURL | the url that is
     * redirected to based on input
     */
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
                //todo Determine if the customer has an appointment
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

    /*
     * Function: Based on the provided contact form,
     * verify all required input is provided and redirect
     * to customer preferences with data
     *
     * @param Request $request | form input provided from
     * contact form
     * @return redirect $redirectionURL | the url containing the
     * customer preferences form for the user. Previous form input
     * also included
     */
    public function customerPreferences(Request $request) {
        //Determine contact form used to find required information
        $contactFormUsed = $request->input('contactFormUsed');
        switch($contactFormUsed) {
            case "email":
                //Verify that an email has been provided
                if($request->input('email') != "") {
                    $requestInput = $this->cleanRequestInput($request->all());
                    return view('/createNewCustomer/customerPreferences', $requestInput);
                }
                break;
            case "phone":
                //Verify that a phone number has been provided
                if($request->input('phone') != "") {
                    $requestInput = $this->cleanRequestInput($request->all());
                    return view('/createNewCustomer/customerPreferences')->with($requestInput);
                }
                break;
            case "specialEvent":
                //Verify that at least a first and last name has been provided
                if($request->input('firstName') != "" && $request->input('lastName') != "") {
                    $requestInput = $this->cleanRequestInput($request->all());
                    return view('/createNewCustomer/customerPreferences')->with($requestInput);
                }
                break;
        }
        return back();
    }

    /*
     * Function: After all input for a customer has been provided,
     * submit information for save
     *
     * @param Request $request | form input from contact info and
     * customer preferences
     * @return $success array | success of customer save attempt
     * and any errors that may be returned
     */
    public function submitCustomerInformation(Request $request) {
        //todo Submit data to be saved
        return $request->all();
    }

    /*
     * Function: Build an array with all request input
     * @param $requestData array | all form data provided
     *
     * @return $providedInput array | parsed data that is
     * ready to be sent
     */
    private function cleanRequestInput($requestData) {
        $providedInput = array();
        foreach($requestData as $key => $value) {
            if($key != "_token") {
                //Find all keys with value input
                if($value != "") {
                    $providedInput[$key] = $value;
                }
            }
        }
        return $providedInput;
    }
}
