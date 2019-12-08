@extends('layouts.master')
@section('master.content')
    <div class="col-md-10">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Create Subject</h3>
            </div>
            <div class="box-body">
                <form method="post" action="{{url('subjects')}}">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa  fa-book"></i>
                                </div>
                                <input type="text" name="name"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                       value="{{ old('name') }}" placeholder="Enter Subject Name">
                            </div>
                        @if ($errors->has('name'))
                                    <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Short Name') }}</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-tag"></i>
                                </div>
                                <input type="text" name="slug"
                                       class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}"
                                       value="{{ old('slug') }}" placeholder="Enter Subject Name">
                            </div>
                            @if ($errors->has('slug'))
                                <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </form>

            </div>
        </div>
    </div>

@stop
