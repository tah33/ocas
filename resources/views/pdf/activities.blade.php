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
    <h3 style="color: green"> Activity Report of {{$activities->first()->student->name}} for <font color="red">{{$activities->first()->created_at->format('m/d/Y')}}</font> </h3>
</center>

<br>
<h4 style="border-style: solid; padding: 5px;background-color:gray;">Student Details</h4>
<table>
    <tr>
        <th>Name</th>
        <td>{{ $activities->first()->student->name }}</td>
        <th>Username</th>
        <td>{{ $activities->first()->student->username }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{  $activities->first()->student->email }}</td>
        <th>Phone</th>
        <td>{{  $activities->first()->student->phone }}</td>
    </tr>
    <tr>
        <th>Age</th>
        <td>{{Carbon\Carbon::createFromDate($activities->first()->student->dob)->diff(Carbon\Carbon::now())->format('%y year') }}</td>
        <th>Date of Birth</th>
        <td>{{  $activities->first()->student->dob }}</td>
    </tr>
    <tr>
        <th>Gender</th>
        <td>{{  $activities->first()->student->gendername }}</td>
        <th>Address</th>
        <td>{{  $activities->first()->student->address }}</td>
    </tr>
</table>
    <h4 style="border-style: solid; padding: 5px;background-color:gray;">Login & Logout Time</h4>
    <table>
        <tr>
            <th>Serial</th>
            <th>Login Time</th>
            <th>Logout Time</th>
            <th>Date</th>
        </tr>
        @foreach($activities as $key=>$activity)

            <tr>
                <td>{{ $key+1}}</td>
                <td>{{ $activity->login_time }}</td>
                <td>{{ $activity->logout_time ? $activity->logout_time : 'Active'}}</td>
                <td class="text-center">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$activity->created_at)->format('Y-m-d')  }}</td>
            </tr>
        @endforeach
    </table>

    <h4 style="border-style: solid; padding: 5px;background-color:gray;">Tests Given</h4>
    <table>
        <tr>
            <th>Serial</th>
            <th>Percentage</th>
            <th>Date</th>
        </tr>
        @foreach($tests as $key=>$test)

            <tr>
                <td>{{ $key+1}}</td>
                <td>{{ $test->marks + $test->common_marks}}% out of {{$exam->major + $exam->common}}%</td>
                <td class="text-center">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$test->created_at)->format('Y-m-d')  }}</td>
            </tr>
        @endforeach
    </table>
<div class="footer">
    <p>Coyright <i class="fa fa-copyright"></i> 2019 OCAS All rights reserved</p>
</div>
</body>
</html>
