
<div class="container-fluid  topnav">
    <div class="row">
        <nav class="navbar bg-info">
            <div class="navbar-brand" onclick="openNav()"><i class="fa fa-bars" style="font-size:30px" aria-hidden="true"></i></div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a href="/ecom" class="navbar-brand ">ezshop</a>
                </li>
            </ul>
        </nav>       
    </div>
    
    <div id="mySidenav" class="sidenav text-uppercase bg-info">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>				
        <a class='navcata' data-cata='all'>HOME</a>
        
    
    </div>
</div>
@section('manuss')
    <script>
       axios.get('/getnavcata')
       .then(function (response){
           var getnav=response.data
           $.each(getnav,function (i){
               $("<a class='navcata' title='click to show "+getnav[i].cataghory+" Cataghory product' data-cata="+getnav[i].cataghory+">").html(
                getnav[i].cataghory
                ).appendTo('.sidenav');
           });
            
           $('.navcata').click(function (){
            
                
               var getcata=$(this).data('cata');
               
               varaget(getcata)
            //    if(getcata == 'all'){
            //     $('.allpdcls').html(getcata+" Product")
            //    }else{
            //     $('.allpdcls').html(getcata)
            //    }
               
               
              
        })
       }).catch(function (error){
           toastr.error('somthing wrong')
       });
     
    </script>
@endsection



