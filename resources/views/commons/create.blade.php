@extends('layouts.master')
@section('master.content')
<div class="row">
  <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Choose Common Subjects</h3>
            </div>
            <div class="box-body">
<form method="post" action="{{url('commons')}}">
 @csrf  
  <div class="form-group row">
                            <label for="minimum" class="col-md-2 col-form-label text-md-right s">{{ __('Subjects') }}</label>
                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('subject_id') ? ' is-invalid' : '' }} select2" name="subject_id[]" multiple="multiple" data-placeholder = "Choose Subjects">
                                    <option value="">Select Major Subject</option>
                                    @foreach($subjects as $key => $subject)
                                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('subject_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject_id') }}</strong>
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