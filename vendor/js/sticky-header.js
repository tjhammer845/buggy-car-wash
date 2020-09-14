// When the user scrolls the page, execute getSticky
window.onscroll = function () { getStickyTransparency() };

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function getStickyTransparency() {
    // Get the header id
    var header = document.getElementById("buggyHeader");
    // Get the main navigation id
    var mainNav = document.getElementById("mainNav");
    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        mainNav.classList.add("delay");
        mainNav.classList.add("drop-shadow");
        mainNav.classList.add("drop-opacity");
    }
    else {
        header.classList.remove("sticky");
        mainNav.classList.remove("drop-shadow");
        mainNav.classList.remove("drop-opacity");
    }
}

