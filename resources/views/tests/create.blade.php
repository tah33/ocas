@extends('layouts.master')
@section('master.content')
  <div class="row">
        <div class="col-md-6">
          <form method="post" id="form" action="{{url('tests')}}" onsubmit="return confirm('Are you sure you want to submit your answers')">
                    @csrf
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              @foreach($majors as $key => $subject)
              <li class=" {{$key == 0 ? 'active' : ''}}"><a href="#tab_{{ $subject->id }}" data-toggle="tab">{{$subject->name}}</a></li>  
              @endforeach
            </ul>
             <div class="tab-content">
              @if(!empty($majors))
               @foreach($majors as $key => $subject)
              <div class="tab-pane {{$key == 0 ? 'active' : ''}}" id="tab_{{ $subject->id }}">
               
                @foreach($subject->questions->random($add == 0 ? $div-$sub : $div+$add) as $num => $question)
                <p style="font-size: 16px"><b>Quesion{{$num+1}} : </b>{{$question->question}}</p>

                 <div class="form-check">
            <input type="radio" class="form-check-input" id="option" value="a" name="major[{{$question->id}}]">
            <label class="form-check-label" for="option1">{{$question->option1}}</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="option" value="b" name="major[{{$question->id}}]">
            <label class="form-check-label" for="option2">{{$question->option2}}</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="option" value="c" name="major[{{$question->id}}]" >
            <label class="form-check-label" for="option3">{{$question->option3}}</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="option" value="d" name="major[{{$question->id}}]">
            <label class="form-check-label" for="option4">{{$question->option4}}</label>
          </div>
          
                @endforeach
              </div>
              @php
              $sub = 0 ;
              $add = 0 ;
              @endphp
              @endforeach
             
              @endif
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs ">
              @foreach($commons as $key => $common)
              <li class="{{$key == 0 ? 'active' : ''}}"><a href="#tab_1-1" data-toggle="tab">{{$common->name}}</a></li>
              @endforeach
                </ul>
              </li>
              
            </ul>
            <div class="tab-content">
               @if(!empty($commons))
               @foreach($commons as $key => $common)
              <div class="tab-pane {{$key == 0 ? 'active' : ''}}" id="tab_{{ $subject->id }}">
               
                @foreach($common->questions->take(20) as $num => $question)
              <div class="tab-pane active" id="tab_1-1">
               <p style="font-size: 16px"><b>Quesion{{$num+1}} : </b>{{$question->question}}</p>

                 <div class="form-check">
            <input type="radio" class="form-check-input" id="option" value="a" name="common[{{$question->id}}]">
            <label class="form-check-label" for="option1">{{$question->option1}}</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="option" value="b" name="common[{{$question->id}}]">
            <label class="form-check-label" for="option2">{{$question->option2}}</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="option" value="c" name="common[{{$question->id}}]" >
            <label class="form-check-label" for="option3">{{$question->option3}}</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="option" value="d" name="common[{{$question->id}}]">
            <label class="form-check-label" for="option4">{{$question->option4}}</label>
          </div>
          
                @endforeach
              </div>
              @endforeach
              
              @endif

              </div>
              <!-- /.tab-pane -->
               <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
      <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
@endsection

