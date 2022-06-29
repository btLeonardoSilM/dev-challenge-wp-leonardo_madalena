
$(document).ready(function () {
    $(".box").mouseenter(function () {
        $(this).animate({
            opacity: '1',
            width: '600px'
        });
    });
    $(".box").mouseleave(function () {
        $(this).animate({
            opacity: '1',
            width: '50px'
        });
    });
    $(".carousel2").slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 3,
    });
    $(".carousel3").slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

});
