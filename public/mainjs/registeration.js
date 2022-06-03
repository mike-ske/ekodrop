// CUSTOMER AJAX REQUEST AND RESPONSE
$(function() {
    $('#customerReg').on('submit', function(e) {
        e.preventDefault();
        let customerForm = $(this).serialize();
        // GET url
        let url = $(this).attr('action');
        $('#preloader').fadeIn('slow')
            // AJAX REQUEST
        $.ajax({
            method: 'POST',
            url: url,
            data: customerForm,
            success: function(response) {
                $('#preloader').fadeOut('fast')
                if (response.failed) {
                    console.log(response);
                    $('input').not('input[type=submit]').addClass('border-red-500')
                    $('#msg1').html(response.failed.first_name)
                    $('#msg2').html(response.failed.last_name)
                    $('#msg3').html(response.failed.email)
                    $('#msg4').html(response.failed.phone)
                    $('#msg5').html(response.failed.address)
                    $('#msg6').html(response.failed.password)
                    $('#msg7').html(response.failed.aggree)
                    Swal.fire({
                        title: 'Error!',
                        text: 'Something went wrong',
                        icon: 'error',
                        confirmButtonText: "Ok"
                    })
                }

                if (response.success) {
                    Swal.fire({
                        title: 'Success!',
                        text: response.success,
                        icon: 'success',
                        confirmButtonText: "<a href='/login'>Please Login</a>"
                    })
                    $('input').not('input[type=submit]').val(' ')
                }
                setInterval(() => {
                    $('.helpId').fadeOut('slow')
                    $('#success').fadeOut()
                    $('input').not('input[type=submit]').removeClass('border-red-500')
                }, 8000);
            },
            error: function(error) {
                $('#error').html(error.responseText)
                Swal.fire({
                    title: 'Error!',
                    text: 'Something went wrong' + error,
                    icon: 'error',
                    confirmButtonText: "Ok"
                })
            }
        })
    });


});

// PHONE-LOGIN AJAX REQUEST AND RESPONSE

$(function() {
    $('#phoneLogin').on('submit', function(e) {
        e.preventDefault();
        let phoneData = $(this).serialize();
        // GET url
        let url = $(this).attr('action');
        $('#preloader').fadeIn('slow')
            // AJAX REQUEST
        $.ajax({
            method: 'POST',
            url: url,
            data: phoneData,
            success: function(response) {
                $('#preloader').fadeOut('fast')
                if (response.failed) {
                    console.log(response);
                    $('input').not('input[type=submit]').addClass('border-red-500')
                    $('#msg1').html(response.failed.phone)
                    Swal.fire({
                        title: 'Error!',
                        text: 'Something went wrong',
                        icon: 'error',
                        confirmButtonText: "Ok"
                    })
                }

                if (response.success) {
                    // Swal.fire({
                    //     title: 'Success!',
                    //     text: response.success,
                    //     icon: 'success',
                    //     confirmButtonText: "<a href='/login'>Please Login</a>"
                    // })
                    $('input').not('input[type=submit]').val(' ')
                }
                setInterval(() => {
                    $('.helpId').fadeOut('slow')
                    $('#success').fadeOut()
                    $('input').not('input[type=submit]').removeClass('border-red-500')
                }, 8000);
            },
            error: function(error) {
                $('#error').html(error.responseText)
                Swal.fire({
                    title: 'Error!',
                    text: 'Something went wrong' + error,
                    icon: 'error',
                    confirmButtonText: "Ok"
                })
            }
        })
    });


});