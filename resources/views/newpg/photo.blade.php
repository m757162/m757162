@extends('newpg.layouts.app')

@section('photoup')
    
<button class="btn btn-info m-3 photoupb" id="vv">upload</button>

<div class="modal fade photocl" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
            
          <div class="h5">Add photo</div>
		  <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
          </button>
          
        </div>
        <div class="modal-body">
        <input type="file" class="custom-file-input photoinput" name="filephoto" id="filephoto">
        <br>
        <span class="wrongfile text-danger"></span>
        <br>
           
        <img src="" class="ppv" sizes="3px" alt="" width="140px" >
        </div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button"    class="btn btn-danger photoupcon" id="photoupcon">upload</button>
		</div>
	  </div>
	</div>
  </div>
@endsection

@section('photojq')
<script>
  

    $(".photoupb").click(function (){
        
        $('#photoModal').modal('show');
    });


    $('.photoinput').change(function (){
        var reder=new FileReader();
        reder.readAsDataURL(this.files[0]);
        reder.onload=function (event){
            var photoshow=event.target.result;
            $('.ppv').attr('src',photoshow)
        }
    });


    $(".photoupcon").click(function (){
      var imgfilec=$('.photoinput').val();

  if(imgfilec.length == 0){
    //$('.wrongfile').html(' file was empty'); 
    toastr.error("file was empty");  
  }else{
    $(this).html('<div class="spinner spinner-border spinner-border-sm"></div>');
       var photo=$('.photoinput').prop('files')[0];
       var form =new FormData();
       form.append('photo',photo);

       axios.post('/photoupload',form)
       .then(function (response){
           if(response.data ){
             alert(response.data)
            $(".photoupcon").html('upload');
             toastr.success("upload success");  
             $('#photoModal').modal('hide');
             $('.ppv').attr('src','');
             $('.photoinput').val('');
           }
           
       }).catch(function (){
        toastr.error("upload not success");
       })
      }
    })
  
</script>
@endsection