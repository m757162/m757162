<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <title>AdminPanel</title>
</head>
<body>
    
<div class="container">
    <div class=" row justify-content-center">
        <div class="col-7">
            <div class="card">
                <div class="card-header">
                    <h3>AdminPanel</h3>
                    <a class="btn btn-primary float-right" href="{{ '/datainsert' }}">Add data</a>
                </div>
                <div class="card-body">
                    <table>
                    @foreach ($user_data as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td><a href="{{ 'dataupdate/'.$item->id }}" class="btn btn-primary">edit</a></td>
                        <td><a href="{{ 'datadelete/'.$item->id }}" class="btn btn-danger">delete</a></td>
                       
                    </tr>
                    
                    
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="{{ asset('js/bootstrap.mim.js') }}"></script>
</body>
</html>