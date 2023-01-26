@extends('newpg.layouts.app')

@section('content')

    <div class="row justify-content-center m-0">
      <div class="col-8">
        <button class="btn btn-info add_data my-3"> Add Data</button>
        <table class="d-none main table-responsive" id="main_t">
          <thead >
              <tr>
                  <th>id</th>
                  <th>name</th>
                 
                  <th >edit</th>
                  <th >delete</th>
                 
              </tr>
          </thead>
          <tbody id="tdata">
              
          </tbody>
      </table>
      </div>
    </div>
    
    <h3 class='h3'>wait please</h3>
    <h3 class='h4 d-none'>somthing wrong</h3>
    <br>
    <br>


  
       
@endsection

@section('modal')
<div class="container">
<div class="row justify-content-center">
  <div class="col-3 position-absolute">
    <div class="alert alert-success  als d-none">Delete successfully</div>
  </div>
</div>
</div>



{{--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	Launch demo modal
  </button>  --}}
 
    
  
  
  <script >

      
    
  </script>
  {{--  delete modal   --}}
  <div class="modal fade" id="exampleModal" class="modalcl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">press ok to delete</h5>
		  <h5 class="modal-title Modalsec"  id="exampleModalLabel2"></h5>
		  <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
	
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button"    class="btn btn-danger confirmdel" id="confirmdel">delete</button>
		</div>
	  </div>
	</div>
  </div>
   
  {{--  2nd modal edit  --}}
  
  <div class="modal fade" id="editModal" class="editmodalcl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="editModalLabel">edit form</h5>
		  <h5 class="modal-title Modalsec"  id="editModalLabel2"></h5>
		  <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
     <input type="text" class="form-control edit_field" placeholder="enter your name ">

     <div class="wrong text-danger"></div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary confirmeditcls" data-dismiss="modal">Close</button>
		  <button type="button"    class="btn btn-danger confirmedit" id="confirmedit">Edit</button>
		</div>
	  </div>
	</div>
  </div>
  
  
  {{--  insert modal  --}}
  
  <div class="modal fade" id="insertmodalh" class="insertmodalh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="addModalLabel">Add Data</h5>
		  <h5 class="modal-title Modalsec"  id="editModalLabel2"></h5>
		  <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
    
     <input type="text" class="form-control mt-2 name_field" placeholder="enter your name ">
     <div class="wrongn text-danger"></div>
    
     <input type="email" class="form-control mt-2 email_field" placeholder="enter your email ">
     <div class="wronge text-danger"></div>
     <input type="text" class="form-control mt-2 image_field" placeholder="enter your image ">
     <div class="wrongi text-danger"></div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary insertdatacls" data-dismiss="modal">Close</button>
		  <button type="button"    class="btn btn-danger insertdatacon" id="confirmedit">Insert Data</button>
		</div>
	  </div>
	</div>
  </div>

@endsection





{{--  

getServicesData();

function getServicesData() {
    axios.get('/getServicesData')
        .then(function(response) {
            if (response.status == 200) {
                $('#mainDiv').removeClass('d-none');
                $('#loaderDiv').addClass('d-none');
               
                $('#serviceDataTable').DataTable().destroy();
                $('#service_table').empty();
                
                var jsonData = response.data;
                $.each(jsonData, function(i, item) {
                    $('<tr>').html(
                        "<td><img class='table-img' src=" + jsonData[i].service_img + "></td>" +
                        "<td>" + jsonData[i].service_name + "</td>" +
                        "<td>" + jsonData[i].service_des + "</td>" +
                        "<td><a  class='serviceEditBtn' data-id=" + jsonData[i].id + "><i class='fas fa-edit'></i></a></td>" +
                        "<td><a  class='serviceDeleteBtn'  data-id=" + jsonData[i].id +" ><i class='fas fa-trash-alt'></i></a></td>"
                    ).appendTo('#service_table');
                });
                 // Services Table Delete Icon Click
                $('.serviceDeleteBtn').click(function() {
                    var id = $(this).data('id');
                    $('#serviceDeleteId').html(id);
                    $('#deleteModal').modal('show');
                })
                // Services Table Edit Icon Click
                $('.serviceEditBtn').click(function() {
                    var id = $(this).data('id');
                    $('#serviceEditId').html(id);
                    ServiceUpdateDetails(id);
                    $('#editModal').modal('show');
                })
                $('#serviceDataTable').DataTable({"order":false});
                $('.dataTables_length').addClass('bs-select');
               
            } else {
                $('#loaderDiv').addClass('d-none');
                $('#WrongDiv').removeClass('d-none');
            }
        })
        .catch(function(error) {
            $('#loaderDiv').addClass('d-none');
            $('#WrongDiv').removeClass('d-none');
        });
}  --}}











