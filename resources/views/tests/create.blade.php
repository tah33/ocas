@extends('layouts.master')
@section('master.content')
<div class="row">
        <div class="col-md-6">
          <!-- Custom Tabs -->
          <form method="post" id="form" action="{{url('tests')}}">
                    @csrf
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              @foreach($subjects as $key => $subject)
              <li class=" {{$key == 0 ? 'active' : ''}}"><a href="#tab_{{ $subject->id }}" data-toggle="tab">{{$subject->name}}</a></li>  
              @endforeach
            </ul>
            <div class="tab-content">
              @if(!empty($subjects))
               @foreach($subjects as $key => $subject)
              <div class="tab-pane {{$key == 0 ? 'active' : ''}}" id="tab_{{ $subject->id }}">
                
                @foreach($subject->questions->take($div) as $num => $question)
                 <div class="form-group row">
                            <div class="col-md-6">
                              <label>Quesion{{$num+1}}</label>
                                <textarea class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" name="question" placeholder="Enter Question Here" disabled="disabled">{{$question->question}}</textarea>
                                @if ($errors->has('question'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('question') }}</strong>
                                    </span>                               
                                @endif
                    
                            </div>
                        </div>

                 <div class="form-check">
            <input type="radio" class="form-check-input" id="option" name="ans[{{$question->id}}]">
            <label class="form-check-label" for="option1">{{$question->option1}}</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="option" name="ans[{{$question->id}}]">
            <label class="form-check-label" for="option2">{{$question->option2}}</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="option" name="ans[{{$question->id}}]" >
            <label class="form-check-label" for="option3">{{$question->option3}}</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="option" name="ans[{{$question->id}}]">
            <label class="form-check-label" for="option4">{{$question->option4}}</label>
          </div>
                @endforeach
              </div>

              @endforeach
              <button type="submit">Save</button>
            </form>
              @endif
         
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>

</div>
   
@endsection

