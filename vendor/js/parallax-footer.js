/*******************************************/
/*** BUGGY CAR WASH - PARALLAX FOOTER JS ***/
/*******************************************/


siteFooter();
$(window).resize(function () {
    siteFooter();
});

function siteFooter() {
    var siteContent = $('main');
    var siteContentHeight = siteContent.height();
    var siteContentWidth = siteContent.width();

    var siteFooter = $('#parallaxFooter');
    var siteFooterHeight = siteFooter.height();
    var siteFooterWidth = siteFooter.width();

    console.log('Content Height = ' + siteContentHeight + 'px');
    console.log('Content Width = ' + siteContentWidth + 'px');
    console.log('Footer Height = ' + siteFooterHeight + 'px');
    console.log('Footer Width = ' + siteFooterWidth + 'px');

    siteContent.css({
        "margin-bottom": siteFooterHeight + 50
    });
};