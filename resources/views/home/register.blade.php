@extends('layouts.header')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <style>
                .alert {
                    background: slategray;
                    color: #fff;
                    padding: 20px;
                    margin-bottom: 20px;
                }
            </style>
                @if(!empty($msg))
                    <div class="alert alert-success"> {{ $msg }} <a href="{{'approve'}}">Click Here to approve</a></div>
                @endif
            <form action="{{url('save-account')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" class="control-form" placeholder="Enter Name">
                <input type="text" name="email" class="control-form" placeholder="Enter Email">
                <input type="text" name="username" class="control-form" placeholder="Enter Username">
                <input type="password" class="control-form" placeholder="password" name="password">
                <input type="number" class="control-form" placeholder="Enter Phone" name="phone">
                <select name="gender" >
                    <option value="" class="control-form">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <select class="myselect control-form" name="id[]" style="width:500px;" multiple="multiple">
                    <option value="">Pick your favourite subjects </option>
                        @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                        @endforeach
                </select>
                    <input type="file" name="image">
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
