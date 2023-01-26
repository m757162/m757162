
$('form').on('submit',function (event){
    event.preventDefault();
    let data=$(this).serializeArray();
    let email =data[0]['value'];
    let psw =data[1]['value'];
     
    axios.post('log_check',{
        email:email,
        psw:psw
    }).then(function (response){
        if(response.status == 200 && response.data == 1){
            window.location.href= '/ahome';
            // toastr.success("data update success");
        }else{
            toastr.error("user not found");
        }
    }).catch(function (){
        toastr.error("user not found main");
    })

});
