@extends('layouts.master')
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
                @endif
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
            </div>
            <table id="search" class="table table-hover">
                <caption>Subject List</caption>
                <thead>
                <tr>
                    <th style="text-align: center">No.</th>
                    <th style="text-align: left">Name</th>
                    <th style="text-align: center">Logo</th>
                    <th style="text-align: center; width: 15%">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($subjects as $key => $subject)
                    <tr>
                        <td style="text-align: center">{{ $key+1 }}</td>
                        <td style="text-align: left">{{ $subject->name }}</td>
                        <td style="text-align: center"><img src="{{url('images/subjects/'.$subject->logo)}}"
                                                     alt="Subject Logo" height="50px" width="50px"></td>

                        <td style="text-align: center">
                            <a href="{{url('subjects/'.$subject->id.'/edit')}}"
                               class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                            <form method="post" action="{{url('subjects',$subject->id)}}"
                                  style="float: right;"
                                  onsubmit="return confirm('Are You sure? You want to delete this question ')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm"><i
                                        class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('excel.subject-modal')
@stop
