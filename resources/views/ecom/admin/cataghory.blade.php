
@extends('ecom.admin.layouts.app')
@section('title','cataghory')
@section('cataghory_add')
<div class="container-fluid">
    
            <button class="btn btn-info my-2 addcata">add caraghory</button>          
       

    <div class="row justify-content-center">
       <div class="col-10 text-center ">
           <center>
               <h1 class="text-uppercase mt-5 catal" style="">cataghory list</h1>
                <table class="mt-3 table-responsive table-striped table-hover  text-center ">
                    <thead>
                        <tr class="thead">
                            <th class="text-uppercase  text-center  ">#</th>  
                            <th class="text-uppercase  text-center  ">cataghory</th>  
                            <th class="text-uppercase  text-center ">edit</th>  
                             <th class="text-uppercase  text-center ">delete</th>                                
                        </tr>
                    </thead>          
                    <tbody class="tbody">
                        <tr class="">
                                                              
                        </tr>
                       <!--  <tr>
                            <td class="text-uppercase text-center border-bottom">computer</td>                       
                            <td class="text-uppercase text-center border-bottom"><i class='fas fa-edit'></i></td>                       
                            <td class="text-uppercase text-center border-bottom"><i class='fas fa-trash-alt'></i></td>                       
                        </tr>  -->
                    </tbody>
                </table>
                <div class="h4 text-center waitmsg">wait please</div>
            </center>
        </div>
    </div>   
