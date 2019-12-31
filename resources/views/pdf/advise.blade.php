<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Students Report</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table tr:nth-child(odd) {
            background: rgba(77, 77, 77, 0.13);
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: darkgray;
            color: black;
            text-align: center;
        }
    </style>
</head>
<body>
    <center>
    <h2 style="color: red">Online Career Advising System</h2>
    <h3 style="color: red"><?php echo date("F-Y")?></h3>
    <h3 style="color: green"> Advise Report </h3>
</center>
    @php
        $departments =  [];
        $subjects    =  [];
        $highestMarks = [];
        $highest = 0;
        $name = "";
        $tests =[];
        $highest = $test->ranks->max('marks');
    @endphp
            <table width="100%" border="1" cellspacing="0" cellpadding="10px">
                <caption>Advise</caption>
                <thead>
                <tr>
                    <th style="text-align: center"> Overall Percentage </th>
                    <th style="text-align: left">Department</th>
                    <th style="text-align: center">Total Percentage Required</th>
                    <th style="text-align: left">Subject</th>
                    <th style="text-align: center">Required Percentage</th>
                    <th style="text-align: center">Achieved Percentage</th>
                </tr>
                </thead>
                <tbody>
                @foreach (Auth::guard('student')->user()->departments as $key => $department)
                    <tr>
                        @if(!in_array($test->id,$tests))
                            @php
                                $tests[]=$test->id;
                            @endphp
                        <td style="text-align: center;" rowspan="{{count($test->ranks)}}">{{ $test->marks + $test->common_marks}}% out of {{$exam->major + $exam->common}}%</td>
                        @endif
                        <td style="text-align: left">{{ $department->name }}</td>
                        <td style="text-align: center">{{ $department->minimum }}% out of {{$exam->major + $exam->common}}%</td>
                        <td style="text-align: left">{{ $department->subject->name }}</td>
                        <td style="text-align: center">{{ $department->marks }}% out of 100%</td>
                        @foreach($test->ranks as $rank)
                            @php
                            if ($rank->marks >= $department->marks && $test->marks + $test->common_marks >= $department->minimum && $department->subject->name == $rank->subject->name)
                                {
                                    $departments[] = $department->name;
                                    $subjects[] = $department->subject->name;
                                }
                                 $highestMarks[] = $rank->marks;

                                $highest = max($highestMarks);
                            @endphp
                            @if($department->subject->name == $rank->subject->name)
                                <td style="text-align: center">{{ $rank->marks }}% out of 100%</td>

                            @endif
                        @endforeach

                    </tr>
                @endforeach
                        @foreach($test->ranks as $rank)
                        <tr>
                            <td></td><td></td><td></td>
                            @if($rank->subject->common()->exists())
                            <td>{{$rank->subject->name}} (Common)</td>
                            <td></td>
                            <td style="text-align: center">{{$rank->marks}}%</td>
                            @endif
                            </tr>
                        @endforeach

                </tbody>
            </table>
                <strong><p style="font-size: 25px;color: green;text-align: center;">Congratulation!</p></strong>
                <p class="text-center" style="font-size: 20px;">Dear Student,Thank you for spending your valuable time and effort in attending the test.
                 By utilizing your test , we found</p>
                @if($departments)
                <p class="text-justify" style="font-size: 20px">  you are good in

                 @foreach($subjects as $key => $subject)
                        <strong>{{ $subject }}@if ( ! $loop->last) , @else ($loop->last) .@endif</strong>
                @endforeach
                Based on your performance, you can go with
                @foreach($departments as $department)

                    <strong>{{ $department }} @if ( ! $loop->last) , @else ($loop->last) .@endif </strong>
                    @endforeach
                But we recommend you to go with <strong>{{$advise_department->name}}</strong>, Because you hit the top score in
                    <strong>{{$advise_department->subject->name}}</strong>. By choosing this department, <strong>{{$advise_department->scope}}</strong>.
                </p>
                @else
                <p style="font-size: 20px;text-align: justify">  
                    your performance is very poor, your preparation is not enough for your desired department. you need to put more effort to select your desirable department for your future career planning. So, Beleive in your strength and try harder. <font color="red">Best of luck!</font>
                </p>
                @endif
          
<div class="footer">
    <p>Coyright <i class="fa fa-copyright"></i> 2019 OCAS All rights reserved</p>
</div>
</body>
</html>