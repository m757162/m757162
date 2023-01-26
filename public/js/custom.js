// function submitt(){
//     var id=document.getElementById("id").value;
//     var name=document.getElementById("name").value;
//     var email=document.getElementById('email').value;
//     var details=document.getElementById('details').value;
//     // alert(name+email+details);
//   var url='/insertData';
//   var data={student_id:id,student_name:name,,student_email:email,some_details:details}
//     axios.post(url,data)



// const { divide } = require("lodash")

// const { default: axios } = require("axios")

// const { default: axios } = require("axios")

//      .then( function (response) {
   
//     document.getElementById("id").value='';
//     document.getElementById("name").value='';
//     document.getElementById('email').value='';
//     document.getElementById('details').value='';
//     alert("okk");
   
//      })
//     .catch(function(response) {
//         alert("fail");
//     })
    

// var name=document.getElementById("name").value;
// var email=document.getElementById("name").value;
// var details=document.getElementById("name").value;

// // alert(name);

// var url='/axios';
// var data={student_id:id,student_name:name,student_email:email,some_details:details}
//     axios.post(url,data)

//     .then(function (response){
//       alert('data post success');
//     })
//     .catch(function(){
//       alert('not working');
//     });
// }

///////////insert data ////////

$('.add_data').click(function (){
  
  $("#insertmodalh").modal('show')
  $('.wrongn').html(' ');
});

$('.insertdatacon').click(function (){
  var name=$('.name_field').val()
  var email=$('.email_field').val()
  var image=$('.image_field').val()
  
  if(name == ''){
    $('.wrongn').html('need valid name');
    $('.name_field').keydown(function(){
      $(".wrongn").html(" ");   
     }) 
  }else if(email == ''){
    $('.wronge').html('need valid email');
    $('.email_field').keydown(function(){
      $(".wronge").html(" ");   
     }) 
  }else if(image == ''){
    $('.wrongi').html('need valid image');
    $('.image_field').keydown(function(){
      $(".wrongi").html(" ");   
     }) 
  }else{
    $(this).html('<div class="spinner spinner-border spinner-border-sm"></div>')
    axios.post('/postdata',{f_name:name,f_email:email,f_image:image})
    
    
    .then(function (response){
    
      if(response.data == 1){
        $('.als').html("insert successfully");
        // $('.als').removeClass('d-none');
        toastr.success("data added successfully");
        $('.name_field').val('');
        $('.email_field').val('');
        $('.image_field').val('');
        $('.insertdatacon').html('insert data');
        $("#insertmodalh").modal('hide')
      newpg()
      }
    }).catch(function (){
      $('.insertdatacon').html('insert data');
      $("#insertmodalh").modal('show')
      toastr.error("wrong");
    })

  }
})
// /////// get data ////////////
newpg()
function newpg(){

  axios.get('/home_data')
  .then(function (response){


     ////  data duble not fatch ////////
    $("#tdata").html(" ")



    if(response.status == 200){

    $(".main").removeClass("d-none")
    $(".h3").addClass("d-none")
    

    var f_json=response.data
    $.each(f_json,function(i){
      $('<tr>').html(
        "<td>"+f_json[i].id+"</td>"+
        "<td>"+f_json[i].name+"</td>"+
        "<td  class=' editbtn' data-name="+f_json[i].name+" data-id="+f_json[i].id+"><i class='fas fa-edit'></i></td>"+
        "<td  class=' deletebtn' id='' data-id="+f_json[i].id+"><i class='fas fa-trash-alt'></i></td>" 
           
        ).appendTo("#tdata");
        // data-toggle='modal' onclick='hf()' data-target='#exampleModal'
    });

    ////// edit form primary//////////

$('.editbtn').click(function (){
  $(".wrong").html(" ");   
  var edit_id= $(this).data("id");
  var edit_name= $(this).data("name");
  
  $('#editModalLabel2').html(edit_id);
  $('.edit_field').val(edit_name)

  $('#editModal').modal('show');
  $('.als').addClass('d-none');
  

  
});
    

    ////// delete form primary//////////
    $('.deletebtn').click(function (){
      var id= $(this).data("id");
      $("#exampleModalLabel2").html(id);
       $('#exampleModal').modal('show');
       $('.als').addClass('d-none');
    })
    // $('#exampleModal').modal('show')
 
    $(document).ready( function () {
      $('#main_t').DataTable();
  } );
    


  }else{
    $(".h3").addClass("d-none")
    $(".h4").removeClass("d-none")

  }
  }).catch(function (error){
    $(".h3").addClass("d-none")
    $(".h4").removeClass("d-none")
  })
   
 


}



  ////// edit form final//////////
$(".confirmedit").click(function (){
 
  var edit_id = $('#editModalLabel2').html();
  var edit_name =$('.edit_field').val();
  if(edit_name.length == 0){
   $(".wrong").html("please do not empty"); 
   $('.edit_field').keydown(function(){
    $(".wrong").html(" ");   
   })   
  }else{
    $(".wrong").html(" ");   
  confirmedit(edit_id,edit_name)
  $(this).html('<div class="spinner spinner-border spinner-border-sm"></div>');
  }
})

   ////// delete form final//////////
$("#confirmdel").click(function (){
  $(this).html('<div class="spinner spinner-border spinner-border-sm"></div>');
  var idd= $('#exampleModalLabel2').html();
  confirmdelf(idd)
})






function confirmedit(eid,ename){
  
  axios.post('/conedit',{evid:eid,evname:ename})
  .then(function (response){
    
    if(response.data == 1){
      $('.confirmedit').html('edit');
      // $('.als').html("edit successfully");
      // $('.als').removeClass('d-none');
      toastr.success("data update success");
      newpg()
      $('#editModal').modal('hide');
      $(".als").hide();
    }else{
      alert(" response dose not 1")
    }
     
  }).catch(function(){
    alert(" edit  not success")
  })

}



function confirmdelf(idd){

  // alert(idd)
  axios.post('/condel',{db:idd})
  .then(function (response){
    if(response.data == 1){
      newpg()
      $('.confirmdel').html('delete');
      setTimeout(function (){  
        $(".als").hide();
    },4000) 
    // $('.als').removeClass('d-none');
    toastr.success("data delete success");
    $('#exampleModal').modal('hide');
    }else{
      $('#exampleModal').modal('hide');
    
      alert("somthing wrong")
    }
    
  }).catch(function(){
    alert ('delete not successfully')
  })
}

