<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Department List</title>
    <style>
        #a{
            color: red;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
            background-color: dimgrey;
            color: white;
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
    <h2 id="a" style="font-size: 25px">Online Career Advising System</h2>
    <h4>Mirpur Dhaka-1216</h4>
    <h4 id="a"><?php echo date("F-Y")?></h4>
</center>
<table>
    <caption style="font-size: 25px">Department's List</caption>
    <thead>
    <tr>
        <th style="text-align: left">Serial</th>
        <th style="text-align: left">Name</th>
        <th style="text-align: left">Short Name</th>
        <th style="text-align: left">Minimum Percentage</th>
        <th style="text-align: left">Major Subject</th>
        <th style="text-align: left">Percentage</th>
    </tr>
    </thead>
    <tbody>
    @foreach($departments as $key => $department)
        <tr>
            <td style="text-align: left">{{$key+1}}</td>
            <td style="text-align: left">{{$department->name}}</td>
            <td style="text-align: left">{{$department->slug}}</td>
            <td style="text-align: left">{{$department->minimum}}</td>
            <td style="text-align: left">{{$department->subject->name}}</td>
            <td style="text-align: left">{{$department->marks}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="footer">
    <p>Coyright <i class="fa fa-copyright"></i> 2019 OCAS All rights reserved.</p>
</div>
</body>
</html>
