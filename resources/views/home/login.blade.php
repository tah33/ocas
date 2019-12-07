@extends('layouts.base')
@push('backend.css')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/log.css')}}">
@endpush
@section('backend.base.content')
<div class="overflow">
<div class="sidenav" marin-login>
         <div class="login-main-text ">
            <h2>Application<br> Login Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-8">
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
                                @if ($message = Session::get('msg'))
                                <strong>{{ $message }}</strong>
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
      </div>
@stop
