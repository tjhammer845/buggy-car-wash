/**************************************************************/
/*** BUGGY CAR WASH - PARALLAX FOOTER & MOBILE ACCORDION JS ***/
/**************************************************************/


$(function () {
    $(window).resize(function () {
        if ($(this).width() >= 768) {
            var siteContent = $('main');
            var siteContentHeight = siteContent.height();
            var siteContentWidth = siteContent.width();

            var siteFooter = $('#pageFooter');
            var siteFooterHeight = siteFooter.height();
            var siteFooterWidth = siteFooter.width();

            console.log('Content Height = ' + siteContentHeight + 'px');
            console.log('Content Width = ' + siteContentWidth + 'px');
            console.log('Footer Height = ' + siteFooterHeight + 'px');
            console.log('Footer Width = ' + siteFooterWidth + 'px');

            siteContent.css({
                "margin-bottom": siteFooterHeight + 50
            });
            $("#collapseTwo").addClass("show");
            $("#collapseThree").addClass("show");
            $(".toggle-two").attr("aria-expanded", "true");
            $(".toggle-three").attr("aria-expanded", "true");
        }
        else {
            $("#collapseTwo").removeClass("show");
            $("#collapseThree").removeClass("show");
            $(".toggle-two").attr("aria-expanded", "false");
            $(".toggle-three").attr("aria-expanded", "false");
        }
    })
        .resize();//trigger resize on page load
});

