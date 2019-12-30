@extends('layouts.base')
<link rel="shortcut icon" href="{{ asset('icons/login.png') }}"/>
@push('backend.css')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/login.css')}}">
@endpush


@section('backend.base.content')
    <div class="overflow">
        <div class="sidenav marin-login">
            <div class="login-main-text">
                <h2> <img src="{{ asset('images/hr.png') }}" alt="" width="50px">Application Login Page</h2>
                <p>Login to get access.</p>
            </div>
        </div>
        <div class="main">
            <div class="col-md-8">
                <div id='frame'>
                    <div class='search'><h1 id="sin">Sign In Here</h1>
                        <form method="POST" action="{{url('verify-login')}}">
                            @csrf
                            <div class="content">
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <input id="login" type="text"
                                               class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}"
                                               value="{{old('login')}}" name="login" placeholder="Enter UserName/Email">
                                        @if ($errors->has('login'))
                                            <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                        @endif
                                        @if ($message = Session::get('msg'))
                                            <strong style="color: red">{{ $message }}</strong>
                                        @endif
                                    </div>
                                    <div class="col-md-8">
                                        <input id="password" type="password"
                                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password" placeholder="Enter password">
                                        @if ($errors->has('password'))
                                            <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <p>Forgot Password? <a href="#" data-toggle="modal" data-target="#modal-reset">Click Here</a></p>
                                <p>Not Registered? <a href="{{url('students/create')}}">Register Now</a></p><p>
                                <a href="{{url('/')}}"><i class="fa fa-home"></i> Go Home</a></p>
                                <button type="submit"  class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
    @include('email.create')
@stop
