@extends('layouts.master')
@section('backend.title', $title)
@section('master.content')
    @push('backend.css')
        <link rel="stylesheet" href="{{URL::to('css/test.css')}}">
    @endpush
    <style>

    </style>
    <div class="box box-primary">
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
                        <td style="text-align: left">{{ $subject->name }} @if($subject->commons()->exists()) (Common) @endif</td>
                        <td style="text-align: center"><img src="{{url('images/subjects/'.$subject->logo)}}"
                                                     alt="Subject Logo" height="50px" width="50px"></td>
                        @if(Auth::guard('admin')->check())
                        <td>
                            <form action="{{url('commons',$subject->id)}}" method="post" style="display: inline">
                                @csrf
                                @method('put')
                                <label class="checkbox-container">
                                    <input type="checkbox" @if($subject->commons()->exists()) checked  onclick="return confirm('Are you sure you want to remove as Common?');"
                                           @else onclick="return confirm('Are you sure you wan to select as Common?');" @endif name="common" class="input-checkbox" value="{{$subject->id}}" onchange="this.form.submit()">
                                    <div class="checkbox-wrap">Select as Common </div>
                                </label>
                            </form>
                            <div style=" margin: -30px 0 0 150px">
                        <a href="{{url('subjects/'.$subject->id.'/edit')}}"
                               class="btn btn-warning btn-sm btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <form style="display: inline"
                                  action="{{url('subjects',$subject->id)}}" method="post"
                                  onsubmit="return confirm('Are you sure you want to Remove This Subjects?');">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-trash-o"></i> Delete
                                </button>
                            </form>
                            </div>
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
