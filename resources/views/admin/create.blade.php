@extends('layouts.master')
@section('backend.title', $title)

@section('master.content')
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Add Account</h3>
            </div>
            <div class="box-body">
                <form method="post" action="{{url('admins')}}">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <img src="{{url('icons/name.png')}}" alt="">
                                </div>
                                <input type="text" class="form-control" name="name" placeholder="Enter Name....">
                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong><font color="red">{{ $message }}</font></strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Username') }}</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user-o"></i>
                                </div>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username....">
                            </div>
                            @error('username')
                            <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name"
                               class="col-md-2 col-form-label text-md-right">{{ __('Email') }}</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email...">
                            </div>
                            @error('email')
                            <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm" style="margin-top:10px">Create</button>
                    <a class="btn btn-warning btn-sm" style="margin-top:10px" onclick="goBack()">Cancel</a>
                </form>

            </div>
        </div>
    </div>

@stop
