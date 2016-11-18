$(document).ready(function() {
    $("#email-continue-submit").click(function() {
        //Check for required inputs provided
        var emailAddress = $("#email-address").val();
        if(!emailAddress) {
            //Show error for email address
            displayFormError("You must input an email address for the customer.");
            event.preventDefault();
        }
    });
});
//# sourceMappingURL=emailInquiry.js.map
