@extends('layouts.master')
@section('master.content')
    <div class="box box-primary" style="width: 800px">
        <div class="box-body">
            <center>
                <a href="{{url('subjects/create')}}" class="btn btn-success btn-sm">Add Subject</a></center>
            <table id="search" class="table table-hover">
                <caption>Subject List</caption>
                <thead>
                <tr>
                    <th style="text-align: center">No.</th>
                    <th style="text-align: center">Name</th>
                    <th style="text-align: center; width: 15%">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($subjects as $key => $subject)
                    <tr>
                        <td style="text-align: center">{{ $key+1 }}</td>
                        <td style="text-align: left">{{ $subject->name }}</td>

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
@stop
