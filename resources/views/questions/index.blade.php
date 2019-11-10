@extends('layouts.master')
@section('content')
<div class="row"> 
        <div class="box">
            <div class="box-body">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th style="text-align: center">No.</th>
                        <th style="text-align: center">Name</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($subjects as $key => $subject)
                        <tr>
                            <td style="text-align: center">{{ $key+1 }}</td>
                            <td style="text-align: left">{{ $subject->name }}</td>                            
                            <td style="text-align: center">
                            	<a href="{{url('questions/view',$subject->id)}}" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i></a>
                                <a href="{{url('questions/create',$subject->id)}}" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></a>
                                <a href="{{url('questions/edit',$subject->id)}}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    {{$subjects->links()}}
                </table>
            </div>
        </div>
    </div>
@stop