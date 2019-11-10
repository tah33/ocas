<!DOCTYPE html>
<html>
<head>
   <title>login</title>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/log.css')}}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>

<div class="sidenav">
         <div class="login-main-text">
            <h2>Application<br> Login Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-7">
            <div id='frame'>
               <div class='search'><h1>Sign In Here</h1>
                  <form method="POST" action="{{url('verify-login')}}">
                    @csrf
                     <div class="content"> 
                      <div class="col-md-8">
                                <input id="login" type="text" class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}" value="{{old('login')}}" name="login" placeholder="Enter UserName/Email">
                                @if ($errors->has('login'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                       <div class="col-md-8">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>                               
                                @endif
                            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
                      
                      </div>
                  </form>
               </div>
            </div>  
                                
         </div> 
      </div>
      </body>
</html>
