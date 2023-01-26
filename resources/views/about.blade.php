{{-- <h1>wellcome about page</h1>


<a href="{{url('/')}}">home</a>
<a href="{{url('about')}}">about</a>
<a href="{{url('contact')}}">contact</a> --}}


{{-- @for ($i = 1; $i < $count+1; $i++)


@endfor    --}}
{{ $acounts=count($data1) }}
@for ($i = 1; $i < $acounts+1; $i++)
    {{$i}}
    @endfor
<select >
   
@foreach ($data1 as $data2)
    
<option value='{{$data2}}'> {{ $data2 }}</option> 
 @endforeach 

 </select>

{{-- @forelse ($data1 as $data2)
     {{ $data2 }}
@empty
    <p>no data availble</p>
@endforelse --}}