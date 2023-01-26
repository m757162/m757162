<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>File upload</title>
</head>
<body>
    

<div class="container">
    <div class="row justify-contant-between bg-secondary">
        <div class="col-4">
            <input type="file" name="file" class="form-controll" id="myfile">
            <h4 id='par'></h4>
            <button class="btn btn-primary " id="bb" onclick="myfile()" >submit</button>
        </div>
        
        <div class="col-5">
       <table>
           <thead>
               <tr>
                   <th class="p-2">id</th>
                   <th class="p-2">action</th>
               </tr>
           </thead>
           <tbody id="data">
               
           </tbody>
       </table>
        </div>
    </div>
</div>





    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/axios.min.js')}}"></script>

   


    

<script type="text/javascript">

   
  
    getFileList();
    function getFileList(){
        axios.get('/getfile').then(function(response){
            let jsondata=response.data;
            $.each(jsondata,function(i){
                $('<tr>').html(
                   "<td>"+jsondata[i].id+"</td>"+
                   "<td><a href='download/"+jsondata[i].image_path+"' class='btn btn-info download' >download</a></td>"
                ).appendTo("#data")
            })
        }).catch(function(){
            alert("data get fail");
        })      
    }




    function myfile(){
       
        let mainfile=document.getElementById('myfile').files[0];
        let file_name=mainfile.name
        let file_size=mainfile.size
        let obfile=new FormData()
        obfile.append('filekey',mainfile)
        let config={
            headers:{"content-type":"multipart/form-data"},
            onUploadProgress:function(prograssEvent){
                let uploadprogeass=Math.round((prograssEvent.loaded*100)/prograssEvent.total)
                $("#par").html(uploadprogeass+"%");
            }
        }
       
        let url= "/myfilepost"
        axios.post(url,obfile,config)
        .then(function(response){
            if(response.status == 200){
               
                $("#par").html("upload succcess")
               setTimeout(function (){  
                    $("#par").html(" ")
                },4000) 
                
            }
            
        }).catch(function(){
            alert('not success');
        })
        document.getElementById('myfile').value='';
        
    }

</script>







</body>
</html>