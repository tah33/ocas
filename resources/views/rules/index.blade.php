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
                        <th style="text-align: center">Department Name</th>
                        <th style="text-align: center">Subject Name</th>
                        <th style="text-align: center">Subject Range</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tbody align="center">
                    @foreach ($rules as $key => $rule)
                        <tr>
                            <td style="text-align: center">{{ $key+1 }}</td>
                            <td style="text-align: center">{{ $rule->name }}</td>
                            <td style="text-align: center">{{ $rule->username }}</td>
                            <td style="text-align: center">{{ $rule->range }}</td>
                            <td style="text-align: center">
                                <a href="{{url('rules',$student->id)}}" style="float: left;" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                <a href="{{url('rules',$student->id)}}" style="float: left;" class="btn btn-success"><i class="fa fa-perncil"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                    {{$rules->links()}}

            </div>
        </div>
    </div>
    @stop