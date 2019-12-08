@extends('layouts.master')
@section('master.content')
        <div class="col-md-10">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Edit Subject Name</h3>
                </div>
                <div class="box-body">
                    <form method="post" action="{{url('subjects',$subject->id)}}">
                    @csrf
                    @method('put')
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $subject->name }}" placeholder="Enter Subject Name">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                      <button type="submit" class="btn btn-primary btn-sm">Save</button>
                        <a class="btn btn-warning btn-sm"  href="{{url('subjects')}}">Cancel</a>
                    </form>

                </div>
            </div>
        </div>

@stop
