
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
</style>
<center>
    <h2 id="a" style="font-size: 25px">Online Career Advising System</h2>
    <h4>Mirpur Dhaka-1216</h4>
    <h4><?php echo date("F-Y")?></h4>
</center>
<table>
    <caption style="font-size: 25px">Student's List</caption>
    <thead>
    <tr>
        <th style="text-align: center">Serial</th>
        <th style="text-align: center">Name</th>
        <th style="text-align: center">Username</th>
        <th style="text-align: center">Email</th>
        <th style="text-align: center" >Phone</th>
        <th style="text-align: center">Date of Birth</th>
        <th style="text-align: center">Age</th>
        <th style="text-align: center">Gender</th>
        <th style="text-align: center">Address</th>
    </tr>
    </thead>
    <tbody>
    @foreach($students as $key => $student)
    <tr>
        <td style="text-align: center">{{$key+1}}</td>
        <td style="text-align: center">{{$student->name}}</td>
        <td style="text-align: center">{{$student->username}}</td>
        <td style="text-align: center">{{$student->email}}</td>
        <td style="text-align: center">{{$student->phone}}</td>
        <td style="text-align: center">{{$student->dob}}</td>
        <td style="text-align: center">{{ Carbon\Carbon::createFromDate( $student->dob)->diff(Carbon\Carbon::now())->format('%y years') }}</td>
        <td style="text-align: center">{{$student->gender}}</td>
        <td style="text-align: center">{{$student->address}}</td>
    </tr>
        @endforeach
    </tbody>
</table>
