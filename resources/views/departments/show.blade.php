@extends('layouts.master')
@section('master.content')
<div class="col-md-6">
        <div class="box box-primary">
            	<caption>Department Info</caption>
            <div class="box-body" >
            	 <div class="card" style="width: 30rem;">
            <ul class="list-group list-group-flush ul">
                <li class="list-group-item"><b>Name</b> : {{$department->name}}</li>
                <li class="list-group-item"><b>Minimum Marks Require</b> : {{$department->minimum}}</li>
            </ul>
      			 
            </div>
        </div>
</div>
       @if(!empty($subject))
<div class="box box-warning">
                <caption>Condition To Enroll</caption>
            <div class="box-body">
                 <div class="card" style="width: 30rem;">
            <ul class="list-group list-group-flush ul">
                <li class="list-group-item"><b>Subject Name</b> : {{$subject->name}}</li>
                <li class="list-group-item"><b>Minimum Marks Required</b> : {{$department->range}}</li>
            </ul>
                 
            </div>
        </div>
    </div>
        @endif
@if(!empty($subjects))
<div class="box box-info">
            	<caption>Condition To Enroll</caption>
            <div class="box-body">
            	 <div class="card" style="width: 30rem;">
            <ul class="list-group list-group-flush ul">
                @foreach($subjects as $key=>$subject)
                <li class="list-group-item"><b>{{$key+1}}</b>.	{{$subject->name}}
                </li>
                @endforeach
                <li class="list-group-item"><b>Mimimum Marks Required</b> : {{$department->condition->total}}</li> 
            </ul>
      			 
            </div>
        </div>
    </div>
        @endif
 
</div>
<a href="{{url('departments/'.$department->id.'/edit')}}" class="btn btn-primary">Edit Info</a>
@stop