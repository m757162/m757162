<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    @include('Rproject.layout.nav')
@yield('content')


{{-- <script  src="{{asset('js/custom.js')}}"></script>
<script  src="{{asset('js/axios.min.js')}}"></script> --}}
<script  src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>