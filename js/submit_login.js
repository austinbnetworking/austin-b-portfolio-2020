function submit_login() {
    // Set up XML Request Variable, URL, and Parameters to be passed through...
    var xmlhttp = new XMLHttpRequest();
    var url = "php/signin.php";
    var params = "username=" + document.getElementById("username").value + "&password=" + document.getElementById("password").value;
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