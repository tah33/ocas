@extends('layouts.master')
@section('master.content')
        <div class="box box-primary" style="width: 800px">
            <div class="box-body" >
              <center><a href="{{url('commons/create')}}" class="btn btn-primary btn-sm">Add Subject</a></center>
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
                    @foreach ($commons as $key => $common)
                        <tr>
                            <td style="text-align: center">{{ $key+1 }}</td>
                            <td style="text-align: center">{{ $common->subject->name }}</td>

                            <td style="text-align: center">
                                <form method="post" action="{{url('commons',$common->id)}}" onsubmit="return confirm('Are You sure? You want to delete this subject ')">
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
@stop
