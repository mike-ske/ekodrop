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
        $('#dropmenu').fadeIn('slow')
    })
    $('#menuicon2').on('click', function() {
        $('#dropmenu').fadeIn('slow')
    })
    $('#close').on('click', function() {
        $('#dropmenu').fadeOut('slow')
    })
    $('#dropmenu').on('blur', function() {
        $('#dropmenu').fadeOut('slow')
    })
})



var elms = $('.splide');


for (var i = 0; i < elms.length; i++) {

    slide = new Splide(elms[i], {
        classes: {
            arrows: 'splide__arrows your-class-arrows',
            arrow: 'splide__arrow your-class-arrow',
            prev: 'splide__arrow--prev your-class-prev',
            next: 'splide__arrow--next your-class-next',
        },

        type: 'loop',
        trimSpace: false,
        perPage: 3,
        arrows: true,
        width: '100%',
        pagination: true,
        interval: 4000,
        speed: 1000,
        autoplay: true,
        autoWidth: true,
        focus: 'center',
        fixWidth: '0rem',
        padding: {
            right: '5rem',
            left: '5rem',
        },
        // perMove: 1,

    });
    slide.mount();
}

$(function() {

    $('#accordion').on('click', function() {
        // $(this).children().siblings('#dropsib').slideUp()
        $(this).next('#drop1').children('#ico2').toggleClass('rotate')

        // remove Rotate class from all images except the active
        $(this).next('#drop1 div span').not('#ico2').removeClass('rotate')
    })


})

function OpenAcc(id) {
    $('.drop1').eq(id).find("img").attr("src", "http://127.0.0.1:8000/image/icoimage/navigation/Plus.png");
    $('.drop1').eq(id).attr("onclick", "CloseAcc(" + id + ")");
    // $(".drop2").slideUp();

}


function CloseAcc(id) {
    $('.drop1').eq(id).find("img").attr("src", "http://127.0.0.1:8000/image/icoimage/navigation/Minus.png");
    $('.drop1').eq(id).attr("onclick", "OpenAcc(" + id + ")");
    // $(".drop2").slideDown();
}


$(function() {
    $("#accordion").accordion();

    let icon1 = $('#img1')
    let icon2 = $('#img2')

    var icons = {
        header: "ui-icon-circle-arrow-e",
        activeHeader: "ui-icon-circle-arrow-s"
            // header: icon1,
            // activeHeader: icon2
    };
    $("#accordion").accordion({
        icons: false
    });
    $("#toggle").button().on("click", function() {
        if ($("#accordion").accordion("option", "icons")) {
            $("#accordion").accordion("option", "icons", null);
        } else {
            $("#accordion").accordion("option", "icons", icons);
        }
    })
});