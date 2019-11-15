@extends('layouts.master')
@section('master.content')
    <div class="row"> 
        <div class="box">
        <div class="box-body">
            <center>
            <a href="{{url('blocked-students')}}" class="btn btn-success btn-sm">Blocked Students</a></center>
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
                        <th style="text-align: center">Image</th>
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
                            <td style="text-align: center">{{ $student->gender }}</td>
                            <td style="text-align: center"><img src="{{asset('images/'.$student->image)}}" width="80px" height="42px"></td>
                            <td style="text-align: center">
                                <a href="{{url('students',$student->id)}}" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i></a>
                                <form action="{{url('students',$student->id)}}" style="float:right;" method="post" onsubmit="return confirm('Are you sure you want to block this students')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i></button>
                                </form>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                    {{$students->links()}}
            </div>
        </div>
    </div>
    @stop


