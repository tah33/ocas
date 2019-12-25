@extends('layouts.master')
@section('backend.title', $title)

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
                <a href="{{url('question/create',$subject->id)}}" style="margin-left: 20px"
                   class="btn btn-success btn-sm">Add Question</a>
                <div class="input-group margin" style="margin: -30px 0 0 120px">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown">Excel
                            <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('questions-export')}}">Export (All Question)</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('question-export',$subject->id)}}">Export ({{$subject->name}}
                                    Question)</a></li>
                            <li class="divider"></li>
                            <li><a href="#" data-toggle="modal" data-target="#modal-upload">Import ({{$subject->name}}
                                    Question)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="input-group margin" style="margin: -30px 0 0 185px">
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
                    <th style="text-align: left">Question</th>
                    <th style="text-align: left">Option1</th>
                    <th style="text-align: left">Option2</th>
                    <th style="text-align: left">Option3</th>
                    <th style="text-align: left">Option4</th>
                    <th style="text-align: left;">Ans</th>
                    <th style="text-align: center; width: 20%">Action</th>
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
                            <td style="text-align: left">{{ $question->correct_ans == 'a' ? $question->option1 :
                                ($question->correct_ans == 'b' ? $question->option2 : ($question->correct_ans == 'c' ? $question->option3 : $question->option4)) }}</td>
                            <td style="text-align: center">
                                <a href="{{url('questions/'.$question->id.'/edit')}}"
                               class="btn btn-warning btn-sm btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <form style="float: right; margin-left: -55px" 
                                  action="{{url('questions',$question->id)}}" method="post"
                                  onsubmit="return confirm('Are you sure you want to Remove This Question?');">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-trash-o"></i> Delete
                                </button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
    @include('excel.upload')
@stop
