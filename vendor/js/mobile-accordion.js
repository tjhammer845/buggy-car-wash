/************************************/
/*** BUGGY CAR WASH - MOBILE ACCORDION ***/
/************************************/


$(function () {
    $(window).resize(function () {
        if ($(this).width() <= 768) {
            $("#collapseTwo").removeClass("show");
            $("#collapseThree").removeClass("show");
        } else {
            $("#collapseTwo").addClass("show");
            $("#collapseThree").addClass("show");
        }
    })
        .resize();//trigger resize on page load
});