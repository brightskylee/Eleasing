//Form-specific elements
var startFormSelector = "#start-form";
var formErrorsDivSelector = ".form-errors";
//Inquiry-specific elements
var inquirySelectionSelector = "#inquiry-selection";
var inquiryHeadingSelector = "#inquiry-heading";
//Leasing-specific elements
var leasingSelectionSelector = "#leasing-selection";
var leasingHeadingSelector = "#leasing-heading";

$(window).bind("pageshow", function() {
    //Determines type of customer contact selected
    var customerContactSelected = $('input[name=customerContact]:checked', startFormSelector).val();
    determineContactSelectedInput(customerContactSelected);
});

$(document).ready(function() {
    setupInputMasks();
    setupOnClickAndOnChangeEvents();
});

function setupOnClickAndOnChangeEvents() {
    $('input').on('change', function() {
        //Empty any form errors that have already been displayed
        clearFormErrors();
    });

    //On change handler for a contact type selection
    $('#contact-selection input').on('change', function() {
        //Determines type of customer contact selected
        var customerContactSelected = $('input[name=customerContact]:checked', startFormSelector).val();
        determineContactSelectedInput(customerContactSelected);
    });

    //When start form is submit, check for required inputs
    $('#start-form').submit(function() {
        //Empty any form errors that have already been displayed
        clearFormErrors();

        //Determine the type of contact selected to ensure required inputs provided properly
        var customerContactSelected = $('input[name=customerContact]:checked', startFormSelector).val();

        //If no customer contact has been selected, display error
        if(!customerContactSelected) {
            displayFormError("You must select how the customer made contact.");
            return false;
        }

        switch(customerContactSelected) {
            case 'email':
            case 'phone':
            case 'specialEvent':
                hideLeasingInput();
                var inquiryCustomerSelection = $('input[name=inquiryCustomer]:checked', startFormSelector).val();
                //If inquiry customer hasn't been selected, display error
                if(!inquiryCustomerSelection) {
                    displayFormError("You must select if the customer is an inquiry.");
                    return false;
                }
                //If all required information has been provided, allow form to submit
                return true;
                break;
            case 'walkIn':
                //Deselect and hide inquiry form if shown
                hideInquiryInput();
                var appointmentCustomerSelection = $('input[name=leasingCustomerAppointment]:checked', startFormSelector).val();
                if(!appointmentCustomerSelection) {
                    displayFormError("You must select if the customer has an appointment");
                    return false;
                }
                //All required input has been provided properly
                return true;
                break;
            default:
                return false;
                break;
        }
    });

    $("#contact-back-button").click(function() {
        window.location.replace('/createNewCustomer');
    });
}

function determineContactSelectedInput(customerContactSelected) {
    //Based on the contact event selected, display the appropriate inputs
    switch(customerContactSelected) {
        case 'email':
        case 'phone':
        case 'specialEvent':
            //Show inquiry-specific inputs
            showInquiryInput();
            //Deselect and hide leasing form if shown
            hideLeasingInput();
            break;
        case 'walkIn':
            //Show leasing-specific inputs
            showLeasingInput();
            //Deselect and hide inquiry form if shown
            hideInquiryInput();
            break;
    }
}

function clearRadioButtonSelectedGroup(radioButtonGroupName) {
    $('input:radio[name=' + radioButtonGroupName + ']').each(function () {
        $(this).prop('checked', false);
    });
}

function showLeasingInput() {
    $(leasingHeadingSelector).show();
    $(leasingSelectionSelector).show();
}

function hideLeasingInput() {
    clearRadioButtonSelectedGroup('leasingCustomerAppointment');
    $(leasingSelectionSelector).hide();
    $(leasingHeadingSelector).hide();
}

function showInquiryInput() {
    $(inquiryHeadingSelector).show();
    $(inquirySelectionSelector).show();
}

function hideInquiryInput() {
    clearRadioButtonSelectedGroup('inquiryCustomer');
    $(inquirySelectionSelector).hide();
    $(inquiryHeadingSelector).hide();
}

function displayFormError(text) {
    $(formErrorsDivSelector).append($("<p/>", {"class": "form-error", "text": text}));
}

function clearFormErrors() {
    $(formErrorsDivSelector).empty();
}

function setupInputMasks() {
    $("#phone-number").mask("(999) 999-9999");
}