function change_page(str) {

    var xmlhttp = new XMLHttpRequest();
    let url = "php/" + str + ".php";
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            response = this.responseText;
            document.querySelector(".planet").innerHTML = response;
        }
    };
    xmlhttp.open("POST", url, true);
    xmlhttp.send();

}