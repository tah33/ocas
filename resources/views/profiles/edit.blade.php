@extends('layouts.master')
@section('master.content')
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Update Profile Info</h3>
                </div>
                <div class="box-body">
                    <form method="post" action="{{url('profiles',$user->id)}}" enctype="multipart/form-data">
                        @csrf
                     @method('put')
                        <div class="form-group">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ $user->name }}" autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="email" type="text"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ $user->email }}" autocomplete="requirements">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="username" type="text"
                                   class="form-control @error('username') is-invalid @enderror"
                                   name="username" value="{{ $user->username }}" autocomplete="requirements">
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                            @enderror
                        </div>
                        @if(Auth::guard('student')->check())
                        <div class="form-group">
                            <input id="phone" type="text"
                                   class="form-control @error('phone') is-invalid @enderror"
                                   name="phone" value="{{ $user->phone }}" autocomplete="requirements">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="gender" type="text"
                                   class="form-control @error('gender') is-invalid @enderror"
                                   name="gender" value="{{ $user->gender }}" autocomplete="requirements">
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="address" type="text"
                                   class="form-control @error('address') is-invalid @enderror"
                                   name="address" value="{{ $user->address }}" autocomplete="requirements">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="dob" type="date"
                                   class="form-control @error('dob') is-invalid @enderror"
                                   name="dob" value="{{ $user->dob }}" autocomplete="requirements">
                            @error('dob')
                            <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-lg-12 input-group control-group increment">
                            <input type="file" name="image"
                                   class="form-control @error('image') is-invalid @enderror" accept="image/*">

                        </div>
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                        @enderror
                        @endif
                        <button type="submit" class="btn btn-success" style="margin-top:10px">Update</button>
                        <a class="btn btn-warning" style="margin-top:10px" href="{{url('home')}}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
@endsection
