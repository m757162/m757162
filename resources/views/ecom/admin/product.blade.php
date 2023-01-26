@extends('ecom.admin.layouts.app')
@section('title','product')
@section('product_list')
    <button class="btn btn-info openmodal m-4 " id="openmodal">Add data</button>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 text-center ">
            <center>
                <h1 class="text-uppercase mt-5 ">product list</h1>
                <table class="mt-3 table-responsive table-striped table-hover  text-center ">
                    <thead>
                        <tr class="thead">
                            <th class="text-uppercase  text-center">cataghory</th>  
                            <th class="text-uppercase  text-center">name</th>                              
                            <th class="text-uppercase  text-center">price</th> 
                            {{--  <th class="text-uppercase  text-center">link</th>    --}}
                            <th class="text-uppercase  text-center">edit</th>  
                            <th class="text-uppercase  text-center">delete</th>                                
                        </tr>
                    </thead>          
                    <tbody class="tbody">
                                                     
                                                               
                        </tr>
                        
                    </tbody>
                </table>
                <h4 class="text-uppercase show_wait my-5">please wait...</h4>
            </center>
        </div>
    </div>
</div>

   {{--  ////////////// add product //////////////////   --}}
    <div class="modal fade addmodal" id="addmodal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Data</h5>
                    <h5 class="modal-title cataeditmodalid"  id="cataeditmodalid"></h5>
                    <button type="button" class="close btn btn-info" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">  
                    <select name="selectval" class="form-control selectval" id="selectval" required>
                        <option value="" selected>choice one..</option>
                        
                       
                    </select>
                    <span class="wrongc text-danger"></span> 
                    <input type="text" class="form-control mt-2 add_name" placeholder="product name">
                    <span class="wrongn text-danger"></span>
                    <input type="file" class="form-control mt-2 add_image">
                    <span class="wrongpic text-danger"></span>
                    <br>
                    <img src="" class="ppv mt-2" sizes="3px" alt="" width="0px" >
                    <input type="text" class="form-control mt-2 add_price" placeholder="product price">
                    <span class="wrongp text-danger"></span>
                    <input type="text" class="form-control mt-2 add_link" placeholder="product link">
                    <span class="wronglink text-danger"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary insertdatacls" data-dismiss="modal">Close</button>
                    <button type="button"    class="btn btn-info data_add" id="confirmedit">Add Data</button>
                </div>
          </div>
        </div>
    </div>
{{--  //////////////// end add product ///////////  --}}


{{--  ////////////// edit product //////////////////   --}}
    <div class="modal fade producteditmodal" id="producteditmodal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Edit Data</h5>
                    <h5 class="modal-title  idnum"  id=""></h5>
                    <button type="button" class="close btn btn-info" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">  
                    <span class="text-uppercase">cataghory:</span> 
                    <select name="selectval" class="form-control eselectval" id="eselectval" required>
                        <option value="" selected >choice one..</option>
                    </select>
                    <span class="ewrongn text-danger"></span>
                    <span class="text-uppercase">name:</span> 
                    <input type="text" class="form-control mb-2 edit_name" placeholder="product name">
                    <span class="ewrongn text-danger"></span>
                    <span class="text-uppercase">price:</span> 
                    <input type="text" class="form-control mb-2 edit_price" placeholder="product price">
                    <span class="ewrongp text-danger"></span>
                   
                    <span class="text-uppercase">image:</span> 
                     <input type="file" class="form-control mb-2 edit_image_file" placeholder="product image">
                    <span class="ewrongpic text-danger"></span> <br>
                    <input type="hidden" class="form-control mb-2 edit_image_h" placeholder="product image">
                    <img src="" class="edit_image" width="180px" alt=""> 
                    <br>
                    <span class="text-uppercase mt-2">link:</span> 
                    <input type="text" class="form-control mb-2 edit_link" placeholder="product link">
                    <span class="ewronglink text-danger"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary insertdatacls" data-dismiss="modal">Close</button>
                    <button type="button"    class="btn btn-info editproductcon" id="editproductcon">Edit Data</button>
                </div>
          </div>
        </div>
    </div>
{{--  //////////////// end edit product ///////////  --}}

{{--  //////////// delete modal/////////////  --}}
<div class="modal fade productdelmodal" id="productdelmodal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
		    <div class="modal-header">
		        <h5 class="modal-title" id="addModalLabel">Delete Data</h5>
		        <h5 class="modal-title productdelid"  id="cataeditmodalid"></h5>
		        <button type="button" class="close btn btn-info" data-dismiss="modal" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">   
               
               
		    </div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-secondary insertdatacls" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-info productdelcon" id="confirmedit">delete Data</button>
		    </div>
	  </div>
	</div>
</div>
{{--  //////////// end delete modal/////////////  --}}
@endsection

@section('product_script')
<script>
{{--  //////////// fetch caraghory in add modal/////////////  --}}
    axios.get('/cata_fetch').then(function (response){
        var cata=response.data;
        
        if(response.status == 200){
            $.each(cata,function (i){
        $("<option value="+cata[i].cataghory+">").html(               
                cata[i].cataghory          
            ).appendTo('#selectval');
        })
        }else{
            toastr.error('something wrong')
        }
        
        if(response.status == 200){
            $.each(cata,function (i){
        $("<option value="+cata[i].cataghory+">").html(               
                cata[i].cataghory          
            ).appendTo('#eselectval');
        })
        }else{
            toastr.error('something wrong')
        }
    }).catch(function (error){
        toastr.error('cataghory not fatch')
    })
{{--  //////////// end fetch caraghory in add modal/////////////  --}}

{{--  ////////////  insert product /////////////  --}}
    $('.openmodal').click(function (){
        $(".ppv").attr('width','0px')
        $('.addmodal').modal('show')
    });
    $('.fa-edit').click(function (){
        $('.producteditmodal').modal('show')
    });
    $('.fa-trash-alt').click(function (){
        $('.productdelmodal').modal('show')
    });


    $('.add_name').keydown(function (){

        $('.wrongn').html('');
    });
    $('.add_image').change(function (){
        var pp=$(this).val();
        
        if(pp.length !== 0){
            
        var reder=new FileReader();
        reder.readAsDataURL(this.files[0]);
        reder.onload=function (event){
            var photoshow=event.target.result;
            $('.ppv').attr('src',photoshow)
            $('.ppv').attr('width','180px')
        }
    }else{
        $('.ppv').attr('src','')
            $('.ppv').attr('width','0px')
    }
        
        $('.wrongpic').html('');
    });
    $('.add_price').keydown(function (){
        $('.wrongp').html('');
    });
    $('.add_link').keydown(function (){
        $('.wronglink').html('');
    })

  $('.data_add').click(function (){
    
 var sl=$('.selectval').val();
 var name=$('.add_name').val();
 var image=$('.add_image').val();  
 var price=$('.add_price').val();
 var link=$('.add_link').val();

 if(sl.length == 0){
    $('.wrongc').html('value needed');
 }
 else if(name.length == 0){
    $('.wrongn').html('value needed');
 }
   else if( image.length == 0){
   $('.wrongpic').html('value needed');
 }
    else if( price.length == 0){
    $('.wrongp').html('value needed');
 }
    else if( link.length == 0){
    $('.wronglink').html('value needed');
 }  
 else{

   $(this).html('<div class="spinner spinner-border spinner-border-sm"></div>');
   var photo=$('.add_image').prop('files')[0];
   var form =new FormData();
   
  form.append('cataghory',sl);    
  form.append('pname',name);    
  form.append('pprice',price);     
  form.append('photo',photo); 
  form.append('plink',link);      

      axios.post('/addproduct', form)
     .then(function (response){
        
        if(response.data ==1 ){
            getproduct()
            $('.data_add').html('Add Data');
            $('.addmodal').modal('hide');
            //$('.selectval').val('');
            $('.add_name').val('');
            $('.add_image').val('');
            $('.add_price').val('');
            $('.add_link').val('');
            toastr.success('Data add success')

        }else{
            toastr.error('something wrong')
            $('.addmodal').modal('hide');
        }
     }).catch(function(error){
        $('.addmodal').modal('hide');
        toastr.error('something wrong')
     })
  }  
    
});
{{--  //////////// end insert product/////////////  --}}

{{--  //////////// show  product/////////////  --}}
getproduct();
function getproduct(){
    $('.tbody').html(' ')
axios.get('/showproduct',)
.then(function (response){
    
    if(response.status == 200){
        $('.show_wait').addClass('d-none')
        var product =response.data;
    $.each(product,function (i){
        $('<tr>').html(
            "<td>"+product[i].cataghory+"</td>"+
            "<td>"+product[i].name+"</td>"+
            "<td>"+product[i].price+"</td>"+
          //  "<td>"+product[i].link+"</td>"+
            "<td  class='text-uppercase productedit text-center border-bottom' data-id="+product[i].id+" data-name="+product[i].name+" data-price="+product[i].price+" data-imgpath="+product[i].imgpath+" data-link="+product[i].link+" ><i class='fas fa-edit'></i></td>"+                               
             "<td class='text-uppercase productdelete text-center border-bottom'data-id="+product[i].id+"><i class='fas fa-trash-alt'></i></td>"   
            ).appendTo('.tbody')          
    });
    }
    $('.productedit').click(function (){
        $(".producteditmodal").modal('show')
        $('.idnum').html($(this).data('id'))
       var pname=$(this).data('name');
        $('.edit_name').val(pname)
         $('.edit_price').val($(this).data('price'))
         $('.edit_image_h').val($(this).data('imgpath'))
        var imgpath=$(this).data('imgpath').split('/')[2]
       var oldimgpath= $('.edit_image').attr('src','storage/'+imgpath) 
        $('.edit_link').val($(this).data('link'))  
        oldimg(imgpath)

    })
    $('.productdelete').click(function (){
        $('.productdelmodal').modal('show');
        $('.productdelid').html($(this).data('id'))
        
    })

}).catch(function (error){
    toastr.error('something wrong')
})
}
function oldimg(oldimgpath){
 
$('.edit_image_file').change(function (){
    var eif=$(this).val();
        //{{--  alert(eif)  --}}
       
        if(eif.length !== 0){
            
        var reder=new FileReader();
        reder.readAsDataURL(this.files[0]);
        reder.onload=function (event){
            var photoshow=event.target.result;
            $('.edit_image').attr('src',photoshow)
            $('.edit_image').attr('width','180px')
        }
    }else{
        
            
        
        $('.edit_image').attr('src','storage/'+oldimgpath)
           //  $('.edit_image').attr('width','0px') 
    }
        
        $('.wrongpic').html('');
});
}

{{--  //////////// end show  product/////////////  --}}

{{--  //////////// edit  product/////////////  --}}
$('.editproductcon').click(function (){
var idnum=$('.idnum').html();
var selectval=$('.eselectval').val();
var editname=$('.edit_name').val();
var editprice=$('.edit_price').val();
var editimg=$('.edit_image_h').val();
var editimgfile=$('.edit_image_file').prop('files')[0];
var editlink=$('.edit_link').val();

if(editname.length == 0){
    toastr.error('product name required')
}
else if(selectval.length == 0){
    toastr.error('cataghory select required')
}
else if(editprice.length == 0){
    toastr.error('product price required')
}
else if(editlink.length == 0){
    toastr.error('product link required')
}
else{
$(this).html('<div class="spinner spinner-border spinner-border-sm"></div>');
var editform= new FormData();
editform.append('idnum',idnum)
editform.append('edit_select_val',selectval)
editform.append('edit_name_val',editname)
editform.append('edit_price_val',editprice)
editform.append('edit_img_val',editimg)
editform.append('edit_imgfile_val',editimgfile)
editform.append('edit_link_val',editlink)

 axios.post('/editproduct',editform)
 .then( function(response){
     if(response.data == 1){
        getproduct()
        toastr.success('update success')
       
        $('.editproductcon').html('Edit Data')
        $(".producteditmodal").modal('hide')
     }else{
        $('.editproductcon').html('Edit Data')
        $(".producteditmodal").modal('hide')
     }
 }).catch(function (error){
    alert("code maybe wrong")
 })
}
})
{{--  //////////// end edit  product/////////////  --}}

{{--  //////////// delete  product/////////////  --}}
$('.productdelcon').click(function (){
    $(this).html('<div class="spinner spinner-border spinner-border-sm"></div>');
    var delid=$('.productdelid').html()
    axios.post('/productdel',{delid:delid})
    .then(function (response){
        if(response.data ==1 ){
            toastr.success('delete success')
            $('.productdelcon').html('delete Data');
            $('.productdelmodal').modal('hide');
            getproduct()
        }else{
            $('.productdelmodal').modal('hide');
            toastr.error('delete not success')
        }
    }).catch(function (error){
        $('.productdelmodal').modal('hide');
        toastr.error('delete not success')
    })
})


{{--  //////////// end delete  product/////////////  --}}


</script>
@endsection