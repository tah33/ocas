@extends('layouts.master')
@section('master.content')
@if ($message= Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
<style>
        div.dataTables_wrapper div.dataTables_filter input{
            width: 238px;
        }
    </style>
    <div class="row"> 
        <div class="box">
            <div class="box-body">
                <!-- <a href="{{url('departments/create')}}" style="margin-right: 10px" class="btn btn-success btn-sm">Add Department</a> -->
                <table id="search" class="table table-striped" style="width:100%">           
                    <caption>Departments List</caption>
                    <thead>
                    <tr >
                        <th style="text-align: center">No.</th>
                        <th style="text-align: center">Name</th>
                        <th style="text-align: center">Short Name</th>
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
                            <td style="text-align: left">{{ $department->slug }}</td>
                            <td style="text-align: center">{{ $department->minimum }}</td>
                            <td style="text-align: center">
                                <a href="{{url('departments',$department->id)}}" style="float: left;" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                <a href="{{url('departments/'.$department->id.'/edit')}}" style="float: left;" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                                <form style="float: left;" action="{{url('departments',$department->id)}}" method="post" onsubmit="return confirm('Are you sure you want to Remove This Department?');">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove-circle"></i></button>                                     
                                   </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    {{$departments->links()}}
                </table>
            </div>
        </div>
    </div>
@stop