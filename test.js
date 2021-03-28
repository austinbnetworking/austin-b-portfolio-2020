function submit_contact() {

    let inName = document.getElementById("name").value;
    let inEmail = document.getElementById("email").value;
    let inMessage = document.getElementById("message").value;

    if (validateName(inName) && validateEmail(inEmail)) {
        document.getElementById("message").style.border = "2px solid #025949";
        // Set up XML Request Variable, URL, and Parameters to be passed through...
        var xmlhttp = new XMLHttpRequest();
        var url = "php/contact.php";
        var params = "name=" + inName + "&email=" + inEmail + "&message=" + inMessage;
        xmlhttp.open("POST", url, true);
        // Send the proper header information along with the request...
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.setRequestHeader("Content-length", params.length);
        xmlhttp.setRequestHeader("Connection", "close");
        // IF response is successful without errors, access and change page content...
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                response = this.responseText;
                document.querySelector(".ajax_location").innerHTML = response;
            }
        }
        // Send to finalize...
        xmlhttp.send(params);
    }

}

function validateName(inName) {

    let maxLength = 50;
    let name_error = document.getElementById("name_error");
    let input = document.getElementById("name");
    let regExpression = /^[a-zA-Z\s]*$/g;

    if (inName == "" || inName.trim() == "") {
        name_error.innerHTML = "Input Required";
        input.style.border = "2px solid red";
        return false;
    } else if (inName.length > maxLength) {
        name_error.innerHTML = "Must be Less than 50 Characters";
        input.style.border = "2px solid red";
        return false;
    } else if (!isNaN(inName)) {
        name_error.innerHTML = "Cannot use Numbers";
        input.style.border = "2px solid red";
        return false;
    } else if (!regExpression.test(inName)) {
        name_error.innerHTML = "Letters and Spaces Only";
        input.style.border = "2px solid red";
        return false;
    } else if (inName.includes("Henryvog")) {
        name_error.innerHTML = "You are a bot";
        input.style.border = "2px solid red";
        return false;
    } else {
        name_error.innerHTML = "";
        input.style.border = "2px solid #025949";
        return true;
    }

}

function validateEmail(inEmail) {

    let maxLength = 75;
    let email_error = document.getElementById("email_error");

    if (inEmail == "" || inEmail.trim() == "") {
        email_error.innerHTML = "Input Required";
        document.getElementById("email").style.border = "2px solid red";
        return false;
    } else if (inEmail.length > maxLength) {
        email_error.innerHTML = "Must be Less than 75 Characters";
        document.getElementById("email").style.border = "2px solid red";
        return false;
    } else if (!isNaN(inEmail)) {
        email_error.innerHTML = "Incorrect Email Format";
        document.getElementById("email").style.border = "2px solid red";
        return false;
    } else if (inEmail.indexOf("/") != -1 || inEmail.indexOf("\\") != -1 || inEmail.indexOf("'") != -1) {
        email_error.innerHTML = "Incorrect Email Format";
        document.getElementById("email").style.border = "2px solid red";
        return false;
    } else if (inEmail.indexOf("*") != -1 || inEmail.indexOf("&") != -1 || inEmail.indexOf("^") != -1) {
        email_error.innerHTML = "Incorrect Email Format";
        document.getElementById("email").style.border = "2px solid red";
        return false;
    } else if (inEmail.indexOf("$") != -1 || inEmail.indexOf("!") != -1 || inEmail.indexOf("%") != -1) {
        email_error.innerHTML = "Incorrect Email Format";
        document.getElementById("email").style.border = "2px solid red";
        return false;
    } else if (inEmail.indexOf("@") == -1) {
        email_error.innerHTML = "Incorrect Email Format";
        document.getElementById("email").style.border = "2px solid red";
        return false;
    } else {
        email_error.innerHTML = "";
        document.getElementById("email").style.border = "2px solid #025949";
        return true;
    }

}