</div> 
   {{--  //////////// add modal/////////////  --}}
<div class="modal fade addcatamodal" id="addcatamodal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
		    <div class="modal-header">
		        <h5 class="modal-title" id="addModalLabel">Add Data</h5>
		       
		        <button type="button" class="close btn btn-info" data-dismiss="modal" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">   
                <input type="text" class="form-control mt-2 addcata_field" placeholder="add cataghory" required>
                <span class="wrongcata text-danger"></span>
		    </div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-secondary insertdatacls" data-dismiss="modal">Close</button>
		        <button type="button"    class="btn btn-info addcatacon" id="confirmedit">Add cataghory</button>
		    </div>
	  </div>
	</div>
</div>
{{--  //////////// end add modal/////////////  --}}

{{--  //////////// edit modal/////////////  --}}
<div class="modal fade cataeditmodal" id="cataeditmodal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
		    <div class="modal-header">
		        <h5 class="modal-title" id="addModalLabel">update Data</h5>
		        <h5 class="modal-title cataeditmodalid "  id="cataeditmodalid"></h5>
		        <button type="button" class="close btn btn-info" data-dismiss="modal" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">   
                <input type="text" class="form-control mt-2 cata_field" placeholder="update cataghory">
                <span class="wrongcata text-danger"></span>
               
		    </div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-secondary insertdatacls" data-dismiss="modal">Close</button>
		        <button type="button"    class="btn btn-info cataeditcon" id="confirmedit">update Data</button>
		    </div>
	  </div>
	</div>
</div>
{{--  //////////// end edit modal/////////////  --}}
   
   {{--  //////////// delete modal/////////////  --}}
   <div class="modal fade catadelmodal" id="catadelmodal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
		    <div class="modal-header">
		        <h5 class="modal-title" id="addModalLabel">delete Data</h5>
		        <h5 class="modal-title catadelmodalid"  id=""></h5>
		        <button type="button" class="close btn btn-info" data-dismiss="modal" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">   
               
               
		    </div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-secondary insertdatacls" data-dismiss="modal">Close</button>
		        <button type="button"    class="btn btn-info deletecon" id="confirmedit">delete Data</button>
		    </div>
	  </div>
	</div>
</div>
{{--  //////////// end delete modal/////////////  --}}

@endsection

@section('editmodalscript')
<script>


    getdata();
    function getdata(){
        $('.tbody').html('')
        axios.get('/getcataghory')
        .then(function (response){
            if(response.status == 200){
                $('.waitmsg').addClass('d-none');
            var getdatavar=response.data;
           
            $.each(getdatavar,function (i){
                var count=i+1;
                $('<tr>').html(
                    "<td class='border-bottom'>"+count+"</td>"+
                    "<td class='border-bottom'>"+getdatavar[i].cataghory+"</td>"+
                    "<td class='editcata border-bottom' data-name="+getdatavar[i].cataghory+" data-id="+getdatavar[i].id+"><i class='fas fa-edit'></i></td>"+
                    "<td class='deletecata border-bottom' data-id="+getdatavar[i].id+"><i class='fas fa-trash-alt'></i></td>"
                ).appendTo('.tbody')
            })
            $('.editcata').click(function (){
                $('.cataeditcon').html('update data')
                $('.cataeditmodal').modal('show')
                id= $(this).data("id");
                cata_name= $(this).data("name");
                $('.cata_field').val(cata_name)
                $('.cataeditmodalid').html(id)  
              
            });
            $('.deletecata').click(function (){
                $('.catadelmodal').modal('show')
                id= $(this).data("id");
                $('.catadelmodalid').html(id)
            })
        
        }else{
            $(".waitmsg").removeClass("d-none")
          // $('.waitmsg').removeClass('d-none');  
           //  toastr.error("status code not 200"); 
        }
        }).catch(function (error){
            toastr.error("data loded not success");
        })
    }

    ////////add cataghory///////////
   
    $('.addcatacon').click(function (){
       
        var cata=$('.addcata_field').val();
        if(cata.length == 0){
            $('.wrongcata').html('input cataghory name')
           // toastr.success("data update success");
        }else{
            $(this).html('<div class="spinner spinner-border spinner-border-sm"></div>');
            axios.post('/insert_cata',{cata_name:cata})
            .then(function (response){
                if(response.data == 1){
                    getdata()
                    $('.addcata_field').val('');
                    $('.addcatamodal').modal('hide')
                    $('.addcatacon').html('Add cataghory');
                    toastr.success("data add success");
                }
            }).catch(function (error){
                toastr.error("somthing wrong");
            })
        }
    });
    ////////end add cataghory///////

    ///////edit cataghory ///////
    $('.cata_field').keydown(function (){
        $('.wrongcata').html('')
    })
    $('.cataeditcon').click(function (){
        var cata_id=$('.cataeditmodalid').html();
        var cata_field=$('.cata_field').val();
       
        if(cata_field.length == 0){
            
            $('.wrongcata').html(' needed data')
            
        }else{
            $(this).html('<div class="spinner spinner-border spinner-border-sm"></div>');
            axios.post('/editcataghory',{idp:cata_id,cataeditp:cata_field})
            .then(function (response){
               
              if(response.data == 1){
                getdata() 
                 $('.cataeditcon').html('update Data')
                    $('.cataeditmodal').modal('hide')
                   toastr.success('data update success');
                }else{
                    $('.cataeditmodal').modal('hide')
                    $('.cataeditcon').html('update data')
                }
            }).catch(function (error){
                $('.cataeditcon').html('update Data')
                toastr.error('update not success')
            })
        }
    })

    ///////end edit cataghory////

    ///////delete////
   $('.deletecon').click(function (){
    $(this).html('<div class="spinner spinner-border spinner-border-sm"></div>');
   var delid= $('.catadelmodalid').html()
       axios.post('/deletecata',{deleteid:delid})
       .then(function (response){
           if(response.data == 1){
            $('.deletecon').html('delete data')
            getdata() 
            $('.catadelmodal').modal('hide')
            toastr.success('data delete success');
           }else{
            $('.deletecon').html('delete data')
            toastr.error('delete not successe')
           }
       }).catch(function (error){
        $('.deletecon').html('delete data')
        toastr.error('delete not success')
    })
   })
    ///////end delete////


    $('.addcata_field').keydown(function (){
        $('.wrongcata').html('')    
    })
    $('.addcata').click(function (){
        $('.wrongcata').html('')        
        $('.addcatamodal').modal('show')
        
    })
    $('.fa-edit').click(function (){
        $('.cataeditmodal').modal('show')
    });
    $('.fa-trash-alt').click(function (){
        $('.catadelmodal').modal('show')
    })

    
</script>
@endsection