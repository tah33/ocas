@extends('layouts.master')
@section('backend.title', $title)
@section('master.content')
    <style>
        div.dataTables_wrapper div.dataTables_filter input {
            width: 200px;
        }

        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
        }
    </style>
    <div class="box box-primary">
        <div class="box-body">
            <div class="center">
                @if(Auth::guard('admin')->check())
                <a href="{{url('departments/create')}}" class="btn btn-success btn-sm">Add Department</a>
                   <div class="input-group margin"  style="margin: -30px 0 0 110px">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown">Excel
                            <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('departments-export')}}">Export</a></li>
                            <li class="divider"></li>
                            <li><a href="#" data-toggle='modal' data-target="#department-modal">Import</a></li>
                        </ul>
                    </div>
                </div>
                @endif
                @if(Auth::guard('student')->check())
                <a href="{{url('departments-export')}}" class="btn btn-danger btn-sm">Get Excel</a>
                @endif

                <div class="input-group margin"  @if(Auth::guard('admin')->check()) style="margin: -30px 0 0 180px" @else
                style="margin: -30px 0 0 80px" @endif>
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">PDF
                            <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('department-view')}}" target="_blank">View</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('department-download')}}">Download</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <table class="table table-hover search">
                <caption>Departments List</caption>
                <thead>
                <tr>
                    <th style="text-align: center">No.</th>
                    <th style="text-align: center">Name</th>
                    <th style="text-align: center">Short Name</th>
                    <th style="text-align: center">Minimum Marks Required</th>
                    <th style="text-align: center">Logo</th>
                    <th style="text-align: center;width: 13%">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($departments as $key => $department)
                    <tr>
                        <td style="text-align: center">{{ $key+1 }}</td>
                        <td style="text-align: left">{{ $department->name }}</td>
                        <td style="text-align: left">{{ $department->slug }}</td>
                        <td style="text-align: center">{{ $department->minimum }}</td>
                        <td style="text-align: center"><img src="{{'images/department/'.$department->logo}}"
                          alt="department logo" height="50px" width="50px"></td>
                        <td style="text-align: center">
                            <a href="{{url('departments',$department->id)}}" class="btn btn-success btn-sm"><i
                                    class="fa fa-eye"></i></a>
                            @if(Auth::guard('admin')->check())
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
                                @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('excel.department-modal')
@stop

