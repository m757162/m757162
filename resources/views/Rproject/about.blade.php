@section('title' ,'about')


@extends('Rproject.layout.app')
@section('content')
    
    <div class="container aboutCon">
        <div class="row ">
            <div class="col-md-3">
                <h3>admin info</h3>
                <b>name:Mahamudul hasan</b>
                <br>
                <b>age:19</b>
            </div> 

            <div class="col-md-3">
                <h3>office info</h3>
                <b>office name:IT LAB</b>
                <b>adress:khulna,Bangladesh</b>
            </div>

             <div class="col-md-3">
                <h3>skrills</h3>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>PHP</li>
                    <li>SQL</li>
                </ul>
            </div> 

            <div class="col-md-3">
                <h3>experience</h3>
                <b>two years work in company</b>
            </div>
        </div>
    </div>



@endsection
