<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ekodrop | Swifth Delivery Service</title>

    <link rel="stylesheet" href="{{ URL('css/app.css') }}">
    <link rel="icon" href="{{ URL('favicon.ico')  }}" type="image/png">
    {{-- <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}"> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="../node_modules/@splidejs/splide/dist/css/splide.min.css"> --}}
    {{-- <link rel="stylesheet" href="../node_modules/@splidejs/splide/dist/css/splide.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    {{-- ACCORDION --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">


    <style>
        body{
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
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
        }

        .active{
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
        .active2{
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
            .splide__pagination.splide__pagination--ltr{
                bottom:0.5em !important;
            }

            #slidebx {
                width: 70% !important;
                height: auto !important;
                min-height: 100%;
            }
            .splide__track{
                height: 460px;
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
    </style>
</head>

<body class="h-screen">
    
    @include('layout.nav')
