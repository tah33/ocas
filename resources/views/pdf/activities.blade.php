<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Report</title>
    <style>

        .text-red {
            color: rgb(245, 55, 70)
        }

        .text-green {
            color: rgb(12, 136, 65)
        }

        .text-orange {
            color: rgb(245, 145, 3)
        }

        .text-blue {
            color: rgb(15, 31, 216)
        }

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            font-size: 12px;
        }

        .wrapper {
            width: 100%;
            height: auto;
            border: 2px solid #4d4d4d;
            margin: 20px;
        }

        .invoice-header {
            padding: 10px 10px 0px 10px
        }

        .title-box {
            height: 10px;
            width: 100%;
        }

        .text-center {
            text-align: center;
        }

        .logo {
            margin-bottom: 15px;
        }

        .company-title, .route-title {
            float: left;
            width: 50%;
        }

        .route-title {
            text-align: right;
        }

        .invoice-body {
            padding: 10px;
        }


        table {
            border-collapse: collapse;
            width: 100%;
        }


        .table tr:nth-child(odd) {
            background: rgba(77, 77, 77, 0.13);
        }

        .table th {
            font-weight: 600;
        }

        .table th, .table td {
            padding: 10px;
        }

        .payment-box {
            height: 180px;
        }

        .seat-details, .payment-details {

            width: 50%;
        }

        .seat-details {
            width: 50%;
        }

        .table-title {
            text-decoration: underline;
            margin-bottom: 5px;
        }

        .invoice-footer {
            padding: 10px;
            font-size: 10px;
        }

        .invoice-footer ul, .invoice-footer ol {
            padding-left: 30px;
            margin-bottom: 5px;
        }

    </style>
</head>
<body>
<div class="wrapper">
    <div class="invoice-header">
        <div class="logo text-center">
            <h2 style="color: red">Online Career Advising System</h2>
            <h3><?php echo date("F-Y")?></h3>
        </div>
           <center><p style="border-style: solid; padding: 5px;background-color:gray;">
                   Student Report of {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$activities->first()->created_at)->format('Y-m-d')}} </p>
           </center>
        <br>
        <div class="title-box">
            <div class="company-title text-orange">
                <h4 class="table-title text-orange">Student Details</h4>
            </div>
        </div>
    </div>
    <div class="invoice-body">
        <table class="table">
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
    </div>
    <div class="invoice-body">
        <div class="payment-box">
            <div class="seat-details">
                <h4 class="table-title text-orange">Login & Logout Time</h4>
                <table class="table">
                        <tr>
                            <th>Serial</th>
                            <th>Login Time</th>
                            <th>Logout Time</th>
                        </tr>
                    @foreach($activities as $key=>$activity)

                    <tr>
                        <td>{{ $key+1}}</td>
                        <td>{{ $activity->login_time }}</td>
                        <td>{{ $activity->logout_time }}</td>
                    </tr>
               @endforeach
                </table>
            </div>
        </div>
    </div>
    <br><br>
    <div class="invoice-body">
        <div class="payment-box">
            <div class="seat-details">
                <h4 class="table-title text-orange">Tests Given</h4>
                <table class="table">
                    <tr>
                        <th>Serial</th>
                        <th>SLogin Time</th>
                    </tr>
                    @foreach($tests as $key=>$test)

                        <tr>
                            <td>{{ $key+1}}</td>
                            <td>{{ $test->marks + $test->common_marks}}% out of {{$exam->major + $exam->common}}%</td>
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
</div>
</body>
</html>
