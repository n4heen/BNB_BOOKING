// 20408031 Naheen Habib Tuesday 12pm

// Validation for if a input is empty
function fillOutRequired(input, text) {
    if (!input.value.length) {
        text.textContent = "Please fill out field";
    } else {
        text.textContent = "";
    }
}


// Validation for registration name
function registrationNameValidate(input, text) {
    var registrationName = input.value;
    var registrationNameRegex = /^[A-Z][a-z]+$/;

    if (!input.value.length) {
        text.textContent = "Please fill out field";
    }

    else if (!registrationNameRegex.test(registrationName)) {
        text.textContent = "Name must start with a capital letter";
    }
    else {
        text.textContent = "";
    }

    return;
}



// Validation for credit card number
function creditCardNumValidate(input, text) {
    var creditCardNum = input.value;
    var creditCardNumRegex = /^\d{16}$/;
    if (!input.value.length) {
        text.textContent = "Please fill out field";
    }
    else if (creditCardNum.length != 0) {
        if (isNaN(creditCardNum))
            text.textContent = "Numbers only please.";
        else if (!creditCardNumRegex.test(creditCardNum)) {
            text.textContent = "Please enter value under 16 digits"
        } else {
            text.textContent = ""
        }
    }
    return;

}


// function validateExpiryDate(date, text) {
//     var today = new Date();
//     var expiry = new Date(date);


//     if (validateExpiryDate(today)) {
//         text.textContent = "invalid expiry date";
//     } else {
//         text.textContent = ""
//     }
//     return expiry > today;
// }

// Validation for CSV number
function csvValidate(input, text) {
    var csvNumber = input.value;
    var csvRegex = /^\d{3}$/;
    if (!input.value.length) {
        text.textContent = "Please fill out field";
    }
    else if (csvNumber.length != 0) {
        if (isNaN(csvNumber))
            text.textContent = "Numbers only please.";
        else if (!csvRegex.test(csvNumber)) {
            text.textContent = "Please enter value under 3 digits"
        } else {
            text.textContent = ""
        }
    }
    return;
}

// Validation for postcode
function postcodeValidate(input, text) {
    var postcode = input.value;
    var postcodeRegex = /^\d{4}$/;
    if (!input.value.length) {
        text.textContent = "Please fill out field";
    }
    else if (postcode.length != 0) {
        if (isNaN(postcode))
            text.textContent = "Numbers only please.";
        else if (!postcodeRegex.test(postcode)) {
            text.textContent = "Please enter value under 4 digits"
        } else {
            text.textContent = ""
        }
    }
    return;
}

// Validation for email address
function emailValidate(input, text) {
    var email = input.value;
    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!input.value.length) {
        text.textContent = "Please fill out field";
    }
    else if (!emailRegex.test(email)) {
        text.textContent = "Invalid email address.";
    }
    else {
        text.textContent = "";
    }
    return;
}

// Validation for password
function passwordValidate(input, text) {
    var password = input.value;
    var passwordRegex = /^(?=.*\d)[a-zA-Z\d]{8,}$/;
    if (!input.value.length) {
        text.textContent = "Please fill out field";
    }
    else if (!passwordRegex.test(password)) {
        text.textContent = "Please input a password that's 8 characters long and must include at least 1 number";
    }
    else {
        text.textContent = "";
    }
    return;
}

// Validation for state
function stateValidate(input, text) {
    var state = input.value;
    var stateRegex = /^[a-zA-Z]{1,3}$/;
    if (!input.value.length) {
        text.textContent = "Please fill out field";
    }
    else if (!stateRegex.test(state)) {
        text.textContent = "Input must be 3 alphabet characters or less";
    }
    else {
        text.textContent = "";
    }
    return;
}










