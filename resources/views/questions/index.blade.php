@extends('layouts.master')
@section('master.content')
    @push('backend.css')
        <link rel="stylesheet" href="{{URL::asset('assets/custom.css')}}">
    @endpush
    <div class="row subjects">
    @foreach($subjects as $subject)
        <a href="{{url('questions',$subject->id)}}" class="text-center subject">
            <div class="subject-card">
                <div class="subject-card-body">
                    <h5 class="subject-card-title"><b>{{$subject->name}}</b></h5><br>
                    <h5 class="subject-card-body"><b>({{$subject->slug}})</b></h5>
                </div>
            </div>
        </a>
    @endforeach
    </div>
@stop
