<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ekodrop | Swifth Delivery Service</title>

    <link rel="stylesheet" href="{{ URL('css/app.css') }}">
    <link rel="icon" href="{{ URL('favicon.ico') }}" type="image/png">
    <!-- Scripts -->
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    {{-- ACCORDION --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            font-weight: normal;
            font-style: normal;
        }

        div::-webkit-scrollbar,
        textarea::-webkit-scrollbar,
        html::-webkit-scrollbar,
        body::-webkit-scrollbar,
        aside::-webkit-scrollbar,
        main::-webkit-scrollbar {
            appearance: none;
            width: 0px !important;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
        }

        .active {
            color: #faca15;
        }

        .active::after {
            content: " ";
            width: 100%;
            height: 5px;
            background: #faca15;
            border-radius: 50px;
            position: relative;
            /* bottom: -3px; */
            display: flex;
            align-items: center;
            justify-content: center;
            top: 25px;
        }

        .active2 {
            color: #faca15;
        }

        .active2::after {
            content: " ";
            width: 100%;
            height: 5px;
            background: #faca15;
            border-radius: 50px;
            position: relative;
            /* bottom: -3px; */
            display: flex;
            align-items: center;
            justify-content: center;
            top: 10px;
        }

        @media screen and (max-width:650px) {
            .splide__pagination.splide__pagination--ltr {
                bottom: 0.5em !important;
            }

            #slidebx {
                width: 70% !important;
                height: auto !important;
                min-height: 100%;
            }

            .splide__track {
                height: 460px;
            }
            .swal2-title {
                font-size: 1em !important;
            }
            .swal2-html-container {
                font-size: 0.7em !important;
            }
            .swal2-styled.swal2-confirm {
                /* background-color: #faca15 !important; */
                font-size: 10px !important;
            }
            .swal2-icon {
                transform: scale(0.9) !important;
            }
        }

        .rotate {
            -moz-transform: rotate(90deg) !important;
            -webkit-transform: rotate(90deg) !important;
            transform: rotate(90deg) !important;
        }

        .splide__pagination__page.is-active {
            background-color: #FFCC29 !important;
        }

        .ui-state-default,
        .ui-widget-content .ui-state-default,
        .ui-widget-header .ui-state-default,
        .ui-button,
        html .ui-button.ui-state-disabled:hover,
        html .ui-button.ui-state-disabled:active {
            border: none !important;
            background: #f6f6f6 !important;
        }

        .ui-state-active .ui-icon, 
        .ui-button:active .ui-icon
        {
           filter: brightness(0.5) !important;
        }
        .ui-corner-bottom,
        .ui-corner-right,
        .ui-corner-br {
            border-bottom-right-radius: none;
            border-top-left-radius: none;
            border-top-right-radius: none;
        }

        .form-active {
            display: block  !important;
        }
        .bar-active {
            background: #38B000;
        }
        .form {
            display: none;
        }
        
        input[type="radio"]:checked{
            background-color: #FFCC29;
        }

        input[type="radio"]:checked {
            color: #FFCC29; 
        }


    </style>

     <style>

        .loader-overlay {
        background-color: rgba(0,0,0,0.9);
        height: 100%;
        width: 100%;
        transition: opacity .5s ease-in-out;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        }

        .loader-container {
        height: 75px;
        width: 70px;
        margin: 0 auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateY(-50%) translateX(-50%);
        }

        .block1, .block2, .block3, .block4 {
        height: 50px;
        width: 12px;
        background-color: white;
        display: inline-block;
        transform: translateY(25px);
        }

        @keyframes blockMove {
        to { transform: translateY(0); }
        }

        .block1 {
        animation: blockMove .5s ease infinite alternate;
        }

        .block2 {
        animation: blockMove .5s ease .08s infinite alternate;
        }

        .block3 {
        animation: blockMove .5s ease .16s infinite alternate;
        }

        .block4 {
        animation: blockMove .5s ease .24s infinite alternate;
        }

    </style>

</head>
    
<body class="bg-gray-100 h-screen antialiased">

     <div id="preloader" class="hidden loader-overlay">
        <div class="loader-container">
            <div class="block1"></div>
            <div class="block2"></div>
            <div class="block3"></div>
            <div class="block4"></div>
            <div class="mt-10 flex justify-center items-center  m-auto text-gray-700 text-xs dark:text-gray-400 text-center">
                <p style="width: 1000px" >Processing request.....</p>
            </div>
        </div>
    </div>

    <div id="app" class="h-full">

        @yield('content')
    </div>
@include('layout.footer')
