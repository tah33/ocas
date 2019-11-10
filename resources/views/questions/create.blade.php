@extends('layouts.master')
@section('content')

        <div class="col-md-10">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Register</h3>
                </div>
                <div class="box-body">
                    <form method="post" action="{{url('departments')}}">
                    @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Question') }}</label>

                            <div class="col-md-6">
                                <input id="question" type="text" class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" name="question" value="{{ old('question') }}" placeholder="Enter Question Here">
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
                                <input type="radio" name="ans1[]">
                                <input id="option1" type="text" class="form-control{{ $errors->has('option1') ? ' is-invalid' : '' }}" name="option1" value="{{ old('option1') }}" placeholder="Option1">
                                @if ($errors->has('option1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('option1') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                            <div class="col-md-2">
                                <input type="radio" name="ans1[]">
                                <input id="option2" type="text" class="form-control{{ $errors->has('option2') ? ' is-invalid' : '' }}" name="option2" value="{{ old('option2') }}" placeholder="option2">
                                @if ($errors->has('option2'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('option2') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                            <div class="col-md-2">
                                <input type="radio" name="asn1[]">
                                <input id="option3" type="text" class="form-control{{ $errors->has('option3') ? ' is-invalid' : '' }}" name="option3" value="{{ old('option3') }}" placeholder="option3">
                                @if ($errors->has('option3'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('option3') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                            <div class="col-md-2">
                                <input type="radio" name="ans1[]">
                                <input id="option4" type="text" class="form-control{{ $errors->has('option4') ? ' is-invalid' : '' }}" name="option4" value="{{ old('option4') }}" placeholder="option4">
                                @if ($errors->has('option4'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('option4') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                        </div>
        <!-- <div class="input-group-btn"> 
        <button class="btn btn-success" style="float: right" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add Another</button>
      </div> -->
    <div class="input-group hdtuto control-group lst increment" >
      <div class="input-group-btn"> 
        <button class="btn btn-success" style="float: right" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
      </div>
    </div>

    <div class="clone hide">

      <div class="hdtuto control-group lst input-group" style="margin-top:10px">

        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Question') }}</label>

                            <div class="col-md-6">
                                <input id="question" type="text" class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" name="question" value="{{ old('question') }}" placeholder="Enter Question Here">
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
                                <input type="radio" name="ans2[]">
                                <input id="option1" type="text" class="form-control{{ $errors->has('option1') ? ' is-invalid' : '' }}" name="option1" value="{{ old('option1') }}" placeholder="Option1">
                                @if ($errors->has('option1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('option1') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                            <div class="col-md-2">
                                <input type="radio" name="ans2[]">
                                <input id="option2" type="text" class="form-control{{ $errors->has('option2') ? ' is-invalid' : '' }}" name="option2" value="{{ old('option2') }}" placeholder="option2">
                                @if ($errors->has('option2'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('option2') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                            <div class="col-md-2">
                                <input type="radio" name="ans2[]">
                                <input id="option3" type="text" class="form-control{{ $errors->has('option3') ? ' is-invalid' : '' }}" name="option3" value="{{ old('option3') }}" placeholder="option3">
                                @if ($errors->has('option3'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('option3') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                            <div class="col-md-2">
                                <input type="radio" name="ans2[]">
                                <input id="option4" type="text" class="form-control{{ $errors->has('option4') ? ' is-invalid' : '' }}" name="option4" value="{{ old('option4') }}" placeholder="option4">
                                @if ($errors->has('option4'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('option4') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                        </div>

        <div class="input-group-btn"> 
          <button class="btn btn-danger"  type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
        </div>
      </div>
    </div><br>
                      <button type="submit" class="btn btn-primary">Set Question</button>
                    </form>
                </div>
            </div>
        </div>

@stop