// Carousel 
$('#carouselMain').carousel({
    interval: 5000 // speed of slidess
})
$('#mobileServicesCarousel').carousel({
    interval: 5000 // speed of slidess
})
if ($(window).width() < 768) {
    $("#mobileServicesCarousel").addClass("carousel");
    $("#softTouch").addClass("carousel-item");
    $("#touchFree").addClass("carousel-item");
}
$(window).on('resize', function () {
    var win = $(this); //this = window
    if (win.width() <= 768) {
        $("#mobileServicesCarousel").addClass("carousel");
        $("#softTouch").addClass("carousel-item");
        $("#touchFree").addClass("carousel-item");
    } else {
        $("#mobileServicesCarousel").removeClass("carousel");
        $("#softTouch").removeClass("carousel-item");
        $("#touchFree").removeClass("carousel-item");
    }
});