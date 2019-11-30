@extends('layouts.master')
@section('master.content')
<div class="row"> 
        <div class="box">
            <div class="box-body">
                <center>
                <a href="{{url('question/create',$subject->id)}}" class="btn btn-success btn-sm">Add Question</a></center>
                <table id="search" class="table table-hover">
                    <caption>Questions for {{$subject->name}}</caption>
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
                    	@if($subject->questions()->exists())
                    @foreach ($subject->questions as $key => $question)
                        <tr>
                            <td style="text-align: center">{{ $key+1 }}</td>
                            <td style="text-align: left">{{ $question->question }}</td>
                            <td style="text-align: left">{{ $question->option1 }}</td>
                            <td style="text-align: left">{{ $question->option2 }}</td>    
                            <td style="text-align: left">{{ $question->option3 ? $question->option3 : ""}}</td>
                            <td style="text-align: left">{{ $question->option4 ? $question->option4 : ""}}</td>
                            <td style="text-align: left">{{ $question->correct_ans ? $question->correct_ans : "" }}</td>
                            <td>
                                <a href="{{url('questions/'.$question->id.'/edit')}}" class="btn btn-success btn-sm" style="float: left;"><i class="glyphicon glyphicon-pencil"></i></a>
                                
                                <form method="post" style="float: left" action="{{url('questions',$question->id)}}"  onsubmit="return confirm('Are You sure? You want to delete this question ')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
                                </form>
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