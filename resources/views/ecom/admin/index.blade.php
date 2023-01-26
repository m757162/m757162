@extends('ecom.admin.layouts.app')
@section('title','home')
@section('indexpage')

    <div class="container-fluid adminpanel">
   
        <div class="h1 text-uppercase mt-4  text-center" style="word-spacing: 12px" title="any website affilite avaible">amazon affilite website</div>
        <div class="row justify-content-center  ">
            <div class="col-6 col-md-4 col-lg-4">              
                <div class="card mb-2">                   
                    <div class="card-body">
                    
                       <p class="text-capitalize mb-0">total views: {{ $view}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-7 col-md-6 col-lg-6 ">              
                <div class="card mb-3">                   
                    <div class="card-body">
                        <div class="mb-1">
                            <strong class="text-capitalize  border-bottom">sr</strong>
                            <strong class="text-capitalize border-bottom m-3">user list</strong><br>
                        </div> 
                       @foreach($users as $key => $user)
                       <div class="m-0">
                           <strong class="m-0 ">{{$key+1 }} </strong>
                           <strong class="m-4"> {{$user->ip}}</strong>
                        </div>
                       @endforeach
                    </div>
                </div>
               
            </div>
            
            <div class="col-10 col-md-6 col-lg-6  ">              
                <div class="card mb-3">                   
                    <div class="card-body">
                        <div class="mb-1">
                            <strong class="text-capitalize  border-bottom">sr</strong>
                            <strong class="text-capitalize border-bottom m-3">user list</strong><br>
                        </div> 
                       @foreach($funnel as $key => $user)
                       <div class="m-0">
                           <strong class="m-0 ">{{$key+1}} </strong>
                           <strong class="m-4"> {{$user->email}}</strong>
                        </div>
                       @endforeach
                    </div>
                </div>
                
            </div>
        </div>
        <div class="h3 text-capitalize text-center mt-2">thanks for visiting</div>
    </div>

@endsection