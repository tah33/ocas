@extends('layouts.header')
<div class="container">
    <div class="row">
        <div class="col-md-6">
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
                <select class="myselect" name="state">
                    <option value="AL">Alabama</option>
                    ...
                    <option value="WY">Wyoming</option>
                </select>
                    <input type="file" name="image">
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
