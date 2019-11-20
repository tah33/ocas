@extends('layouts.master')
@section('master.content')
<style>
       div.dataTables_wrapper div.dataTables_filter input{
            width: 200px;
        }
</style>
    <div class="row"> 
        <div class="box">
            <div class="box-body">
                <center> <a href="{{url('departments/create')}}" style="margin: 10" class="btn btn-success btn-sm">Add Department</a>
                    <a href="#" class="btn btn-primary btn-sm">PDF </a>
                </center>
                <table id="search" class="table table-hover">           
                    <caption>Departments List</caption>
                    <thead>
                    <tr>
                        <th style="text-align: center">No.</th>
                        <th style="text-align: center">Name</th>
                        <th style="text-align: center">Short Name</th>
                        <th style="text-align: center">Minimum Marks Required</th>
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
                </table>
            </div>
        </div>
    </div>
@stop