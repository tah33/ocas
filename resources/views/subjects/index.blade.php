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
    <div class="box box-primary" style="width: 800px">
        <div class="box-body">
            <div class="center">
                 @if(Auth::guard('admin')->check())
                <a href="{{url('subjects/create')}}" style="margin-left: 20px" class="btn btn-success btn-sm">Add Subject</a>
                   <div class="input-group margin"  style="margin: -30px 0 0 110px">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown">Excel
                            <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('subjects-export')}}">Export</a></li>
                            <li class="divider"></li>
                            <li><a href="#" data-toggle='modal' data-target="#subject-modal">Import</a></li>
                        </ul>
                    </div>
                </div>
                <div class="input-group margin" style="margin: -30px 0 0 180px">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">PDF
                            <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('subject-view')}}" target="_blank">View</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('subject-download')}}">Download</a></li>
                        </ul>
                    </div>
                </div>
                @else
                <div class="input-group margin"  style="margin: -10px 0 0 110px">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">PDF
                            <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('subject-view')}}" target="_blank">View</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('subject-download')}}">Download</a></li>
                        </ul>
                    </div>
                </div>
                @endif

            </div>
            <table id="search" class="table table-hover">
                <caption>Subject List</caption>
                <thead>
                <tr>
                    <th style="text-align: center">No.</th>
                    <th style="text-align: left">Name</th>
                    <th style="text-align: center">Logo</th>
                    @if(Auth::guard('admin')->check())
                    <th style="text-align: center; ">Action</th>
                        @endif
                </tr>
                </thead>
                <tbody>
                @foreach ($subjects as $key => $subject)
                    <tr>
                        <td style="text-align: center">{{ $key+1 }}</td>
                        <td style="text-align: left">{{ $subject->name }}</td>
                        <td style="text-align: center"><img src="{{url('images/subjects/'.$subject->logo)}}"
                                                     alt="Subject Logo" height="50px" width="50px"></td>
                        @if(Auth::guard('admin')->check())
                        <td>
                        <a href="{{url('subjects/'.$subject->id.'/edit')}}"
                               class="btn btn-warning btn-sm btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <form style="float: right; margin-left: -55px" 
                                  action="{{url('subjects',$subject->id)}}" method="post"
                                  onsubmit="return confirm('Are you sure you want to Remove This Subjects?');">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-trash-o"></i> Delete
                                </button>
                            </form>
                        </td>
                            @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('excel.subject-modal')
@stop
