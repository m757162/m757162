<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <title>dataInsert</title>
</head>
<body>
    <div class="container">
        <div class=" row justify-content-center">
            <div class="col-7">
                <div class="card">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif           
                    <div class="card-header">
                        <div>Data Insert page</div>
                        <a href={{'/adminpanel'}} class='btn btn-info float-right'>back</a>
                    </div>
                    <div class="card-body">
                        <form action="datastore" method="post">
                            @csrf
                            <div class="form-group">
                                <label for name="name"></label>
                                <input type="text" name="name" placeholder="Name" class=" @error ('name')  @enderror form-control" id=""> 
                                @error('name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                              
                                <button class="btn btn-success mt-1 float-right" type="submit">INSERT</button>                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="{{ asset('js/bootstrap.mim.js') }}"></script>
</body>
</html>