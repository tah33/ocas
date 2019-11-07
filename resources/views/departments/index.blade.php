@extends('layouts.master')
@section('content')
    <div class="row"> 
        <div class="box" style="width: 1200px">
            <div class="box-body">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th style="text-align: center">No.</th>
                        <th style="text-align: center">Name</th>
                    </tr>
                    </thead>
                    <tbody align="center">
                    @foreach ($departments as $key => $department)
                        <tr>
                            <td style="text-align: center">{{ $key+1 }}</td>
                            <td style="text-align: center">{{ $department->name }}</td>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop