@extends('layouts.master')
@section('content')
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
@if(!empty($subjects))
<div class="box box-info">
            	<caption>Condition To Enroll</caption>
            <div class="box-body">
            	 <div class="card" style="width: 30rem;">
            <ul class="list-group list-group-flush ul">
                <li class="list-group-item">@foreach($subjects as $key=>$subject)
                						{{$key+1}}.	{{$subject->name}}
                							@endforeach >= {{$department->condition->total}}
                </li>
            </ul>
      			 
            </div>
        </div>
    </div>
        @endif
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
        @endif
</div>

@stop