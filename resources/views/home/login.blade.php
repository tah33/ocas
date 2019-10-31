@extends('layouts.header')
<div class="container">
            <div class="row">
                <div class="col-md-6">
                	 <strong><font color="red">{{ Session::get('msg') }}</font></strong>
                    <form action="{{url('verify')}}" method="post">
                    	@csrf
                        <input type="text" class="control-form" placeholder="email" name="login">
                        <input type="password" class="control-form" placeholder="password" name="password">
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
</div>