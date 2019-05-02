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

$('.form-success-close').click(function() {
    $('#success-msg').toggleClass('hidden');
});

$('.cta-btn').click(function() {
    $('.custom-modal').addClass('active');
});

$('.modal-close-btn').click(function() {
    $('.custom-modal').removeClass('active');
});


//

function getFalse() {
    return false;
}

//Gallery
//Open image
$('.masonry.image-list .item').click(function() {
    if($(window).width() > 767.98) {
        $(this).toggleClass('active');
        $('.masonry').toggleClass('focus-view');
    }

});

//Load Screen
window.onload = function() {
    $('#load-screen').addClass('hide');
};
















