$(document).ready(function() {
    //todo Retrieve information for customer preference form
    console.log('ready to retrieve form information');
});

function retrieveFormInputs() {
    $.ajax({
        type: 'POST',
        url: '',
        xhrFields: {
            withCredentials: true
        },
        data: '',
        dataType: 'JSON',
        error: function(jqXHR, textStatus, errorThrown){display_error(textStatus);},
        success: function(retVals) {
            if(!retVals) {
                return false;
            }
            var json_response = JSON.parse(retVals);
        }
    });
}