@extends('layouts.master')
@section('master.content')
        <div class="col-md-10">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Add Question</h3>
                </div>
                <div class="box-body">
                    <form method="post" action="{{url('question/store',$subject->id)}}">
                    @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Question') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" name="question" value="{{ old('question') }}" placeholder="Enter Question Here"></textarea>
                                @if ($errors->has('question'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('question') }}</strong>
                                    </span>                               
                                @endif
                      
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Options') }}</label>

                            <div class="col-md-2">
                                <input type="radio" name="correct_ans" value="1">
                                <input id="options" type="text" class="form-control{{ $errors->has('option1') ? ' is-invalid' : '' }}" name="option1" value="{{ old('options') }}" placeholder="Option1">
                                @if ($errors->has('option1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('option1') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                            <div class="col-md-2">
                                <input type="radio" name="correct_ans" value="2">
                                <input id="options" type="text" class="form-control{{ $errors->has('option') ? ' is-invalid' : '' }}" name="option2" value="{{ old('option2') }}" placeholder="option2">
                                @if ($errors->has('option2'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('option2') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                            <div class="col-md-2">
                                <input type="radio" name="correct_ans" value="3">
                                <input id="options" type="text" class="form-control{{ $errors->has('option3') ? ' is-invalid' : '' }}" name="option3" value="{{ old('option3') }}" placeholder="option3">
                                @if ($errors->has('option3'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('option3') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                            <div class="col-md-2">
                                <input type="radio" name="correct_ans" value="4">
                                <input id="options" type="text" class="form-control{{ $errors->has('option4') ? ' is-invalid' : '' }}" name="option4" value="{{ old('option4') }}" placeholder="option4">
                                @if ($errors->has('options'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('options') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                        </div>
                      <button type="submit" class="btn btn-primary btn-sm">Save and Next</button>
                      <a href="{{url('questions')}}" class="btn btn-warning btn-sm">Go Back</a>
                    </form>

                </div>
            </div>
        </div>

@stop