@extends('layouts.master')
@section('content')
<div class="row"> 
        <div class="box">
            <div class="box-body">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th style="text-align: center">No.</th>
                        <th style="text-align: center">Question</th>
                        <th style="text-align: center">Option1</th>
                        <th style="text-align: center">Option2</th>
                        <th style="text-align: center">Option3</th>
                        <th style="text-align: center">Option4</th>
                        <th style="text-align: center">Ans</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    	@if($subject->questions)
                    @foreach ($subject->questions as $key => $question)
                        <tr>
                            <td style="text-align: center">{{ $key+1 }}</td>
                            <td style="text-align: left">{{ $question->question }}</td>
                            <td style="text-align: left">{{ $question->option1 }}</td>
                            <td style="text-align: left">{{ $question->option2 }}</td>    
                            <td style="text-align: left">{{ $question->option3 ? $question->option3 : ""}}</td>
                            <td style="text-align: left">{{ $question->option4 ? $question->option4 : ""}}</td>
                            <td style="text-align: left">{{ $question->correct_ans }}</td>
                            <td style="text-align: center">
                                <a href="{{url('questions/create',$subject->id)}}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a href="{{url('questions/edit',$subject->id)}}" class="btn btn-info"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop