
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/bootstrap.mim.js')}}"></script>
    <title>Document</title>
</head>
<body>
<form action="/laravel/1stpg/public/api/testt" method="post">
    @csrf

    <input type="text" name="txtt" id="">
    <button class="btn btn-danger">submit</button>
</form>
    

</body>
</html>


{{-- <a href="{{ url('/home')}}">home</a>
<a href="{{ url('/phppc')}}">php</a>
<a href="{{ url('/jspc')}}">js</a>


<h1>This is java practis page</h1>
<h1>{{$name}}</h1> --}}