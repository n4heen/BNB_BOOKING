// 20408031 Naheen Habib Tuesday 12pm

function validationRequired(input, msg) {
    if (!input.value.length) {
        msg.innerHTML = "Please fill out field";
    } else {
        msg.innerHTML = "";
    }
}



function ValidateRegistrationName(obj, msg) {
    var name = obj.value;
    var regExpression = /^[A-Z][a-z]+$/;

    if (!obj.value.length) {
        msg.innerHTML = "Please fill out field";
    }

    else if (!regExpression.test(name)) {
        msg.innerHTML = "Name must start with a capital letter";
    }
    else {
        msg.innerHTML = "";
    }

    return;
}




function creditCardNumber(obj, msg) {
    var regex = /^\d{16}$/;
    var creditCard = obj.value;
    if (!obj.value.length) {
        msg.innerHTML = "Please fill out field";
    }
    else if (creditCard.length != 0) {
        if (isNaN(creditCard))
            msg.innerHTML = "Numbers only please.";
        else if (!regex.test(creditCard)) {
            msg.innerHTML = "Please enter value under 16 digits"
        } else {
            msg.innerHTML = ""
        }
    }
    return;

}


// function validateExpiryDate(date, msg) {
//     var today = new Date();
//     var expiry = new Date(date);


//     if (validateExpiryDate(today)) {
//         msg.innerHTML = "invalid expiry date";
//     } else {
//         msg.innerHTML = ""
//     }
//     return expiry > today;
// }


function csvNumberRegex(obj, msg) {
    var regex = /^\d{3}$/;
    var csvNumber = obj.value;
    if (!obj.value.length) {
        msg.innerHTML = "Please fill out field";
    }
    else if (csvNumber.length != 0) {
        if (isNaN(csvNumber))
            msg.innerHTML = "Numbers only please.";
        else if (!regex.test(csvNumber)) {
            msg.innerHTML = "Please enter value under 3 digits"
        } else {
            msg.innerHTML = ""
        }
    }
    return;
}

function postCode(obj, msg) {
    var postCodeRegex = /^\d{4}$/;
    var postCode = obj.value;
    if (!obj.value.length) {
        msg.innerHTML = "Please fill out field";
    }
    else if (postCode.length != 0) {
        if (isNaN(postCode))
            msg.innerHTML = "Numbers only please.";
        else if (!postCodeRegex.test(postCode)) {
            msg.innerHTML = "Please enter value under 4 digits"
        } else {
            msg.innerHTML = ""
        }
    }
    return;
}


function ValidateEmail(obj, msg) {
    var email = obj.value;
    var regExpression = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!obj.value.length) {
        msg.innerHTML = "Please fill out field";
    }
    else if (!regExpression.test(email)) {
        msg.innerHTML = "Invalid email address.";
    }
    else {
        msg.innerHTML = "";
    }
    return;
}

function ValidatePassword(obj, msg) {
    var password = obj.value;
    var regExpression = /^(?=.*\d)[a-zA-Z\d]{8,}$/;
    if (!obj.value.length) {
        msg.innerHTML = "Please fill out field";
    }
    else if (!regExpression.test(password)) {
        msg.innerHTML = "Please input a password that's 8 characters long and must include at least 1 number";
    }
    else {
        msg.innerHTML = "";
    }
    return;
}


function ValidateState(obj, msg) {
    var state = obj.value;
    var regExpression = /^[a-zA-Z]{1,3}$/;
    if (!obj.value.length) {
        msg.innerHTML = "Please fill out field";
    }
    else if (!regExpression.test(state)) {
        msg.innerHTML = "Input must be 3 alphabet characters or less";
    }
    else {
        msg.innerHTML = "";
    }
    return;
}










