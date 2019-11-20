@extends('layouts.master')
@section('master.content')

        <div class="col-md-10">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Add Question</h3>
                </div>
                <div class="box-body">
                    <form method="post" action="{{url('tests')}}">
                    @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Question') }}</label>

                            <div class="col-md-6">
                                <textarea style="border: none" class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" name="question" 
                                     placeholder="Enter Question Here">{{$questions->question}}</textarea>
                                @if ($errors->has('question'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('question') }}</strong>
                                    </span>                               
                                @endif
                      
                            </div>
                        </div>
                  <span class="input-group-addon">
                    <input type="radio" name= "q" id="option1" style="w">{{$questions->option1}}
                  </span>
                  <span class="input-group-addon">
                    <input type="radio" name= "q" id="option1" style="w">{{$questions->option2}}
                  </span><span class="input-group-addon">
                    <input type="radio" name= "q" id="option1" style="w">{{$questions->option3}}
                  </span><span class="input-group-addon">
                    <input type="radio" name= "q" id="option1" style="w">{{$questions->option4}}
                  </span>
   
                      <button type="submit" class="btn btn-primary btn-sm">Save and Next</button>
                    </form>

                </div>
            </div>
        </div>

@stop