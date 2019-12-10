@extends('layouts.master')
@section('master.content')
    <div class="box box-primary">
        <div class="box-body">
            <center><a href="{{url('students')}}" class="btn btn-success btn-sm">Students</a></center>
            <table id="search" class="table table-hover table-bordered">
                <caption>Blocked Users List</caption>
                <thead>
                <tr>
                    <th style="text-align: center">No.</th>
                    <th style="text-align: center">Name</th>
                    <th style="text-align: center">Username</th>
                    <th style="text-align: center">Email</th>
                    <th style="text-align: center">Phone</th>
                    <th style="text-align: center">Gender</th>
                    <th style="text-align: center">Action</th>
                </tr>
                </thead>
                <tbody align="center">
                @foreach ($students as $key => $student)
                    <tr>
                        <td style="text-align: center">{{ $key+1 }}</td>
                        <td style="text-align: center">{{ $student->name }}</td>
                        <td style="text-align: center">{{ $student->username }}</td>
                        <td style="text-align: center">{{ $student->email }}</td>
                        <td style="text-align: center">{{ $student->phone }}</td>
                        <td style="text-align: center">{{ $student->gendername }}</td>
                        <td style="text-align: center">
                            <a href="{{url('unblock',$student->id)}}" class="btn btn-success btn-sm"
                               onclick="return confirm('Are you sure you want to unblock This Student?');"><i
                                    class="fa fa-check"></i></a>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@stop
