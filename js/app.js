$(document).ready(function () {

    new Splide('.splide', {
        type: 'fade',
        rewind: true,
        autoplay: true
    }).mount();

    $(".menu-icon").on("click", function () {
        $("nav ul").toggleClass("showing");
    });
});

// Scrolling Effect

$(window).on("scroll", function () {
    if ($(window).scrollTop()) {
        $('nav').addClass('black');
    }

    else {
        $('nav').removeClass('black');
    }
})