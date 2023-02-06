// 20408031 Naheen Habib Tuesday 12pm

function checkoutValid(form){
    var checkOut = false;

    if (form.creditNum.value.length === 0) {
        valid = true;
        document.getElementById("creditNumRequired").style.display = "inline-block";
    }


}

function validate (element) {
    if(!element.value.length) {
        element.labels[0].style.color = "red";
        element.style.border = "1px red dashed";
        document.getElementById("creditNameRequired").style.display = "inline-block";

    } else {
        element.labels[0].style.color = "black";
        element.style.border = "1px #ccc solid";
    }
}




function showWarning(element, firstID, secondID, regEx) {
    let formString = element.value;

    if (!element.value.length) {
        document.getElementById(secondID).style.display = "none";
        document.getElementById(firstID).style.display = "inline-block";
    }
    else if (regEx.test(formString)) {
        document.getElementById(secondID).style.display = "none";
    }
    else {
        document.getElementById(firstID).style.display = "none";
        document.getElementById(secondID).style.display = "inline-block";
    }

}


function warningRegex(element,id){
    document.getElementById(id).style.display = "none";

    if (id == "clubNumber_required_input") {
    
        let regEx = /[0-9]{16}/;//0000
        showWarning(element, "creditNumRequired", "creditNum16", regEx);

    }

}