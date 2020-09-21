// Carousel 
$('#carouselMain').carousel({
    interval: 5000 // speed of slidess
})
$('#mobileServicesCarousel').carousel({
    interval: 5000 // speed of slidess
})

$(function () {
    $(window).resize(function () {
        if ($(this).width() <= 768) {
            $("#mobileServicesCarousel").addClass("carousel");
            $("#softTouch").addClass("carousel-item");
            $("#touchFree").addClass("carousel-item");
            $("#selfService").addClass("carousel-item");
        }
    })
        .resize();//trigger resize on page load
});