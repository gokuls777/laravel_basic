<h2>User Login </h2>
@if($errors->any())
@foreach($errors->all() as $err)

<li color="red">{{$err}}</li>

@endforeach
@endif

<form action="htmlload" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter userid" /> 
    <span style="color:red;">@error('username'){{$message}}@enderror</span> <br>
    <input type="password" name="userpass" placeholder="enter user password" />
    <span style="color:red;">@error('userpass'){{$message}}@enderror</span> <br>
     <br>

<button type="submit">Submit</button>
</form>


