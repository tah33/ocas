@extends('layouts.master')
@section('content')
<style>
    form {
        padding: 15px;
        border: 1px solid #666;
        background: #fff;
        display: none;
    }

    #formButton {
        display: block;
        margin-right: auto;
        margin-left: auto;
    }
</style>
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Update Department Info</h3>
                </div>
                <div class="box-body">
                    <form method='post' action="{{url('departments',$department->id)}}">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="minimum" class="col-md-4 col-form-label text-md-right">{{ __('Minimum Marks') }}</label>

                            <div class="col-md-6">
                                <input id="minimum" type="number" class="form-control{{ $errors->has('minimum') ? ' is-invalid' : '' }}" name="minimum" value="{{ $department->minimum }}" autofocus>

                                @if ($errors->has('minimum'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('minimum') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @if($department->conditions)
                        @foreach($department->conditions as $key => $condition)
                            <div class="form-group row">
                            <label for="minimum" class="col-md-4 col-form-label text-md-right">{{ __('Minimum Marks') }}</label>

                            <div class="col-md-6">
                                <select>
                                @foreach($subjects as $key => $subject)
                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                                </select>
                                @endforeach
                        @endif
                        <button type="submit" class="btn btn-success" style="margin-top:10px">Update</button>
                        <a class="btn btn-warning" style="margin-top:10px" href="{{url('home')}}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
@endsection
