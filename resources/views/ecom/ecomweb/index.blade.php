@extends('ecom.ecomweb.layouts.app')
@section('title','home')

@section('allproduct')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="carousel slide" id="slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="" data-target="#slide" data-slide-to="0"></li>               
                    <li data-target="#slide" data-slide-to="1" class=""></li>
                    {{--  <li data-target="#slide" data-slide-to="2" class="active"></li>		  --}}
                </ol>
                <div class="carousel-inner" role="listbox">
                     <div class="carousel-item">
                        <a href="https://www.amazon.com/gp/product/B08TBQ7XPP/ref=ppx_yo_dt_b_asin_title_o09_s00?ie=UTF8&amp;psc=1&#10;&#9;&#9;&#9;&#9;&#9;&#9;">
                            <img src="storage/shos-banner.jpg" width="100%" height="225px" class="d-block">                   
                        </a>
                    </div> 
                    {{-- <div class="carousel-item">
                        <a href="https://www.amazon.com/gp/product/B08MB9BVBR/ref=ppx_yo_dt_b_asin_title_o00_s00?ie=UTF8&amp;psc=1">
                            <img src="image/shos-banner.jpg" width="100%" height="225px" class="d-block">                   
                        </a>
                    </div> --}}
                    <div class="carousel-item active">
                        <a href="https://www.amazon.com/gp/product/B005DLCJX2/ref=ppx_yo_dt_b_asin_title_o07_s00?ie=UTF8&amp;psc=1">
                            <img src="storage/ppez.jpg" width="100%" height="225px" class="d-block">                       
                        </a>
                    </div>
                </div>
                <a href="#slide" data-slide="prev" class="carousel-control-prev"><span class="carousel-control-prev-icon"></span></a>
                <a href="#slide" data-slide="next" class="carousel-control-next"><span class="carousel-control-next-icon"></span></a> 
            </div>
        </div>
    </div>
    
    <h2 class=" text-center mt-4 border-bottom-blue border allpdcls text-capitalize">All Product</h2>
    <h4 class="wait text-center">wait please...</h4>
    <div class="row justify-content-center allpd "style="">
        
        
            

        </div>
        {{-- <button class="btn btn-primary load_more">show more</button> --}}
    
</div>
    
@endsection

<!-- /////// get product////////// -->
@section('getproduct')
<script>
    varaget('all')
    function varaget(getcata){
        var ct= getcata; 
    axios.get('/getproduct?p='+ct)
    .then(function (response){

        $('.allpd').html('')
        
        
        var allpd=response.data
        if(response.status == 200){
            $('.wait').addClass('d-none');
        $.each(allpd,function (i,item){
           
            $("<div class='col-6 col-md-4 col-lg-3   mt-3'>").html(
             "<center>"+              
                "<div class='card '>"+
                "<img src="+allpd[i].imgpath+" data-id="+item['id']+" alt='product image' class='img-thumbnail img-responsive' style='width:250px !important;height:130px !important'>"+
                "<div class='card-body '>"+
                
                "<div class='card-text'>price:"+allpd[i].price+"</div>"+
                "<div class='card-text'>name:"+allpd[i].name+"</div>"+
                "<a href="+allpd[i].link+" class='btn btn-info'>buy nobw</a>"+
                "</div>"+
                "</div>"+
             "</center>"               
            ).appendTo('.allpd')
        })
    }else{
       
    }
    }).catch(function (error){
        $('.wait').html('somthing wrong')
        toastr.error('somthing wrong')
    })
}
  
/////// get product  end//////////

/////// get img per click //////////

// var imgload=0;

// $('.load_more').on('click',function (){
//     {{--  $('.row').scroll(function (){  --}}
//     let ckid=$(this).closest('div').find('img').data('id')
//     imgload=imgload+3
    
//     let finalimg=imgload+ckid
//     axios.get('/moreimage/'+finalimg).then(function (response){
       
//     //$('.allpd').html('')  
//     if(response.status == 200){
//         $('.wait').addClass('d-none');
//         var morepd=response.data
        
//     $.each(morepd,function (i,item){
//         $("<div class='col-6 col-md-4 col-xl-4 mt-3'>").html(
//          "<center>"+              
//             "<div class='card '>"+
//             "<div class='card-body '>"+
//             "<div class='card-image' ><img src="+morepd[i].imgpath+" data-id="+item['id']+" alt='product image' class='img-thumbnail' style='width:250px !important'></div>"+
//             "<div class='card-text'>price:"+morepd[i].id+"</div>"+
//             "<div class='card-text'>name:"+morepd[i].name+"</div>"+
//             "<a href="+morepd[i].link+" class='btn btn-info'>buy now</a>"+
//             "</div>"+
//             "</div>"+
//          "</center>"               
//         ).appendTo('.allpd')
//     })
//     }
//    })

// })

/////// get img per click end//////////


$('.funsend').click(function (){

    let funem=$('.funemail').val();
    console.log(funem)
        axios.post('/funsend',{funem})
    .then(function (response){
        alert(response.status)
        if(response.data == 1){
            
            toastr.success('Thanks for subscribe')
           $('.funemail').val('');
        }else{
            
            
            toastr.error('somthing wrong')
        }
     })
    
   
    .catch( function (error){
        
        toastr.error('somthing wrong.please check again')
        
    })
});
 

    </script>
@endsection

@section('funnel')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-7">
       
            <div class="form-group mt-3">
                <input type="email" class="form-control d-inline funemail" name="email" id="emailnl" placeholder="Submit Your Email" required>
                <button class="btn btn-info d-inline mt-2 funsend">Subscribe</button>
            </div>
            
        </div>
    </div>
</div>
@endsection

