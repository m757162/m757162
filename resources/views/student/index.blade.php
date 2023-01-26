<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <title>student index page</title>
</head>
<body>
    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="card">
                    <div class="card-header">
                        Student index page
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/student_add')}}" class="text-white">   <button class="btn btn-success float-right">ADD DATA </button></a>
                    </div>
                    
                </div>
                <table class="table container text-center">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>photo</th>
                    <th >action</th>                 
                    </tr> 
                  
                    @foreach ($student as $item)
                    <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                        <td><img height='60px' width='100px' src="{{asset('uploads/photo/'.$item->image)}}" alt="" ></td>
                            <td><a href="student_update/{{$item->id}}" class="btn btn-primary btn-sm">edit</a></td>
                            <td><a href="data_delete/{{$item->id}}" class="btn btn-danger btn-sm">delete</a></td>
                           
                        </tr>
                        
                    @endforeach
              
                </table>
            </div>
        </div>
    </div>



    <script src="{{ asset('js/bootstrap.mim.js') }}"></script>
</body>
</html>