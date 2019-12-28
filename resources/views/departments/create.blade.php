@extends('layouts.master')
@section('backend.title', $title)
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
                                <label for="name"
                                       class="col-md-2 col-form-label text-md-right">{{ __('Department Name') }}</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa  fa-book"></i>
                                        </div>
                                        <input id="name" type="text"
                                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                               name="name" value="{{ old('name') }}"
                                               placeholder="Enter Department Name">
                                        @error('name')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
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
                                               name="slug" value="{{ old('slug') }}" placeholder="Enter Short Name">
                                        @error('slug')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="minimum"
                                       class="col-md-2 col-form-label text-md-right">{{ __('Minimum Percentage') }}</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa  fa-plus"></i>
                                        </div>
                                        <input id="minimum" type="number"
                                               class="form-control{{ $errors->has('minimum') ? ' is-invalid' : '' }}"
                                               name="minimum" value="{{ old('minimum') }}"
                                               placeholder="Enter Minimum Percentage for Enroll">
                                        @error('minimum')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="logo" class="col-md-2 col-form-label text-md-right">{{ __('Logo') }}</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-file-photo-o"></i>
                                        </div>
                                        <input id="logo" type="file"
                                               class="form-control{{ $errors->has('logo') ? ' is-invalid' : '' }}"
                                               name="logo" value="{{ old('logo') }}">
                                        @error('logo')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="logo" class="col-md-2 col-form-label text-md-right">{{ __('Future Scope') }}</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-line-chart"></i>
                                        </div>
                                        <textarea id="scope"class="form-control" name="scope"  autocomplete="requirements" placeholder="Describe something about this department what student can do...">{{old('scope')}}</textarea>
                                        @error('scope')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-danger" style="padding:  10px">
                                <div class="panel-heading">Add Conditions</div>
                                <div class="form-group row">
                                    <label for="minimum" class="col-md-2 col-form-label text-md-right"
                                           style="margin-top: 10px">{{ __('Choose Major Subject') }}</label>
                                    <div class="col-md-8">
                                        <select style="margin-top: 10px"
                                                class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}"
                                                name="subject_id">
                                            <option value="">Select Major Subject</option>
                                            @foreach($subjects as $key => $subject)
                                                @if(! $subject->common()->exists())
                                                <option value="{{$subject->id}}" {{ old('id') == $subject->id ? 'selected' : ''}}>{{$subject->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('subject_id')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
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
                                                   class="form-control @error('range') is-invalid @enderror"
                                                   name="range" value="{{ old('range') }}"
                                                   placeholder="Enter Minimum Percentage for Enroll">
                                        </div>
                                        @error('range')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
