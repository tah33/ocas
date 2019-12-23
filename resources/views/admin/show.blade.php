@extends('layouts.master')
@section('backend.title', $title)
@section('master.content')
    <div class="col-md-6">
        <div class="box box-primary">
            <caption>User Profile</caption>
            <center>

                <div class="card" style="width: 30rem;">
                    <img class="card-img-top" width="50%" src="{{asset('images/avatar.png')}}" class="img-circle">
                    <div class="card-body">
                        <h5 class="card-title">{{$admin->name}} Profile</h5>
                    </div>
                    <ul class="list-group list-group-flush ul">
                        <li class="list-group-item">Name : {{$admin->name}}</li>
                        <li class="list-group-item">Email : {{$admin->email}}</li>
                        <li class="list-group-item">UserName : {{$admin->username}}</li>
                        </li>
                    </ul>
                </div>
            </center>
        </div>
    </div>
@endsection
