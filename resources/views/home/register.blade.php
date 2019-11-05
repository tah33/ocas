@extends('layouts.header')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{url('save-account')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" class="control-form" placeholder="Enter Name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input type="text" name="email" class="control-form" placeholder="Enter Email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input type="text" name="username" class="control-form" placeholder="Enter Username">
                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input type="password" class="control-form" placeholder="password" name="password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input type="password" class="control-form" placeholder="Confirm password" name="password_confirmation">
                <input type="number" class="control-form" placeholder="Enter Phone" name="phone">
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <select name="gender" class="control-form">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                @error('gender')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <select class="myselect control-form" name="id[]" style="width:500px;" multiple="multiple" data-placeholder="Select Your Interests Area">
                        @foreach($departments as $department)
                        <option value="{{$department->id}}">{{$department->name}}</option>
                        @endforeach
                </select>
                @error('id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                    <input type="file" name="image">
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
