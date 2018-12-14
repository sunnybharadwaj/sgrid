$('.nav-btn').click(function() {
    $('.nav-list').toggleClass('active');
});

$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    //>=, not <=
    if (scroll >= 1) {
        //clearHeader, not clearheader - caps H
        $('nav').addClass('shadow');
    } else if (scroll === 0) {
        $('nav').removeClass('shadow');
    }
}); //missing );