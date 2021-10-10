
 

<h2>Login</h2>


<form method="POST" action="login_user">
{{--method_field('PUT')--}}
    @csrf
    <input type="text" name="username" placeholder></br>
    <input type="password" name="userpass" ></br>
    <button type="submit" >Login</button>
</form>