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

    $('#photo').on('change', function(e) {
        var file = e.target.files[0].name;
        $('#profile').html(file)
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
    // $("#accordion").accordion();

    // var icons = {
    //     header: "ui-icon-triangle-1-e",
    //     activeHeader: "ui-icon-triangle-1-s"
    // };
    // $("#accordion").accordion({
    //     icons: icons
    // });
    // $("#toggle").button().on("click", function() {
    //     if ($("#accordion").accordion("option", "icons")) {
    //         $("#accordion").accordion("option", "icons", null);
    //     } else {
    //         $("#accordion").accordion("option", "icons", icons);
    //     }
    // })

    // FOR PLUS ICON
    // $('.ui-icon').removeAttr('class')
    // $('.ui-accordion-header-collapsed').find('span').removeAttr('class')
    // $('.x1t').addClass('ui-accordion-header-icon ui-icon ui-icon-triangle-1-e')
    // $('.drop1').find('span').removeClass('ui-accordion-header-icon ui-icon-triangle-1-s')

    // // FOR MINUS ICON
    // let drpDown = $('.drop1');
    // let xlt = document.querySelector('.drop1 div > .x1t');
    // let stepNum = 0;

    // // xlt.add('rotate')

    // for (let i = 0; i < drpDown.length; i++) {
    //     const indx = drpDown[i];
    //     indx.addEventListener('click', function() {
    //         stepNum++;
    //         if (xlt[stepNum].classList.contains('rotate'))
    //             xlt[stepNum].classList.remove('rotate')
    //     })
    // }
    // xlt[stepNum].addClass('rotate')


});





$(function() {
    $('#contact').on('submit', function(e) {
        e.preventDefault()

        let btn = $('#submit');
        let form = $(this).serialize();
        url = $('#contact').attr('action')

        $('#submit').attr('value', 'Sending....')
        $.ajax({
                url: url,
                method: 'POST',
                // 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content'),
                data: form,
                success: function(result) {
                    if (result.success) {
                        $('#subbtn').fadeOut()
                        $('#alert').html(result.success);
                        $('#alert').fadeIn('slow');

                    }
                    $("input[type=text], input[type=password], input[type=email], input[type=number],textarea, select").val("");
                    if (result.failed) {
                        $('#msg1').html(result.failed.first_name)
                        $('#msg2').html(result.failed.email)
                        $('#msg3').html(result.failed.message)
                        btn.attr('value', 'Send Message')
                            // $('#danger').html(result.failed);
                            // $('#danger').fadeIn('slow');
                    }
                    setInterval(() => {
                        $('#alert').fadeOut('slow');
                        $('#msg1').fadeOut('slow');
                        $('#msg2').fadeOut('slow');
                        $('#msg3').fadeOut('slow');
                    }, 9000);
                    $("input[type=text], input[type=password], input[type=email], input[type=number],textarea, select").val("");
                },
                error: function(error) {
                    $('#danger').html(error.statusText);
                    $('#danger').fadeIn('slow');
                    btn.attr('value', 'Send Message')
                    setInterval(() => {
                        $('#danger').fadeOut('slow');
                    }, 9000);
                }
            })
            // btn.attr('value', 'Send Message')
    })


})