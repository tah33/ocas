@extends('layouts.master')
@section('master.content')
<div class="row">
        <div class="col-md-10">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Question</h3>
                </div>
                <div class="box-body">
                    <form method="post" action="{{url('tests')}}">
                    @csrf
                    @foreach($subjects as $key=>$subject)
                    <div class="panel panel-danger" style="width: 50%">
                      <div class="panel-heading" >Question from {{$subject->name}}</div>
                    </div>
                    @foreach($subject->questions as $num=>$question)
                    <br>
                        <div class="form-group row">
                            <div class="col-md-6">
                              <label>Quesion{{$num+1}}{{$question->subject->name}}</label>
                                <textarea style="border: none" class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" name="question" placeholder="Enter Question Here" disabled="disabled">{{$question->question}}</textarea>
                                @if ($errors->has('question'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('question') }}</strong>
                                    </span>                               
                                @endif
                    
                            </div>
                        </div>
                 <div class="form-check">
            <input type="radio" class="form-check-input" name="q" id="option1">
            <label class="form-check-label" for="option1">{{$question->option1}}</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" name="q" id="option2">
            <label class="form-check-label" for="option2">{{$question->option2}}</label>
          </div>
          <div class="form-check">
            <input type="radio" name="q" id="option3" class="form-check-input">
            <label class="form-check-label" for="option3">{{$question->option3}}</label>
          </div>
          <div class="form-check">
            <input type="radio" name="q" id="option4" class="form-check-input">
            <label class="form-check-label" for="option4">{{$question->option4}}</label>
          </div>
   @endforeach
   @endforeach
                      <button type="submit" class="btn btn-primary btn-sm">Save and Next</button>
                    </form>

                </div>
            </div>
        </div>
</div>
@stop