<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


@if(Session::get('success'))
    {{Session::get('success')}}

 @endif

 @if(Session::get('fail'))

 {{Session::get('fail')}}

 @endif

 <h5>{{ $LoggedUserInfo['name']  }}</h5>

 <a href="/auth/logout">Logout</a>
     
    </div>
  </fieldset>
</form>
