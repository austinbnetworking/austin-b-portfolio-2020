window.onload = function dropdownOpener() {
    let menuBtn = document.querySelector('.navbar-dropdown-button');
    let dropdown = document.querySelector('.navbar-dropdown');
    let menuOpen = false;
    menuBtn.addEventListener('click', () => {
        if (menuOpen) {
            dropdown.classList.remove('open');
            menuOpen = false;
        } else {
            dropdown.classList.add('open');
            menuOpen = true;
        }
    })
}