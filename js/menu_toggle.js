function menu_toggle() {

    hamburger = document.querySelector(".hamburger");
    site_menu = document.querySelector(".site_menu");
    logo = document.querySelector(".logo");

    hamburger.classList.toggle("hamburger_open");
    site_menu.classList.toggle("site_menu_open");
    logo.classList.toggle("logo_open");


}