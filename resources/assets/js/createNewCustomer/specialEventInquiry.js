$(document).ready(function() {
    $("#special-event-continue-submit").click(function() {
        //Check for required inputs provided
        var firstName = $("#first-name").val();
        var lastName = $("#last-name").val();
        //First and last name must be entered for a customer
        if(!firstName || !lastName) {
            //Show error for first and last name
            displayFormError("You must input a first and last name for the customer.");
            event.preventDefault();
        }
    });
});