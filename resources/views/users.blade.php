<x-header data="Users" />

<h2>Users Page {{10+10}} </h2>

@if($users == "anil")
    <h3> Hi {{$users}} </h3>
    @elseif($users == "sam") 
    <h3> Hi {{$users}} </h3>
    @else
    <h3> User Unknown </h3>  
   @endif


@for($i=0;$i < 10;$i++)
    <h3>{{$i}}</h3>

@endfor


@foreach($users as $usr)
<h2>{{$usr}}</h2>
@endforeach

<hr>



