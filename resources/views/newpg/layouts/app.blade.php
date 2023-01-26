<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome-free-5.15.1-web/css/all.css')}}">
    
    
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
</head>
<body>
    <style>
        .ml-auto{
            margin-left: auto !important;
        }
        thead tr th{
           
            text-align: center;
           
        } 
        tbody tr td{
            
           text-align: center;
        }
    </style>
   
    @include ('newpg.layouts.manu')
    
    @yield('modal')
    @yield('content')
     @yield('photoup')
     
    
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/axios.min.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    
  
    <script src="{{asset('js/custom.js')}}"></script>
    @yield('photojq')
   
</body>
</html>