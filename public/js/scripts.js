var rellax = new Rellax('.rellax', {
    center: true
});


$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    //>=, not <=
    if (scroll >= 1) {
        //clearHeader, not clearheader - caps H
        $('nav').addClass('scrolled');
    } else if (scroll === 0) {
        $('nav').removeClass('scrolled');
    }
}); //missing );

$('.menu-btn').click(function() {
    $('.full-page-menu').toggleClass('active');
});

$('.close-btn').click(function() {
    $('.full-page-menu').toggleClass('active');
});