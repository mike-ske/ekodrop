let tab = $('.tab')
let progressBar = $('.barline')
let forms = $('.form')
let nextBtn = $('.next')
let submitBtn = $('.send');

let formStepNum = 0;
// document.querySelector('.barline').style.width = '50%';

function updateForm() {
    for (const formValue of forms) {
        formValue.classList.contains('form-active') &&
            formValue.classList.remove('form-active')
    }
    forms[formStepNum].classList.add('form-active')
}

function updateProgressBar() {
    for (i = 0; 1 < tab.length; i++) {
        if (i < formStepNum + 1) {
            tab[i].classList.add('bar-active')
            document.querySelector('.barline').style.width = `${i * 100}%`
        } else {
            tab[i].classList.remove('bar-active')
        }
    }
    // let progressActive = document.querySelectorAll('form-active')
    // document.querySelector('.barline').style.width = ((progressActive.length - 1) / (tab.length - 1)) * 100 + '%'
}



function registerVendor1() {
    // VENDOR-REGISTRATION AJAX REQUEST AND RESPONSE
    $('#vendor1').on('submit', function(e) {
        e.preventDefault();
        let vendor2 = $('#vendor2').serialize();
        // GET url
        let url = $('#vendor2').attr('action');
        // AJAX REQUEST
        $.ajax({
            method: 'POST',
            url: url,
            data: vendor2,
            success: function(response) {
                if (response.failed) {
                    console.log(response);
                    $('input').not('input[type=submit]').addClass('border-red-500')
                    $('#msg5').html(response.failed.bizname)
                    $('#msg6').html(response.failed.biztype)
                    $('#msg7').html(response.failed.bizdescrp)
                    $('#msg8').html(response.failed.photo)
                    $('#msg9').html(response.failed.aggree)
                }
                if (response.success) {
                    $('input').not('input[type=submit]').val(' ')
                    console.log(response.success);
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
}

for (const nextValue of nextBtn) {
    nextValue.addEventListener('click', function(e) {
        e.preventDefault()
        formStepNum++
        if (e !== '') {
            e.preventDefault()
            let vendor1 = $('#vendor1').serialize();
            // GET url
            let url = $('#vendor1').attr('action');
            $.ajax({
                method: 'POST',
                url: url,
                data: vendor1,
                success: function(response) {
                    console.log(response.failed);
                    if (response.failed) {
                        $("input").not('input[type=submit]').addClass('border-red-500')
                        $('#msg1').html(response.failed.email)
                        $('#msg2').html(response.failed.phone)
                        $('#msg3').html(response.failed.password)
                        $('#msg4').html(response.failed.address)
                    }
                    $("input[type=text], input[type=password], input[type=email], input[type=number],textarea, select").val("");
                    if (response.success) {
                        $("input[type=text], input[type=password], input[type=email], input[type=number],textarea, select").val("");
                        updateForm()
                        updateProgressBar()
                        registerVendor1()
                        console.log(response.success);
                    }
                    setInterval(() => {
                        $('.helpId').fadeOut('slow')
                        $('#success').fadeOut()
                        $('input').not('input[type=submit]').removeClass('border-red-500')
                    }, 8000);
                },
                error: function(error) {
                    $('#error').html(error.responseText)
                    console.log(error);

                    Swal.fire({
                        title: 'Error!',
                        text: 'Something went wrong: ' + error.statusText,
                        icon: 'error',
                        confirmButtonText: "Ok"
                    })
                }
            })

        } else {
            alert('FAILED TO SUBMIT')
        }

    })
}



let card = $('.tab')
let progressCardBar = $('.barcardline')
let formsCard = $('.cardform')
let nextBtnCard = $('.next')
let backBtnCard = $('.back')
let indicator = $('#capIndex')
let caption = $('.caption')
let submitBtnCard = $('.send');

document.querySelector('.barcardline').style.width = '0%'
let formStepId = 0;
for (const nextVal of nextBtnCard) {
    nextVal.addEventListener('click', function() {
        formStepId++;
        updateFormCaption();
        updateFormCard();
        updateIndicator();
    })
}


for (const backVal of backBtnCard) {
    backVal.addEventListener('click', function() {
        formStepId--
        updateFormCaption();
        updateFormCard();
        updateIndicator();
    })
}

function updateFormCard() {
    for (const formVal of formsCard) {
        formVal.classList.contains('form-active') &&
            formVal.classList.remove('form-active')
    }
    formsCard[formStepId].classList.add('form-active')
}

function updateFormCaption() {
    for (const captionVal of caption) {
        captionVal.classList.contains('form-active') &&
            captionVal.classList.remove('form-active')
    }
    caption[formStepId].classList.add('form-active')
}

let idx = 0

function updateIndicator() {
    for (i = 0; 1 < card.length; i++) {
        if (idx < formStepNum + 1) {
            card[i].classList.add('bar-active')
            document.querySelector('.barcardline').style.width = ((document.querySelectorAll('form-active').length - 1) / (card.length - 1) * 100 + '%')
                // `${i * 100}%`
        } else {
            card[i].classList.remove('bar-active')
        }
    }
}