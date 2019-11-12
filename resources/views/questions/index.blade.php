@extends('layouts.master')
@section('master.content')
<div class="row"> 
        <div class="box">
            <div class="box-body">
                <table class="table table-hover table-bordered">
                    <caption>Subjects List</caption>
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
                            	<a href="{{url('questions',$subject->id)}}" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    {{$subjects->links()}}
                </table>
            </div>
        </div>
    </div>
<!-- @foreach($subjects as $key=> $subject)
         <div class="col-md-3">
        <div class="box box-succes">
            <div class="box-body">
                    <div class="card shadow" style="width: 18rem;">
                          <div class="card-body text-center">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-success">Go somewhere</a>
                          </div>
                    </div>
                </div>
            </div>
        </div>
@endforeach -->
@stop