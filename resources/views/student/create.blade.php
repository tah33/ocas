@extends('layouts.base')
@section('backend.title','Registration')
@push('backend.css')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/log.css')}}">
@endpush
@section('backend.base.content')
    <div class="overflow">
        <div class="sidenav marin-login" style="background-color:black;">
            <div class="login-main-text">
                <ul>
                    <h3>
                        <li class="tick">To find out a suitable career</li>
                        <br>
                        <li class="tick">To know Your Strength</li>
                        <br>
                        <li class="tick">To Judge Yourself</li>
                        <br>
                    </h3>
                </ul>
                <h3 style="margin-left: 40px">Register Now!</h3>
            </div>
        </div>
        <div class="main" style="margin-top: -90px">
            <div class="col-md-8">
                <div id='frame'>
                    <div class='search'><h1>Registration Here</h1>
                        <form method="POST" action="{{url('students')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="content">
                                <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           value="{{old('name')}}" name="name" placeholder="Enter Name">
                                    @if ($errors->has('name'))
                                        <span style="color : red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <input id="email" type="text"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           value="{{old('email')}}" name="email" placeholder="Enter Email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" style="font-color : red" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif

                                </div>
                                <div class="col-md-6">
                                    <input id="username" type="text"
                                           class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                           value="{{old('username')}}" name="username" placeholder="Enter UserName">
                                    @if ($errors->has('username'))
                                        <span style="color : red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" placeholder="Enter password">
                                    @if ($errors->has('password'))
                                        <span style="color : red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                           name="password_confirmation" placeholder="Confirm Password">
                                </div>
                                <div class="col-md-6">
                                    <input id="phone" type="tel"
                                           class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                           name="phone" placeholder="Enter Phone">
                                    @if ($errors->has('phone'))
                                        <span style="color : red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6 float:left">
                                    <select name="id[]"
                                            class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }} select2"
                                            data-placeholder="Select Departments" multiple="multiple">
                                        @foreach($departments as $department)
                                            <option value='{{$department->id}}'>{{$department->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id'))
                                        <span style="color : red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <select name="gender"
                                            class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}">
                                        <option>Select Gender</option>
                                        <option value='male'>Male</option>
                                        <option value='female'>Female</option>
                                    </select>
                                    @if ($errors->has('gender'))
                                        <span style="font-color : red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <input id="dob" type="date"
                                           class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob"
                                           placeholder="Enter password">
                                    @if ($errors->has('dob'))
                                        <span style="color : red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <input id="address" type="text"
                                           class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                           name="address" placeholder="Enter Address">
                                    @if ($errors->has('address'))
                                        <span style="color : red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <input type="file" name="image">
                                </div>
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
