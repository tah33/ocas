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
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa  fa-question-circle"></i>
                                    </div>
                                    <textarea id="question"
                                           class="form-control @error('question') is-invalid @enderror"
                                           name="question"  autocomplete="requirements">{{old('question')}}
                                    </textarea>
                                </div>
                                @error('question')
                                    <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Option1') }}</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <input type="radio" value="a" name="correct_ans">
                                    </div>
                                    <input id="option1" type="text"
                                           class="form-control @error('option1') is-invalid @enderror"
                                           name="option1" value="{{ old('option1') }}" autocomplete="requirements">
                                </div>
                                @error('option1')
                                    <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="option2" class="col-md-2 col-form-label text-md-right">{{ __('Option2') }}</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <input type="radio" value="b" name="correct_ans">
                                    </div>
                                    <input id="option2" type="text"
                                           class="form-control @error('option2') is-invalid @enderror"
                                           name="option2" value="{{ old('option2') }}" autocomplete="requirements">
                                </div>
                                @error('option2')
                                    <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="option3" class="col-md-2 col-form-label text-md-right">{{ __('Option3') }}</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <input type="radio" value="c" name="correct_ans">
                                    </div>
                                    <input id="option3" type="text"
                                           class="form-control @error('option3') is-invalid @enderror"
                                           name="option3" value="{{ old('option3') }}" autocomplete="requirements">
                                </div>
                                @error('option3')
                                    <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="option4" class="col-md-2 col-form-label text-md-right">{{ __('Option4') }}</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <input type="radio" value="d" name="correct_ans">
                                    </div>
                                    <input id="option4" type="text"
                                           class="form-control @error('option4') is-invalid @enderror"
                                           name="option4" value="{{ old('option4') }}" autocomplete="requirements">
                                </div>
                                @error('option4')
                                    <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                      <button type="submit" class="btn btn-primary btn-sm">Save and Next</button>
                      <a href="{{url('questions')}}" class="btn btn-warning btn-sm">Go Back</a>
                    </form>

                </div>
            </div>
        </div>

@stop
