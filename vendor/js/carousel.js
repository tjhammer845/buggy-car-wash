/************************************/
/*** BUGGY CAR WASH - CAROUSEL JS ***/
/************************************/


$('#carouselMain').carousel({
    interval: 5000 // speed of slidess
})
$(function () {
    $(window).resize(function () {
        if ($(this).width() <= 768) {
            $("#tipsCarousel").addClass("carousel");
            $(".tip-slide").addClass("carousel-item");
        } else {
            $("#tipsCarousel").removeClass("carousel");
            $(".tip-slide").removeClass("carousel-item");
        }
    })
        .resize();//trigger resize on page load
});