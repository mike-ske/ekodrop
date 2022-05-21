<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ekodrop | Swifth Delivery Service</title>

    <link rel="stylesheet" href="{{ URL('css/app.css') }}">
    <link rel="icon" href="{{ URL('favicon.ico')  }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}">
    {{-- <link rel="stylesheet" href="../node_modules/@splidejs/splide/dist/css/splide.min.css"> --}}
    {{-- <link rel="stylesheet" href="../node_modules/@splidejs/splide/dist/css/splide.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        body{
            font-family: 'Product Sans';
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
    </style>
</head>

<body>
    
    @include('layout.nav')
