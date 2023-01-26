@extends('earnandlearn.public.layouts.app')
@section('title','admin_home')
@section('main_cata')

<div class="container">
                <div class="row justify-content-center">
        
       
        @foreach($cataghory as $key =>$catalist)
        
                <div class="col-3  col-md-3  homecatalist">
                        <div class="card">
                                <div class="card-header text-center">
                                       <a href="{{url('somadan/a/wproot/'.$catalist->main_content)}}" class="acatalist "> {{ $catalist->main_content}}</a>
                                </div>
                        </div>
                </div>
               

        
        @endforeach
        </div>
        </div>


@endsection