@extends('layouts.master')
@section('content')

  <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Set Exam Time</h3>
            </div>
            <div class="box-body">
<form method="post" action="{{url('exams')}}" enctype="multipart/form-data">
 @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Exam Time') }}</label>

                            <div class="col-md-6">
                                <input id="time" type="number" class="form-control{{ $errors->has('time') ? ' is-invalid' : '' }}" name="time" value="{{ old('time') }}" placeholder="Enter Alotted Time for Exam in Minutes">
                                @if ($errors->has('time'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                        </div>
        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
  </div>
</div>
</div>

@stop
