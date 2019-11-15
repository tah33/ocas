@extends('layouts.master')
@section('master.content')
@if (session('error'))
  <div class="alert alert-info">
    {{ session('error') }}
  </div>
  @endif
  <style>
.hl {
  border-bottom:  1px solid red;
  height: 100px;
}
.hl2 {
  border-bottom:  1px solid red;
  height: 180px;
}
</style>
@if ($message= Session::get('success'))
<div class="alert alert-danger alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
<div class="row">
  <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit DEpartment Info</h3>
            </div>
            <div class="box-body">
<form method="post" action="{{url('departments',$department->id)}}">
 @csrf
 @method('put')
                        <div class="hl2">
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Department Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $department->name }}" placeholder="Enter Department Name">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>                               @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="slug" class="col-md-2 col-form-label text-md-right">{{ __('Short Name') }}</label>
                            <div class="col-md-6">
                                <input id="slug" type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ $department->slug }}" placeholder="Enter Short Name">
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
                                <input id="minimum" type="number" class="form-control{{ $errors->has('minimum') ? ' is-invalid' : '' }}" name="minimum" value="{{ $department->minimum }}" placeholder="Enter Minimum Marks for Enroll">
                                @if ($errors->has('minimum'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('minimum') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                        </div>
                        </div>
                        <div class="hl">
                       <div class="form-group row">
                            <label for="minimum" class="col-md-2 col-form-label text-md-right">{{ __('Add Conitions') }}</label>
                        </div>
                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id">
                                @if ($department->subject_id)
                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                                    @endif
                                    <option value="">Select Major Subject</option>
                                    @foreach($subjects as $sub)
                                    <option value="{{$sub->id}}">{{$sub->name}}</option>
                                    @endforeach
                                    </select>
                                       @if ($errors->has('id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input id="range" type="number" class="form-control{{ $errors->has('range') ? ' is-invalid' : '' }}" name="range" 
                                value="{{ $department->range ?$department->range : '' }}" placeholder="Enter Minimum Marks for Enroll">
                                   @if ($errors->has('range'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('range') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                        </div>
                            <div class="form-group row">
                            <label for="minimum" class="col-md-8 col-form-label text-md-right">{{ __('Choose Another Conitions for Multiple Subjects') }}</label>
                        </div>
                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('subject_id') ? ' is-invalid' : '' }} select2" name="subject_id[]" multiple="multiple" data-placeholder="Choose Multiple Subjects" selected="selected">
                                    @if(!empty($selectedsubjects))
                                    @foreach($selectedsubjects as $subject)
                                    <option value="{{$subject->id}}" selected="selected">{{$subject->name}}</option>
                                    @endforeach
                                    @endif
                                    @foreach($subjects as $subject)
                                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                                    @endforeach
                                </select>
                                   @if ($errors->has('subject_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('subject_id') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input id="total" type="number" class="form-control{{ $errors->has('total') ? ' is-invalid' : '' }}" name="total" value="{{ $department->condition ? $department->condition->total : ''  }}" placeholder="Enter Minimum Marks for Enroll">
                                   @if ($errors->has('total'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('total') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                        </div>
        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
  </div>
</div>
</div>
</div>
@stop
