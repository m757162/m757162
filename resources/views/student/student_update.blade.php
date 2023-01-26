
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <title>student add page</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="card">    
                         
                    @if(session('status'))
                   <div class="alert alert-success">{{session('status')}}</div>                     
                        @endif
                       STUDENT DATA UPDATE PAGE       
                    <div class="card-header">
                             
                        <button class="btn btn-success float-right"><a href="{{ url('/student')}}" class="text-white">BACK</a> </button>     
                                        
                    </div>
                    <div class="card-body bg-info">
                    <form action="{{ url("/data_update/".$student_id->id) }}" method="post" class="form-group" enctype="multipart/form-data">
                            @csrf
                           @method('PUT')
                            <label for="name">name </label>
                        <input type="text" name="name" value="{{$student_id->name}}" class="form-control border-primary" id="">
                            <label for="email">email </label>
                            <input type="email" name="email" value="{{$student_id->email}}" class="form-control border-primary" id="">
                            <label for="photo">image</label>
                            <input type="file" name="photo" value="{{$student_id->image}}" class="form-control border-primary" id="">
                            <img height='60px' width='100px' src="{{asset('uploads/photo/'.$student_id->image)}}" alt="" >
                            <button  class="btn btn-success mt-3 float-right">UPDATE DATA</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/bootstrap.mim.js') }}"></script>
</body>
</html>