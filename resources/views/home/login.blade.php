@extends('layouts.header')
@if (session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
@endif
@if (session('warning'))
  <div class="alert alert-warning">
    {{ session('warning') }}
  </div>
@endif
@if (session('info'))
  <div class="alert alert-info">
    {{ session('info') }}
  </div>
  @endif
<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{url('verify')}}" method="post">
                    	@csrf
                        <input type="text" class="control-form" placeholder="Enter Email/Username" name="login">
                        <input type="password" class="control-form" placeholder="password" name="password">
                   <strong><font color="red">{{ Session::get('msg') }}</font></strong>
                        
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
</div>