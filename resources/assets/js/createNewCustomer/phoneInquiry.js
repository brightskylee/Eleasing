$(document).ready(function() {
    $("#phone-continue-submit").click(function() {
        //Check for required inputs provided
        var phoneNumber = $("#phone-number").val();
        if(!phoneNumber) {
            //Show error for email address
            displayFormError("You must input a phone number for the customer.");
            event.preventDefault();
        }
    });
});