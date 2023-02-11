// 20408031 Naheen Habib Tuesday 12pm

// Validation for if a input is empty
function fillOutRequired(input, text) {
    if (!input.value.length) {
        text.innerHTML = "Please fill out field";
    } else {
        text.innerHTML = "";
    }
}


// Validation for registration name
function registrationNameValidate(input, text) {
    var registrationName = input.value;
    var registrationNameRegex = /^[A-Z][a-z]+$/;

    if (!input.value.length) {
        text.innerHTML = "Please fill out field";
    }

    else if (!registrationNameRegex.test(registrationName)) {
        text.innerHTML = "Name must start with a capital letter";
    }
    else {
        text.innerHTML = "";
    }

    return;
}



// Validation for credit card number
function creditCardNumValidate(input, text) {
    var creditCardNum = input.value;
    var creditCardNumRegex = /^\d{16}$/;
    if (!input.value.length) {
        text.innerHTML = "Please fill out field";
    }
    else if (creditCardNum.length != 0) {
        if (isNaN(creditCardNum))
            text.innerHTML = "Numbers only please.";
        else if (!creditCardNumRegex.test(creditCardNum)) {
            text.innerHTML = "Please enter value under 16 digits"
        } else {
            text.innerHTML = ""
        }
    }
    return;

}


// function validateExpiryDate(date, text) {
//     var today = new Date();
//     var expiry = new Date(date);


//     if (validateExpiryDate(today)) {
//         text.innerHTML = "invalid expiry date";
//     } else {
//         text.innerHTML = ""
//     }
//     return expiry > today;
// }

// Validation for CSV number
function csvValidate(input, text) {
    var csvNumber = input.value;
    var csvRegex = /^\d{3}$/;
    if (!input.value.length) {
        text.innerHTML = "Please fill out field";
    }
    else if (csvNumber.length != 0) {
        if (isNaN(csvNumber))
            text.innerHTML = "Numbers only please.";
        else if (!csvRegex.test(csvNumber)) {
            text.innerHTML = "Please enter value under 3 digits"
        } else {
            text.innerHTML = ""
        }
    }
    return;
}

// Validation for postcode
function postcodeValidate(input, text) {
    var postcode = input.value;
    var postcodeRegex = /^\d{4}$/;
    if (!input.value.length) {
        text.innerHTML = "Please fill out field";
    }
    else if (postcode.length != 0) {
        if (isNaN(postcode))
            text.innerHTML = "Numbers only please.";
        else if (!postcodeRegex.test(postcode)) {
            text.innerHTML = "Please enter value under 4 digits"
        } else {
            text.innerHTML = ""
        }
    }
    return;
}

// Validation for email address
function emailValidate(input, text) {
    var email = input.value;
    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!input.value.length) {
        text.innerHTML = "Please fill out field";
    }
    else if (!emailRegex.test(email)) {
        text.innerHTML = "Invalid email address.";
    }
    else {
        text.innerHTML = "";
    }
    return;
}

// Validation for password
function passwordValidate(input, text) {
    var password = input.value;
    var passwordRegex = /^(?=.*\d)[a-zA-Z\d]{8,}$/;
    if (!input.value.length) {
        text.innerHTML = "Please fill out field";
    }
    else if (!passwordRegex.test(password)) {
        text.innerHTML = "Please input a password that's 8 characters long and must include at least 1 number";
    }
    else {
        text.innerHTML = "";
    }
    return;
}

// Validation for state
function stateValidate(input, text) {
    var state = input.value;
    var stateRegex = /^[a-zA-Z]{1,3}$/;
    if (!input.value.length) {
        text.innerHTML = "Please fill out field";
    }
    else if (!stateRegex.test(state)) {
        text.innerHTML = "Input must be 3 alphabet characters or less";
    }
    else {
        text.innerHTML = "";
    }
    return;
}










