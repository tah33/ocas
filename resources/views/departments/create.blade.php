@extends('layouts.master')
@section('content')
  <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Register</h3>
            </div>
            <div class="box-body">
<form method="post" action="{{url('departments')}}" enctype="multipart/form-data">
 @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Department Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter Department Name">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>                               @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="slug" class="col-md-4 col-form-label text-md-right">{{ __('Short Name') }}</label>
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
                            <label for="minimum" class="col-md-4 col-form-label text-md-right">{{ __('Minimum Marks') }}</label>
                            <div class="col-md-6">
                                <input id="minimum" type="number" class="form-control{{ $errors->has('minimum') ? ' is-invalid' : '' }}" name="minimum" value="{{ old('minimum') }}" placeholder="Enter Minimum Marks for Enroll">
                                @if ($errors->has('minimum'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('minimum') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                        </div>

        <div class="input-group control-group increment" >
          
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add Conditions</button>
          </div>
            <div class="clone hide">
          <div class="control-group" style="margin-top:10px">
                            <div class="col-md-6">
        <select class="form-control{{ $errors->has('subject_id') ? ' is-invalid' : '' }}" name="subject_id" placeholder="Enter Minimum Marks for Enroll">
            <option value="">Selcect Subject</option>
        @foreach($subjects as $key => $subject)
        <option value="{{$subject->id}}">{{$subject->name}}</option>
        @endforeach
        </select>
        </div>
      <div class="col-md-4">
        <input id="minimum" type="number" class="form-control{{ $errors->has('range') ? ' is-invalid' : '' }}" name="range" value="{{ old('range') }}" placeholder="Enter Minimum Mark">
        @if ($errors->has('range'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('range') }}</strong>
            </span>                               
        @endif
      </div><br><br>
            <div class="col-md-6">
                         <select class="form-control {{ $errors->has('id') ? 'is-invalid' : '' }} select2" name="id[]" multiple="multiple" data-placeholder="Select Your Interests Area">
                        @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                        @endforeach
                        </select>
                                 @if ($errors->has('id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="col-md-4">
                    <input type="number" name="total" class="form-control{{ $errors->has('total') ? ' is-invalid' : '' }}" placeholder="Enter Marks">
                </div><br><br>
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
  </div>
</div>
</div>

@stop
