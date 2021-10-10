
<h1>Add Member</h1>
@if(session('user'))
<h3 style="color:green;">{{session('user')}} has been added </h3>
@endif
<form action="addmember" method="POST">
     @csrf
    <input type="text" name="uname"><br> <br>

    <input type="text" name="uemail"><br> </br>

    <input type="password" name="upass"><br> <br>
<button type="submit">Add</button>
</form>