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
            <center>
            <a href="{{url('blocked-students')}}" class="btn btn-success btn-sm">Blocked Students</a></center>
                <table id="search" class="table table-hover">
                    <caption>Students List</caption>
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
                                <a href="{{url('students',$student->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                <form action="{{url('students',$student->id)}}"  style="float: right; margin-left: -20px" method="post" onsubmit="return confirm('Are you sure you want to block this students')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-user-times"></i></button>
                                </form>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @stop


