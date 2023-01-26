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
    
    
    
</head>
<body>
       



    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-6">
                <form action="" >
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-uppercase text-center">login form</h3>
                            <input type="email" class="form-control my-3" name="email" value="" placeholder="email"  required>                 
                            <input type="password" class="form-control" name="password" value="" placeholder="password"  required>                          
                            <button class="btn btn-primary mt-3 form-control">login</button>                                        
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/axios.min.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/custom_log.js')}}"></script>
   
</body>
</html>