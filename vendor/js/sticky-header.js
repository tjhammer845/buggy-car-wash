// When the user scrolls the page, execute getSticky
window.onscroll = function () { getStickyTransparency() };

function getStickyTransparency() {
    var header = document.getElementById("buggyHeader");
    var mainNav = document.getElementById("mainNav");
    var sticky = header.offsetTop;

    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        mainNav.classList.add("delay", "drop-shadow", "drop-opacity");
    }
    else {
        header.classList.remove("sticky");
        mainNav.classList.remove("drop-shadow", "drop-opacity");
    }
}

