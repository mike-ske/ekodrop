// import '@splidejs/splide@4.0.2/dist/js/splide.min.js';


$(window).scroll(function() {
    if ($(this).scrollTop() >= 80) {
        $("#submenu").slideDown('slow')
        $("#submenu").css('display', 'flex')
    } else {
        $("#submenu").slideUp('fast')
            // $("#submenu").css('display', 'flex')
    }
});
$(function() {
    $('#menuicon1').on('click', function() {
        $('#dropmenu').slideDown('slow')
    })
    $('#menuicon2').on('click', function() {
        $('#dropmenu').slideDown('slow')
    })
    $('#close').on('click', function() {
        $('#dropmenu').slideUp('slow')
    })
    $('#dropmenu').on('blur', function() {
        $('#dropmenu').fadeOut('slow')
    })
})