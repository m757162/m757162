@extends('earnandlearn.public.layouts.app')
@section('title','admin_index')
@section('main_cata')

<div class="container">
    <div class="row justify-content-center">       
        <div class="col-12  col-md-7  homecatalist">
       
        <input type="hidden" class="form-control id_f mb-1"         value="{{$val[0]->id}}"  placeholder="id"/>
        <label for="main_content">main_content:</label>
        <input type="text" class="form-control main_content_f mb-1" value="{{$val[0]->main_content}}" placeholder="main_content"/>
        <label for="header">header:</label>
        <input type="text" class="form-control header_f mb-1"       value="{{$val[0]->header}}" placeholder="header"/>
        <label for="sub_header">sub_header:</label>
        <input type="text" class="form-control sub_header_f mb-1"   value="{{$val[0]->sub_header}}" placeholder="sub_header"/>
        <label for="content">content:</label>
        <textarea  class="form-control content_f mb-1"rows="5"   value="{{$val[0]->content}}" placeholder="content">{{$val[0]->content}}</textarea>
        <label for="active">active:</label>
        <input type="text" class="form-control active_f mb-1"       value="{{$val[0]->active}}" placeholder="active"/>
        <button type="submit" class="btn btn-info dataupdate">update</button>
        <button type="submit" class="btn btn-info datadelete">delete</button>            
        </div>
    </div>
</div>

@endsection

@section('main_cata_script')
<script>
$('.dataupdate').click(function(){
    $(this).html('<div class="spinner spinner-border spinner-border-sm"></div>');
    var id=$('.id_f').val()
    var main_content=$('.main_content_f').val()
    var header=$('.header_f').val()
    var sub_header=$('.sub_header_f').val()
    var content=$('.content_f').val()
    var active=$('.active_f').val()
   
    axios.post('/dataupdatef',{id:id,main:main_content,header:header,sub_h:sub_header,cnt:content,active:active})
    .then(function (response){
       
        if(response.data == 1){
            
                    $('.dataupdate').html('update');
                    toastr.success("data update success");
                    getdata();
                }else{
                    $('.dataupdate').html('update');
                }
            }).catch(function (error){
                
                $('.dataupdate').html('update');
                toastr.error("somthing wrong");
            })
})


$('.datadelete').click(function(){
    $(this).html('<div class="spinner spinner-border spinner-border-sm"></div>');
    var id=$('.id_f').val()
    
axios.post('/datadeletef',{id:id})
.then(function (response){
    if(response.data == 1){                   
                    $('.datadelete').html('delete');
                    toastr.success("data delete success");
                    getdata();
                }else{
                    $('.datadelete').html('update');
                }
    }).catch(function (error){
               
                $('.datadelete').html('update');
                toastr.error("somthing wrong");
            })
})




</script>

@endsection