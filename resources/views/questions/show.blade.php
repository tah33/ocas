@extends('layouts.master')
@section('master.content')
    <style>
        div.dataTables_wrapper div.dataTables_filter input {
            width: 200px;
        }
        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
        }
    </style>
    <div class="box box-primary">
        <div class="box-body">
            <div class="center">
                <a href="{{url('questions/create',$subject->id)}}" class="btn btn-success btn-sm">Add Question</a>
                <div class="input-group margin" style="margin: -30px 0 0 130px">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">PDF
                            <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('question-view',$subject->id)}}" target="_blank">View</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('question-download',$subject->id)}}">Download</a></li>
                        </ul>
                    </div>
                </div>
            </div>
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
                        <th style="text-align: center;">Ans</th>
                        <th style="text-align: center;width: 9%">Action</th>
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
                                <td style="text-align: center">
                                    <a href="{{url('questions/'.$question->id.'/edit')}}" class="btn btn-warning btn-sm"
                                       style="float: left;"><i class="fa fa-edit"></i></a>

                                    <form style="float: right;" method="post" action="{{url('questions',$question->id)}}"
                                          onsubmit="return confirm('Are You sure? You want to delete this question ')">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="fa fa-trash-o"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
@stop
