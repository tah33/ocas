@extends('layouts.master')
@section('master.content')
<div class="row"> 
        <div class="box">
            <div class="box-body" >
                <center>
                <a href="{{url('subjects/create')}}" class="btn btn-success btn-sm">Add Subject</a></center>
                <table id="search" class="table table-hover">
                    <caption>Subject List</caption>
                    <thead>
                    <tr>
                        <th style="text-align: center">No.</th>
                        <th style="text-align: center">Name</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($subjects as $key => $subject)
                        <tr>
                            <td style="text-align: center">{{ $key+1 }}</td>
                            <td style="text-align: left">{{ $subject->name }}</td>
                          
                            <td style="text-align: center">
                                <a style="float: left;" href="{{url('subjects/'.$subject->id.'/edit')}}" class="btn btn-success btn-sm" ><i class="glyphicon glyphicon-pencil"></i></a>
                                
                                <form method="post" action="{{url('subjects',$subject->id)}}" style="float: left;" onsubmit="return confirm('Are You sure? You want to delete this question ')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop