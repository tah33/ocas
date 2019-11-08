@extends('layouts.master')
@section('content')
    <div class="row"> 
        <div class="box">
        <a href="{{url('blocked-users')}}" class="btn btn-info">Blocked Users</a>
            <div class="box-body">
                <table class="table table-hover table-bordered" id="example2">
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
                                <a href="{{url('students',$student->id)}}" style="float: left;" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                   <form style="float: left;" action="{{url('students',$student->id)}}" method="post" onsubmit="return confirm('Are you sure you want to Block This Stuednt?');">
                                   	@csrf
                                   	@method('delete')
									<button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove-circle"></i></button>                                    	
                                   </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                    {{$students->links()}}

            </div>
        </div>
    </div>
    @stop