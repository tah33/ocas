@extends('layouts.master')
@section('master.content')

  <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Register</h3>
            </div>
            <div class="box-body">
<form method="post" action="{{url('departments')}}" enctype="multipart/form-data">
 @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Department Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter Department Name">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
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
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="minimum" class="col-md-2 col-form-label text-md-right">{{ __('Minimum Marks') }}</label>
                            <div class="col-md-6">
                                <input id="minimum" type="number" class="form-control{{ $errors->has('minimum') ? ' is-invalid' : '' }}" name="minimum" value="{{ old('minimum') }}" placeholder="Enter Minimum Marks for Enroll">
                                @if ($errors->has('minimum'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('minimum') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                        </div>
                       <div class="form-group row">
                            <label for="minimum" class="col-md-2 col-form-label text-md-right">{{ __('Add Conitions') }}</label>
                        </div>
                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id">
                                    <option value="">Select Major Subject</option>
                                    @foreach($subjects as $subject)
                                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input id="range" type="number" class="form-control{{ $errors->has('range') ? ' is-invalid' : '' }}" name="range" value="{{ old('range') }}" placeholder="Enter Minimum Marks for Enroll">
                            </div>
                            <div class="form-group row">
                            <label for="minimum" class="col-md-8 col-form-label text-md-right">{{ __('Choose Another Conitions for Multiple Subjects') }}</label>
                        </div>
                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('subject_id') ? ' is-invalid' : '' }} select2" name="subject_id[]" multiple="multiple" data-placeholder="Choose Multiple Subjects">
                                    @foreach($subjects as $subject)
                                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input id="total" type="number" class="form-control{{ $errors->has('total') ? ' is-invalid' : '' }}" name="total" value="{{ old('total') }}" placeholder="Enter Minimum Marks for Enroll">
                            </div>
        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
  </div>
</div>
</div>

@stop
