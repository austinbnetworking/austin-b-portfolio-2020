function change_page(str) {

    var xmlhttp = new XMLHttpRequest();
    let starturl = "php/";
    let endurl = ".php?q=";
    let url = starturl + str + endurl;
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            response = this.responseText;
            document.querySelector(".page_overlay").style.width = "100%";

            function start_transition() {
                document.querySelector(".page_overlay").style.opacity = "1";
            }

            function change_page_content(response) {
                document.querySelector(".ajax_location").innerHTML = response;
                document.querySelector(".page_overlay").style.opacity = "0";
            }
            function close_transition() {
                document.querySelector(".page_overlay").style.width = "0%";
            }

            setTimeout(function () { start_transition(); }, 150);
            setTimeout(function () { change_page_content(response); }, 1000);
            setTimeout(function () { close_transition(); }, 1150);
        }
    };
    xmlhttp.open("POST", url, true);
    xmlhttp.send();

}

function open_modal(str) {

    if (str == "process") {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.querySelector(".process").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "php/process.php?q=", true);
        xmlhttp.send();

    } else if (str == "close_process") {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.querySelector(".ajax_location").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "php/home.php?q=", true);
        xmlhttp.send();

    } else if (str == "skills") {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.querySelector(".skills_popup").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "php/skills.php?q=", true);
        xmlhttp.send();

    } else if (str == "close_skills") {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.querySelector(".ajax_location").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "php/about.php?q=", true);
        xmlhttp.send();

    }

}