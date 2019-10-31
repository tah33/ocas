@extends('layouts.header')
<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{url('verify')}}">
                        <input type="text" class="control-form" placeholder="email" name="login">
                        <input type="text" class="control-form" placeholder="password" name="password">
                    </form>
                
                        <button class="btn btn-primary">Submit</button>
                </div>
            </div>
</div>