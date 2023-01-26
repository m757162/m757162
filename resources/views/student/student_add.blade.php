
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
                   {{--         @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $eror)
                                <li>{{ $eror }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                       STUDENT DATA ADD PAGE       
                    <div class="card-header">
                             
                        <button class="btn btn-success float-right"><a href="{{ url('/student')}}" class="text-white">BACK</a> </button>                      
                    </div>
                    <div class="card-body bg-info">
                        <form action="store" method="post" class="form-group" enctype="multipart/form-data">
                            @csrf
                            
                            <label for="name">name </label>
                        <input type="text" name="name" value="{{ old('name')}}" class="@error('name') @enderror form-control border-primary" id="">
                            @error('name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="email">email </label>
                            <input type="email" name="email" value="{{ old('email')}}" class="@error('email') @enderror form-control border-primary" id="">
                            @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                            <label for="photo">image</label>
                            <input type="file" name="photo" class="@error('photo') @enderror form-control border-primary" id="">
                            @error('photo')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                            <button class="btn btn-success mt-3 float-right">INSERT DATA</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/bootstrap.mim.js') }}"></script>
</body>
</html>
