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
                    @foreach($questions as $question)
                        <div class="form-group row">
                            <div class="col-md-6">
                                <textarea style="border: none" class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" name="question" 
                                     placeholder="Enter Question Here">{{$question->question}}</textarea>
                                @if ($errors->has('question'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('question') }}</strong>
                                    </span>                               
                                @endif
                      
                            </div>
                        </div>
                        <div style="display: block; padding: 20px" >
                  <p>
                    <input type="radio" name= "q" id="option1" style="w">{{$question->option1}}
                  </p>
                  <p>
                    <input type="radio" name= "q" id="option1" style="w">{{$question->option2}}
                  </p>
                  <p>
                    <input type="radio" name= "q" id="option1" style="w">{{$question->option3}}
                  </p>
<p>                    <input type="radio" name= "q" id="option1" style="w">{{$question->option4}}
                  </p>
   </div>
   @endforeach
                      <button type="submit" class="btn btn-primary btn-sm">Save and Next</button>
                    </form>

                </div>
            </div>
        </div>
</div>
@stop