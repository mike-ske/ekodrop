$(window).scroll(function() {
    if ($(this).scrollTop() >= 80) {
        $("#submenu").slideDown('slow')
        $("#submenu").css('display', 'flex')
    } else {
        $("#submenu").slideUp('slow')
            // $("#submenu").css('display', 'flex')
    }
});