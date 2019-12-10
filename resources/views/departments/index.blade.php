@extends('layouts.master')
@section('master.content')
    <style>
        div.dataTables_wrapper div.dataTables_filter input {
            width: 200px;
        }
    </style>
        <div class="box box-primary">
            <div class="box-body">
                <center><a href="{{url('departments/create')}}" style="margin: 10" class="btn btn-success btn-sm">Add
                        Department</a>
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
                                <a href="{{url('departments',$department->id)}}" class="btn btn-success btn-sm"><i
                                        class="fa fa-eye"></i></a>
                                <a href="{{url('departments/'.$department->id.'/edit')}}"
                                   class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <form style="float: right; margin-left: -15px"
                                      action="{{url('departments',$department->id)}}" method="post"
                                      onsubmit="return confirm('Are you sure you want to Remove This Department?');">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@stop
