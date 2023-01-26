@section('title' ,'contact')

@extends('Rproject.layout.app')

@section('content')
<div class="container mt-5 contactCon">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="form-group">
                <form action="contact" method="post">
                    @csrf
                <div class="form-block">
                    <input type="text" id="name" class="form-control mt-3" placeholder="Name">
                </div>
                <div class="form-block">
                    <input type="email" id="email" class="form-control mt-3" placeholder="Email">
                </div>
                <div class="form-inline">
                    <textarea class="form-control mt-3" name="" id="details" cols="100" rows="6" placeholder="Right somthing...."></textarea>
                </div>
                <div class="form-block">
                    <p class="btn form-control btn-info mt-3" onclick="submit()">submit </button>     
                </div> 
            </form>                               
            </div>
        </div>
    </div>
</div>
@endsection
