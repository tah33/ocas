@extends('layouts.master')
@section('master.content')
    @push('backend.css')
        <link rel="stylesheet" href="{{URL::to('assets/custom.css')}}">
    @endpush

<div class="row">
@foreach($subjects as $subject)
<a href="{{url('questions',$subject->id)}}"><div class="card">
  <div class="container">
    <h4><b>{{$subject->name}}</b></h4>
  </div>
</div>
</a>
@endforeach
</div>
@stop
