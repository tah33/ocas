@extends('layouts.master')
@section('backend.title', $title)

@section('master.content')
    @push('backend.css')
        <link rel="stylesheet" href="{{URL::to('css/test.css')}}">
    @endpush
    <div class="row">
        <div class="col-md-12">
            <form method="post" id="form" name="form" action="{{url('tests')}}"
                  onsubmit="return confirm('Are you sure you want to submit your answers')">
            @csrf
            <!-- Custom Tabs -->
                <div class="nav-tabs-custom ">
                    @php
                        $ids = [];
                    @endphp

                    <ul class="nav nav-tabs bg-primary" id="myHeader">
                        @foreach($majors as $key => $subject)

                            <li class=" {{$key == 0 ? 'active' : ''}}"><a href="#tab_major{{ $subject->id }}"
                                                                          data-toggle="tab">{{$subject->name}}</a>
                            </li>
                        @endforeach
                        @foreach($commons as $key => $common)
                                <li><a href="#tab_common{{ $common->id }}"
                                       data-toggle="tab">{{$common->subject->name}}</a>
                                </li>
                        @endforeach
                    </ul>
                    <h1 id="clock" style="margin-right: 10px" class="pull-right"></h1>
                    <div class="tab-content">
                        @if(!empty($majors))
                            @foreach($majors as $key => $subject)
                                <div class="tab-pane {{$key == 0 ? 'active' : ''}}" id="tab_major{{ $subject->id }}">
                                    @foreach($subject->questions->random($add == 0 ? $div-$sub : $div+$add) as $num => $question)
                                        <p style="font-size: 16px"><b>Quesion{{$num+1}} : {{$question->question}}</b>
                                        </p>
                                        <label class="checkbox-container">
                                            <input type="radio" name="major[{{$question->id}}]" class="input-checkbox" value="a">
                                            <div class="checkbox-wrap">{{$question->option1}}</div>
                                        </label>
                                        <label class="checkbox-container">
                                            <input type="radio" name="major[{{$question->id}}]" class="input-checkbox" value="b">
                                            <div class="checkbox-wrap">{{$question->option2}}</div>
                                        </label>
                                        <label class="checkbox-container">
                                            <input type="radio" name="major[{{$question->id}}]" class="input-checkbox" value="c">
                                            <div class="checkbox-wrap">{{$question->option3}}</div>
                                        </label>
                                        <label class="checkbox-container">
                                            <input type="radio" name="major[{{$question->id}}]" class="input-checkbox" value="d">
                                            <div class="checkbox-wrap">{{$question->option4}} </div>
                                        </label>
                                    @endforeach
                                </div>
                                @php
                                    $sub = 0 ;
                                    $add = 0 ;
                                @endphp
                            @endforeach
                        @endif
                        @if(!empty($commons))
                            @foreach($commons as $key => $common)
                                    <div class="tab-pane " id="tab_common{{ $common->id }}">
                                        @foreach($common->questions->random($greater == 0 ? $divide-$less : $divide+$greater) as $key => $question)
                                            <p style="font-size: 16px"><b>Quesion{{$key+1}}: </b>{{$question->question}}</p>
                                            <label class="checkbox-container">
                                                <input type="radio" name="common[{{$question->id}}]"
                                                       class="input-checkbox" value="a">
                                                <div class="checkbox-wrap">{{$question->option1}}</div>
                                            </label>
                                            <label class="checkbox-container">
                                                <input type="radio" name="common[{{$question->id}}]"
                                                       class="input-checkbox" value="b">
                                                <div class="checkbox-wrap">{{$question->option2}}</div>
                                            </label>
                                            <label class="checkbox-container">
                                                <input type="radio" name="common[{{$question->id}}]"
                                                       class="input-checkbox" value="c">
                                                <div class="checkbox-wrap">{{$question->option3}}</div>
                                            </label>
                                            <label class="checkbox-container">
                                                <input type="radio" name="common[{{$question->id}}]"
                                                       class="input-checkbox" value="d">
                                                <div class="checkbox-wrap">{{$question->option4}} </div>
                                            </label>
                                        @endforeach
                                    </div>
                                        <!-- /.tab-pane -->
                        @endforeach
                    @endif
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
@push("backend.js")
    <script src="{{URL::to('assets/countdown/jquery.countdown.js')}}"></script>
    <script src="{{URL::to('assets/countdown/jquery.countdown.min.js')}}"></script>
    <script>
        window.onscroll = function () {
            myFunction()
        };
        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }

        document.getElementById('clock').innerHTML = {!! $exam->time-1 !!} +":" + 59;
        startTimer();

        function startTimer() {
            var time = {!! $exam->time !!};
            var presentTime = document.getElementById('clock').innerHTML;
            var timeArray = presentTime.split(/[:]+/);
            var m = timeArray[0];
            var s = checkSecond((timeArray[1] - 1));
            if (s == 59) {
                m = m - 1
            }
            //if(m<0){alert('timer completed')}
            document.getElementById('clock').innerHTML =
                m + ":" + s;
            // console.log(time)
            setTimeout(startTimer, 1000);
        }

        function checkSecond(sec) {
            if (sec < 10 && sec >= 0) {
                sec = "0" + sec
            }
            ; // add zero in front of numbers < 10
            if (sec < 0) {
                sec = "59"
            }
            ;
            return sec;
        }

        {{--        /*  setTimeout(function(){--}}
        {{--       var exam_time = {!! $exam->time !!};--}}
        {{--            console.log(exam_time)--}}
        {{--            window.location.href = "{{url('home')}}";--}}
        {{--        },  {!! (($exam->time * 1000)*60)-1000 !!} );--}}
        {{--*/--}}
        setTimeout(function () {
            alert('Time is out');
        }, {!! (($exam->time * 1000)*60)-1000 !!});
        jQuery(document).ready(function () {
            setTimeout('document.form.submit()',{!! (($exam->time * 1000)*60)-1000 !!});
            $(".test-link").click(function () {
                if (!confirm("Are you Sure! Your Data will be loss")) {
                    return false;
                }
            });
        });
        function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };
        window.onbeforeunload = function() {
            return "Are you sure you want to leave?";
        }
    </script>
@endpush
