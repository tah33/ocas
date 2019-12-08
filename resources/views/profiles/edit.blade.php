@extends('layouts.master')
@section('master.content')
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Update Profile Info</h3>
            </div>
            <div class="box-body">
                <form method="post" action="{{url('profiles',$user->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <input id="name" type="text" class="form-control "
                                       name="name" value="{{ $user->name }}" autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Email') }}</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                    <input id="email" type="text"
                                           class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ $user->email }}" autocomplete="requirements">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('UserName') }}</label>
                            <div class="col-md-6">
                            <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input id="username" type="text"
                                           class="form-control @error('username') is-invalid @enderror"
                                           name="username" value="{{ $user->username }}" autocomplete="requirements">
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @if(Auth::guard('student')->check())
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-2 col-form-label text-md-right">{{ __('Phone') }}</label>
                                <div class="col-md-6">
                                    <input id="phone" type="text"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           name="phone" value="{{ $user->phone }}" autocomplete="requirements">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-2 col-form-label text-md-right">{{ __('Gender') }}</label>
                                <div class="col-md-6">
                                    <select name="gender" id=""
                                            class="form-control @error('gender') is-invalid @enderror">
                                        <option value="{{$user->gender}}">{{$user->gender}}</option>
                                        @if($user->gender == 'male')
                                            <option value="female">Female</option>
                                        @else
                                            <option value="male">Male</option>
                                        @endif
                                    </select>
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-2 col-form-label text-md-right">{{ __('Address') }}</label>
                                <div class="col-md-6">
                                    <input id="address" type="text"
                                           class="form-control @error('address') is-invalid @enderror"
                                           name="address" value="{{ $user->address }}" autocomplete="requirements">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-2 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                                <div class="col-md-6">
                                    <input id="dob" type="date"
                                           class="form-control @error('dob') is-invalid @enderror"
                                           name="dob" value="{{ $user->dob }}" autocomplete="requirements">
                                    @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-2 col-form-label text-md-right">{{ __('Departments') }}</label>
                                <div class="col-md-6">
                                    <select name="id[]" class="form-control @error('dob') is-invalid @enderror select2"
                                            multiple="multiple">
                                        @foreach(Auth::guard('student')->user()->departments as $department)
                                            <option value="{{$department->id}}"
                                                    selected="selected">{{$department->name}}</option>
                                        @endforeach
                                        @foreach($departments as $department)
                                            <option value="{{$department->id}}">{{$department->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 input-group control-group">
                                <input type="file" name="image"
                                       class="form-control @error('image') is-invalid @enderror" accept="image/*">

                            </div>
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                            @enderror
                        @endif
                        <button type="submit" class="btn btn-success btn-sm" style="margin-top:10px">Update</button>
                        <a class="btn btn-warning btn-sm" style="margin-top:10px" href="{{url('home')}}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
