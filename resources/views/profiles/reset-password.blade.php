@extends('layouts.master')
@section('master.content')
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Update Password</h3>
            </div>
            <div class="box-body">
                <form method="post" action="{{url('reset-password',$user->id)}}">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Old Password') }}</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-eye-slash"></i>
                                </div>
                                <input type="password" class="form-control" name="old" placeholder="Old Password...">
                            </div>
                            @error('old')
                                <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                                @enderror
                                <div style="color: red">{{Session::get('error')}}</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('New Password') }}</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-eye-slash"></i>
                                </div>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password" placeholder="Change Password">
                            </div>
                            @error('password')
                                <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name"
                               class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-eye-slash"></i>
                                </div>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" placeholder="Confirm Password...">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm" style="margin-top:10px">Update</button>
                    <a class="btn btn-warning btn-sm" style="margin-top:10px" href="{{url('home')}}">Cancel</a>
                </form>

            </div>
        </div>
    </div>

@stop
