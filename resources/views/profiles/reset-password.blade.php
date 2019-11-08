@extends('layouts.master')
@section('content')
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Update Password</h3>
            </div>
            <div class="box-body">
                <form method="post" action="{{url('reset-password',$user->id)}}">
                    @csrf
<div class="form-group">
    <input  type="password" class="form-control" name="old" placeholder="Old Password...">
    @error('old')
    <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
    @enderror
    <font color="red">{{Session::get('error')}}</font>
</div>
<div class="form-group">
    <input id="password" type="password"
           class="form-control @error('password') is-invalid @enderror"
           name="password" placeholder="Change Password">
    @error('password')
    <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
    @enderror
</div>
<div class="form-group">
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password...">
</div>
    <button type="submit" class="btn btn-success" style="margin-top:10px">Update</button>
    <a class="btn btn-warning" style="margin-top:10px" href="{{url('home')}}">Cancel</a>
</form>
</div>
</div>
</div>
@stop
