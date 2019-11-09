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
                        <th style="text-align: center">Minimum Marks Required</th>
                        <!-- <th style="text-align: center">Condition 1</th> -->
                        <!-- <th style="text-align: center">Condition 2</th> -->
                        <th style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($departments as $key => $department)
                        <tr>
                            <td style="text-align: center">{{ $key+1 }}</td>
                            <td style="text-align: left">{{ $department->name }}</td>
                            <td style="text-align: center">{{ $department->minimum }}</td>
                            
                            <td style="text-align: center">
                                <a href="{{url('departments',$department->id)}}" style="float: left;" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                <a href="{{url('departments',$department->id)}}" style="float: left;" class="btn btn-info"><i class="fa fa-pencil"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                    {{$departments->links()}}
                </table>
            </div>
        </div>
    </div>
@stop