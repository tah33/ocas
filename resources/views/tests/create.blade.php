@extends('layouts.master')
@section('master.content')
<div class="row">
        <div class="col-md-6">
          <!-- Custom Tabs -->
          <form method="post" id="form" action="{{url('tests')}}" onsubmit="return confirm('Are you sure you want to submit your answers')">
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
                
                @foreach($subject->questions->random($div) as $num => $question)
                <p style="font-size: 16px"><b>Quesion{{$num+1}} : </b>{{$question->question}}</p>

                 <div class="form-check">
            <input type="radio" class="form-check-input" id="option" value="a" name="ans[{{$question->id}}]">
            <label class="form-check-label" for="option1">{{$question->option1}}</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="option" value="b" name="ans[{{$question->id}}]">
            <label class="form-check-label" for="option2">{{$question->option2}}</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="option" value="c" name="ans[{{$question->id}}]" >
            <label class="form-check-label" for="option3">{{$question->option3}}</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="option" value="d" name="ans[{{$question->id}}]">
            <label class="form-check-label" for="option4">{{$question->option4}}</label>
          </div>
                @endforeach
              </div>

              @endforeach
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
              @endif
         
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>

</div>
   
@endsection

