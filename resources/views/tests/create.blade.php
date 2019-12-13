@extends('layouts.master')
@section('master.content')
    <style>
        .nav-tabs-custom>.nav-tabs>li>a, .nav-tabs-custom>.nav-tabs>li>a:hover {
            color: white;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky + .content {
            padding-top: 102px;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <form method="post" id="form" action="{{url('tests')}}"
                  onsubmit="return confirm('Are you sure you want to submit your answers')">
            @csrf
            <!-- Custom Tabs -->
                <div class="nav-tabs-custom ">
                    @php
                        $ids = [];
                    @endphp

                        <ul class="nav nav-tabs bg-primary" id="myHeader">
                            @foreach($majors as $key => $subject)
                                @php
                                    $ids[] = $subject->id;
                                @endphp
                                <li class=" {{$key == 0 ? 'active' : ''}}"><a href="#tab_{{ $subject->id }}"
                                                                              data-toggle="tab">{{$subject->name}}</a>
                                </li>
                            @endforeach
                            @foreach($commons as $key => $common)
                                @if(!in_array($common->subject_id,$ids))
                                    <li><a href="#tab_{{ $common->id }}"
                                           data-toggle="tab">{{$common->subject->name}}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    <div class="tab-content">
                        @if(!empty($majors))
                            @foreach($majors as $key => $subject)
                                <div class="tab-pane {{$key == 0 ? 'active' : ''}}" id="tab_{{ $subject->id }}">
                                    @foreach($subject->questions->random($add == 0 ? $div-$sub : $div+$add) as $num => $question)
                                        <p style="font-size: 16px"><b>Quesion{{$num+1}} : {{$question->question}}</b>
                                        </p>

                                        <div class="form-check">
                                            <input type="radio" class= "flat-red" id="option" value="a"
                                                   name="major[{{$question->id}}]">
                                            <label class="form-check-label" for="option1">{{$question->option1}}</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="flat-red" id="option" value="b"
                                                   name="major[{{$question->id}}]">
                                            <label class="form-check-label" for="option2">{{$question->option2}}</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="flat-red" id="option" value="c"
                                                   name="major[{{$question->id}}]">
                                            <label class="form-check-label" for="option3">{{$question->option3}}</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="flat-red" id="option" value="d"
                                                   name="major[{{$question->id}}]">
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
                        @if(!empty($commons))
                            @foreach($commons as $key => $common)
                                @if(!in_array($common->subject_id,$ids))
                                    <div class="tab-pane {{$key == 0 ? 'active' : ''}}" id="tab_{{ $common->id }}">
                                        @foreach($common->questions->random($greater == 0 ? $divide-$less : $divide+$greater) as $key => $question)
                                            <p style="font-size: 16px"><b>Quesion{{$key+1}}
                                                    : </b>{{$question->question}}
                                            </p>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="option" value="a"
                                                       name="common[{{$question->id}}]">
                                                <label class="form-check-label"
                                                       for="option1">{{$question->option1}}</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="option" value="b"
                                                       name="common[{{$question->id}}]">
                                                <label class="form-check-label"
                                                       for="option2">{{$question->option2}}</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="option" value="c"
                                                       name="common[{{$question->id}}]">
                                                <label class="form-check-label"
                                                       for="option3">{{$question->option3}}</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="option" value="d"
                                                       name="common[{{$question->id}}]">
                                                <label class="form-check-label"
                                                       for="option4">{{$question->option4}}</label>
                                            </div>
                                        @endforeach
                                        @endif

                                    </div>
                                @endforeach

                            @endif
                            <!-- /.tab-pane -->
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
    <script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
@endpush

