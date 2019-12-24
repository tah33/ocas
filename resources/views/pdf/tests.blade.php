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
    <h3><?php echo date("F-Y")?></h3>
    <h3 style="color: forestgreen">Test Report of {{$test->student->name}} </h3>
</center>
<br>
<h4 style="border-style: solid; padding: 5px;background-color:gray;">Student Details</h4>

<table>
    <tr>
        <th>Name</th>
        <td>{{ $test->student->name }}</td>
        <th>Username</th>
        <td>{{ $test->student->username }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{  $test->student->email }}</td>
        <th>Phone</th>
        <td>{{  $test->student->phone }}</td>
    </tr>
    <tr>
        <th>Age</th>
        <td>{{Carbon\Carbon::createFromDate($test->student->dob)->diff(Carbon\Carbon::now())->format('%y year') }}</td>
        <th>Date of Birth</th>
        <td>{{  $test->student->dob }}</td>
    </tr>
    <tr>
        <th>Gender</th>
        <td>{{  $test->student->gendername }}</td>
        <th>Address</th>
        <td>{{  $test->student->address }}</td>
    </tr>
</table>

<h4 class="table-title text-orange">Total Percentage</h4>


<table>
    <tr>
        <th>Percentage</th>
        <td>{{ $test->marks + $test->common_marks }}%</td>
    </tr>
</table>

@foreach($test->ranks as $rank)
    <h4 style="color: blue"><u>{{$rank->subject->name}}</u></h4>
    <table width="100%" border="1" cellspacing="0" cellpadding="10px">
        <thead>
        <tr class="bg-gray">
            <th style="text-align: center">SL</th>
            <th style="text-align: left">Question</th>
            <th style="text-align: center;">Answers</th>
            <th style="text-align: center;">Given</th>
            <th style="text-align: left;">Remarks</th>
        </tr>
        </thead>
        <tbody>
        @php
            $count = 0;
            $serial = 1;
        @endphp
        @foreach ($questions as $key => $question)
            @php  $ques = App\Question::where('id',$key)->first();@endphp
            @if($ques->subject_id == $rank->subject_id)
                <tr>
                    <td style="text-align: center; width: 30px">{{ $serial++ }}</td>
                    <td style="text-align: left">{{ $question['question'] }}</td>
                    <td style="text-align: left;">{{ $question['correct_answer'] }}</td>
                    <td style="text-align: left;">{{ $question['answer'] }}</td>
                    <td>
                        @if( $question['correct_answer'] == $question['answer'])
                            @php  $count++;@endphp
                            <p style="font-family: DejaVu Sans, sans-serif; font-size: 15px; color: green">✓</p>
                        @else
                            <p style="color: red; font-size: 15px">x</p>
                        @endif
                    </td>
                </tr>
            @endif
        @endforeach
        <tr class="bg-gray">
            <th colspan="4">Total
            </th>
            <td width="25%"><b>{{$rank->marks}}%</b></td>
        </tr>
        <tr class="bg-gray">
            <th colspan="4">Correct
            </th>
            <td width="25%"><b>{{$count}}</b></td>
        </tr>
        </tbody>
    </table>
@endforeach
<div class="footer">
    <p>Coyright <i class="fa fa-copyright"></i> 2019 OCAS All rights reserved</p>
</div>
</body>
</html>
