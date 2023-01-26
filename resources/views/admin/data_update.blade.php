<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <title>dataUpdate</title>
</head>
<body>
    <div class="container">
        <div class=" row justify-conteny-center">
            <div class="col-7">
                <div class="card">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif  
                    <div class="card-header">
                        <h3>update page</h3>
                        <a href="/adminpanel"class="btn btn-primary float-right">back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('dataupdateput/'.$userdatapass->id)}}" method="post">
                            @csrf 
                            @method('put')
                      
                            <input type="text" name="name"  class="@error('name')   @enderror form-control" value="{{ $userdatapass->name }}" id="">
                            @error('name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <button class="btn btn-info" type="submit">Update</button>   
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="{{ asset('js/bootstrap.mim.js') }}"></script>
</body>
</html>