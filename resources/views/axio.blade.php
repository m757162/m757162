
 
        <input type="text" id="id" class="form-control mt-3" placeholder="id"><br><br>
        <input type="text" id="name" class="form-control mt-3" placeholder="Name"><br><br>
  
    
        <input type="email" id="email" class="form-control mt-3" placeholder="Email"><br><br>
 
        <textarea class="form-control mt-3" name="" id="details" cols="100" rows="6" placeholder="Right somthing...."></textarea><br><br>
 
        <button class="btn form-control btn-info mt-3" onclick="submitt()">submit </button>     
        <table>
        //@foreach ($axiosdata as $record)
                <tr>
                        {{--  {{$record->name}}  --}}
                        <td id='vv'></td>

                </tr>
       // @endforeach
</table>




 <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
 <script type="text/javascript" src="{{asset('js/custom.js')}}"></script> 
 <script type="text/javascript" src="{{asset('js/axios.min.js')}}"></script> 
<script type="text/javascript"  src="{{asset('js/bootstrap.min.js')}}"></script> 
<script>

        

        var url='/axiosdata';
  
    axios.get(url)

    .then(function(data){
        $.ajax({
      $('#vv').html(data)
        });
    })
    .catch(function(error){
      alert('not working')
    })

</script>
