{{--  <!DOCTYPE html>  --}}
<html lang="en">
<head>
    <title>@yield('title','home')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome-free-5.15.1-web/css/all.css')}}">
    
    
    
</head>
<body>
    <style>
    
</style>

<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/axios.min.js')}}"></script>


@include('earnandlearn.public.layouts.style')
@yield('main_cata')
@include('earnandlearn.public.layouts.manu')
   
@yield('main_cata_script')
 
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>

    
    
    {{--  <script src="{{asset('js/custom.js')}}"></script>  --}}
    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    } 
    </script> 
   
</body>
</html>