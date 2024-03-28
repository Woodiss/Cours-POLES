// alert('tt')

$('.bar, .croix').click(function() {
    $('.bar').toggleClass('hideBlock')
    $('.croix').toggleClass('hideBlock')
    $(".menu").slideToggle();


    // if ($('.bar').hasClass('hideBlock')) {
    //     $('.menu').slideToggle()
    // } else {
    //     $('.menu').slideToggle()
    // }

    // $(".bar").hasClass("hideBlock") === true ? $(".menu").slideToggle() : $(".menu").slideToggle();
})