// 20408031 Naheen Habib Tuesday 12pm

function nameValidate (element) {
    if(!element.value.length) {
        // element.labels[0].style.color = "#ff8c00";
        // element.style.border = "1px #ff8c00 dashed";
        return true;
    } 
    }

function checkoutValid(form){
    var checkout = false;

//Credit Card Name Validation 
  if (requiredFieldEmpty(form.creditName)) invalid = true;

    if (form.creditNum.value.length === 0) {
        valid = true;
        document.getElementById("creditNumRequired").innerText=""
        document.getElementById("creditNumRequired").style.display = "inline-block";
    }

    if(invalid) {
        document.getElementById('form-error').style.display = "inline-block";    //display the error message
        return false;       //stop the form submitting
    }
    return true;  



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