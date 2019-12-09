@extends('layouts.master')
@section('master.content')
<div class="row">
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Exam Rules</h3>
            </div>
            <div class="box-body">
                <form method="post" action="{{url('exams')}}">
                    @csrf
                    <div class="form-group row">
                        <label for="name"
                            class="col-md-2 col-form-label text-md-right">{{ __('Major Questions') }}</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-question-circle"></i>
                                </div>
                                <input type="number" name="major"
                                    class="form-control{{ $errors->has('major') ? ' is-invalid' : '' }}" name="major"
                                    value="{{$exam ? $exam->major : old('major') }}"
                                    placeholder="Enter Number of Questions">
                            </div>
                            @if ($errors->has('major'))
                            <span style="color: red" class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('major') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name"
                            class="col-md-2 col-form-label text-md-right">{{ __('Common Questions') }}</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-question-circle"></i>
                                </div>
                                <input type="number" name="common"
                                    class="form-control{{ $errors->has('common') ? ' is-invalid' : '' }}" name="common"
                                    value="{{$exam ? $exam->common :  old('common')}}"
                                    placeholder="Enter Number of Questions">
                            </div>
                            @if ($errors->has('common'))
                            <span style="color: red" class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('common') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name"
                            class="col-md-2 col-form-label text-md-right">{{ __('Total Time (Minutes)') }}</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <input type="number" name="time"
                                    class="form-control{{ $errors->has('time') ? ' is-invalid' : '' }}" name="time"
                                    value="{{$exam ? $exam->time :  old('time')}}" placeholder="E.g. 120 Minutes">
                            </div>
                            @if ($errors->has('time'))
                            <span style="color: red" class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('time') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm" style="margin-top:10px">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
