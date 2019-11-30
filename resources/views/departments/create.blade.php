@extends('layouts.master')
@section('master.content')
<div class="row">
  <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Create Department</h3>
            </div>
            <div class="box-body">
<form method="post" action="{{url('departments')}}" enctype="multipart/form-data">
 @csrf  
                        <div class="panel panel-primary" style="padding: 10px">
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Department Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter Department Name">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="slug" class="col-md-2 col-form-label text-md-right">{{ __('Short Name') }}</label>
                            <div class="col-md-6">
                                <input id="slug" type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ old('slug') }}" placeholder="Enter Short Name">
                                @if ($errors->has('slug'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="minimum" class="col-md-2 col-form-label text-md-right">{{ __('Minimum Percentage') }}</label>
                            <div class="col-md-6">
                                <input id="minimum" type="number" class="form-control{{ $errors->has('minimum') ? ' is-invalid' : '' }}" name="minimum" value="{{ old('minimum') }}" placeholder="Enter Minimum Percentage for Enroll">
                                @if ($errors->has('minimum'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('minimum') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                        </div>
                    </div>
                        <div class="panel panel-danger" style="padding:  10px">
                    <div class="panel-heading">Add Conditions</div>
                       <div class="form-group row">
                            <label for="minimum" class="col-md-2 col-form-label text-md-right" style="margin-top: 10px">{{ __('Choose Major Subject') }}</label>
                            <div class="col-md-6">
                                <select style="margin-top: 10px" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="subject_id">
                                    <option value="">Select Major Subject</option>
                                    @foreach($subjects as $key => $subject)
                                    <option value="{{$subject->id}}" {{ old('id') == $subject->id ? 'selected' : ''}}>{{$subject->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('subject_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject_id') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="minimum" class="col-md-2 col-form-label text-md-right">{{ __('Enter Percentage') }}</label>
                            <div class="col-md-6">
                                <input id="range" type="number" class="form-control{{ $errors->has('range') ? ' is-invalid' : '' }}" name="range" value="{{ old('range') }}" placeholder="Enter Minimum Percentage for Enroll">
                                @if ($errors->has('range'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('range') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                        </div>
                    </div>
                       
        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
  </div>
</div>
</div>
</div>
@stop
