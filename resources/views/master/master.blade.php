<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        @font-face {
            src: url("{{ asset('fonts/Oxygen/Oxygen-Regular.ttf') }}");
            font-family: Oxygen;
        }

        body {
            font-family: 'Oxygen', sans-serif;
        }

        input:-webkit-autofill, input:-webkit-autofill:focus {
            -webkit-box-shadow: 0 0 0 30px white inset;
        }

        .btn-primary:hover {
            border-color: #367fa9;
        }

        .content-wrapper {
            padding: 20px 40px;
            padding-left: 20px;
        }

        .page-title {
            margin-top: 0;
        }

        .btn-create {
            float: right;
            display: inline-block;
        }

        .user-account {
            width: 170px!important;
        }
    </style>
    
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/dist/css/skins/skin-blue.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/toastr/build/toastr.min.css') }}">

    @yield('css')
</head>
<body class="skin-blue">
    <div id="app">
        @include('master.includes.header')
        @include('master.includes.sidebar')
        
        <div id="app" class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/dropdown.js') }}"></script>
    <script src="{{ asset('theme/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('plugins/toastr/build/toastr.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
</body>
</html>