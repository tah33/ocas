@extends('layouts.master')
@section('master.content')
    <style>
        div.dataTables_wrapper div.dataTables_filter input{
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
        <form method="post" action="{{url('particular-activity')}}">@csrf
            <div class="form-group row">
                                <div class="col-md-4">
                                <strong>From:</strong>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input id="name" type="date"
                                               class="form-control{{ $errors->has('start_date') ? ' is-invalid' : '' }}"
                                               name="start_date" value="{{ old('start_date') }}"
                                               placeholder="Enter Department Name">
                                    </div>
                                    @error('start_date')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                </div>
                                <div class="col-md-4">
                                <strong>To:</strong>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input id="end_date" type="date"
                                               class="form-control{{ $errors->has('end_date') ? ' is-invalid' : '' }}"
                                               name="end_date" value="{{ old('end_date') }}" placeholder="Enter Short Name">
                                    </div>
                                    @error('end_date')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                </div>
                            </div>
       <input  name="" type="submit" value="Get Reports" target="_blank" class="btn btn-danger btn-sm btn-flat" style="margin-top:10px">
        </form>    
        </div>
    </div>
   
    <div class="row">
        <div class="box">
            <div class="box-body">
                <table id="search" class="table table-hover">
                    <caption>Students Login & Logout Time</caption>
                    <thead>
                    <tr>
                        <th style="text-align: center">No.</th>
                        <th style="text-align: center">Name</th>
                        <th style="text-align: center">UserName</th>
                        <th style="text-align: center">Email</th>
                        <th style="text-align: center">Login Time</th>
                        <th style="text-align: center">Logout Time</th>
                        <th style="text-align: center">Date</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($activities as $key => $activity)
                        <tr>
                            <td style="text-align: center">{{ $key+1 }}</td>
                            <td style="text-align: center">{{ $activity->student->name }}</td>
                            <td style="text-align: center">{{ $activity->student->username }}</td>
                            <td style="text-align: center">{{ $activity->student->email }}</td>
                            <td style="text-align: center">{{ $activity->login_time }}</td>
                            <td style="text-align: center">{{ $activity->logout_time ? $activity->logout_time : "Active" }}</td>
                            <td style="text-align: center">{{Carbon\Carbon::parse($activity->created_at)->format('M d, Y')  }}</td>
                            <td style="text-align: center">
                                <a href="{{url('students',$activity->student->id)}}" class="btn btn-primary btn-flat btn-sm"><i class="fa fa-eye"></i> View</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
