<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action='/auth/save'  method="POST">
@csrf
@if(Session::get('success'))
    {{Session::get('success')}}

 @endif

 @if(Session::get('fail'))

 {{Session::get('fail')}}

 @endif

  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" value="{{ old('username') }}" name="username" placeholder="" class="input-xlarge">
        <span class="text-danger">@error('username'){{$message}} @enderror</span>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <span class="text-danger">@error('email'){{$message}} @enderror</span>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <span class="text-danger">@error('password'){{$message}} @enderror</span>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirmation" placeholder="" class="input-xlarge">
       
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success" type="submit">Register</button> <br> <br>
        <a href="/auth/login">login</a>
      </div>

     
    </div>
  </fieldset>
</form>
