@extends('layouts.master')
@section('backend.title', $title)

@section('master.content')
    @push('backend.css')
        <link rel="stylesheet" href="{{URL::to('assets/custom.css')}}">
    @endpush
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Edit DEpartment Info</h3>
                </div>
                <div class="box-body">
                    <form method="post" action="{{url('departments',$department->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="panel panel-primary" style="padding: 10px">
                            <div class="panel-body">
                                <div class="form-group row">
                                    <label for="name"
                                           class="col-md-2 col-form-label text-md-right">{{ __('Department Name') }}</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-info-circle"></i>
                                            </div>
                                            <input id="name" type="text"
                                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                   name="name" value="{{ $department->name }}"
                                                   placeholder="Enter Department Name">
                                        </div>
                                        @if ($errors->has('name'))
                                            <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>                               @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="slug"
                                           class="col-md-2 col-form-label text-md-right">{{ __('Short Name') }}</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa  fa-tag"></i>
                                            </div>
                                            <input id="slug" type="text"
                                                   class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}"
                                                   name="slug" value="{{ $department->slug }}"
                                                   placeholder="Enter Short Name">
                                        </div>
                                        @if ($errors->has('slug'))
                                            <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="minimum"
                                           class="col-md-2 col-form-label text-md-right">{{ __('Enter Percentage') }}</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa  fa-plus"></i>
                                            </div>
                                            <input id="minimum" type="number"
                                                   class="form-control{{ $errors->has('minimum') ? ' is-invalid' : '' }}"
                                                   name="minimum" value="{{ $department->minimum }}"
                                                   placeholder="Enter Minimum Percentage for Enroll">
                                        </div>
                                        @if ($errors->has('minimum'))
                                            <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('minimum') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="logo"
                                           class="col-md-2 col-form-label text-md-right">{{ __('Logo') }}</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-file-photo-o"></i>
                                            </div>
                                            <input id="logo" type="file"
                                                   class="form-control{{ $errors->has('logo') ? ' is-invalid' : '' }}"
                                                   name="logo" value="{{ old('logo') }}">
                                        </div>
                                        @if ($errors->has('logo'))
                                            <span style="color: red" class="help-block">
                                        <strong>{{ $errors->first('logo') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="logo" class="col-md-2 col-form-label text-md-right">{{ __('Future Scope') }}</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-line-chart"></i>
                                        </div>
                                        <textarea id="scope"class="form-control" name="scope"  autocomplete="requirements" placeholder="Describe something about this department what student can do...">{{$department->scope ?$department->scope : old('scope')}}</textarea>
                                        @error('scope')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                                <div class="panel panel-danger">
                                    <div class="panel-heading">Add Conditions</div>
                                    <div class="panel-body">
                                        <div class="form-group row">
                                            <label for="minimum"
                                                   class="col-md-2 col-form-label text-md-right">{{ __('Add Conitions') }}</label>
                                            <div class="col-md-8">
                                                <select style="margin-top: 10px"
                                                        class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}"
                                                        name="subject_id">
                                                    @if ($department->subject_id)
                                                        <option value="{{$department->subject_id}}">{{$department->subject->name}}</option>
                                                    @endif
                                                    <option value="">Select Major Subject</option>
                                                    @foreach($subjects as $subject)
                                                            @if(! $subject->common()->exists())
                                                            <option value="{{$subject->id}}">{{$subject->name}}</option>
                                                            @endif
                                                        @endforeach
                                                </select>
                                                @if ($errors->has('subject_id'))
                                                    <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('subject_id') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="minimum"
                                                   class="col-md-2 col-form-label text-md-right">{{ __('Enter Percentage') }}</label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa  fa-plus"></i>
                                                    </div>
                                                    <input id="range" type="number"
                                                           class="form-control{{ $errors->has('range') ? ' is-invalid' : '' }}"
                                                           name="range"
                                                           value="{{ $department->marks ?$department->marks : '' }}"
                                                           placeholder="Enter Minimum percentage for Enroll">
                                                </div>
                                                @if ($errors->has('range'))
                                                    <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('range') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm" style="margin-top:10px">Submit</button>
                        <a class="btn btn-warning btn-sm" style="margin-top:10px"
                           onclick="goBack()" >Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
