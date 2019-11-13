@extends('layouts.master')
@section('master.content')
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
  height: 20%;
  float: left;
  margin: 5px 15px;
  background-color: white 
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  background-color: navy

}
.container {
  padding: 15px;
}
</style>
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
