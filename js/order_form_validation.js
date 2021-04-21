
function validateFormDetails() {

    document.getElementById("firstname").validity.valid;

    var fname = document.getElementById("firstname").value;
    var lname = document.getElementById("lastname").value;
    var address = document.getElementById("address").value;
    var suburb = document.getElementById("suburb").value;
    var state = document.getElementById("state").value;
    var country = document.getElementById("country").value;
    var email = document.getElementById("email").value;

    if (!isInputsValid(fname, lname, address, suburb, state, country, email)) {
        return;
    }

    if (!isEmailValid(email)) {
        return;
    }

    // Jquery AJAX in using php for validation
    // NOTE: does not send or validate with actual email but simulates only
    $(document).ready(function() {
        $("#formSubmitBtn").click(function(event){
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'php/order_form.php',
                datatype: 'json',
                data : { firstname : fname, lastname : lname, email : email },
                success: function(response) {
                    var jsonResponse = JSON.parse(response);
                    if (JSON.stringify(jsonResponse.session) == 1) {
                        openSuccessPage();
                    } else {
                        alert('Invalid Credentials');
                    }
                },
                error: function(jqXHR, status, error) {
                    alert(error);
                }
            });
        });
    });

}

function isInputsValid(fname, lname, address, suburb, state, country, email) {
    if (fname == "" || lname == "" || address == "" || suburb == "" || state == "" || country == "" || email == "") {
        alert("Form details are incomplete. Please fill in all areas");
        return false;
    }
    return true;
}

function isEmailValid(email) {
    // tests the email input value against the below expression
    // filtering out illegal characters and tsting the email expression.
    // the @ indicates the seperation.
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))
    {
        return true;
    }
    alert("Inputted email address is invalid!");
    return false;
}

function openSuccessPage() {
    window.location.href = 'pages/success_submission.html';
}
