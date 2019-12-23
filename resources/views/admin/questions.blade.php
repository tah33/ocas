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
            @if(count($questions) > 0)
            <table class="table table-hover search">
                <caption>Question List</caption>
                <thead>
                <tr>
                    <th style="text-align: center">No</th>
                    <th style="text-align: center">Question</th>
                    <th style="text-align: center">Option1</th>
                    <th style="text-align: center">Option2</th>
                    <th style="text-align: center">Option3</th>
                    <th style="text-align: center">Option4</th>
                    <th style="text-align: center">Ans</th>
                    <th style="text-align: center">Subject</th>
                    <th style="text-align: center;width: 9%">Action</th>
                </tr>
                </thead>
                @php $subjects = []; @endphp
                <tbody>
                    @foreach ($questions as $key => $question)
                        <tr>
                            <td style="text-align: center">{{ $key+1 }}</td>
                            <td style="text-align: left">{{ $question->question }}</td>
                            <td style="text-align: left">{{ $question->option1 }}</td>
                            <td style="text-align: left;">{{ $question->option2 }}</td>
                            <td style="text-align: left">{{ $question->option3 ? $question->option3 : ""}}</td>
                            <td style="text-align: left">{{ $question->option4 ? $question->option4 : ""}}</td>
                            <td style="text-align: left">{{ $question->correct_ans ? $question->correct_ans : "" }}</td>
                            @if (!in_array($question->subject->name, $subjects))
                                @php  $subjects[] = $question->subject->name @endphp
                                <td rowspan="{{count($question->subject->questions)}}" style="text-align: left;vertical-align: middle">{{ $question->subject->name }}</td>
                            @endif
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
                </tbody>
            </table>
                @endif
        </div>
    </div>
@stop
