$('.nav-btn').click(function() {
    $('.nav-list').toggleClass('active');
});

$('a.nav-elem').click(function() {
    $('.nav-list').removeClass('active');
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



// The function actually applying the offset
function offsetAnchor() {
    if (location.hash.length !== 0) {
        window.scrollTo(window.scrollX, window.scrollY - 120);
    }
}

// Captures click events of all <a> elements with href starting with #
$(document).on('click', 'a[href^="#"]', function(event) {
    // Click events are captured before hashchanges. Timeout
    // causes offsetAnchor to be called after the page jump.
    window.setTimeout(function() {
        offsetAnchor();
    }, 0);
});
