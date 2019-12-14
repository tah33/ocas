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
    <caption style="font-size: 25px">Department's List</caption>
    <thead>
    <tr>
        <th style="text-align: left">Serial</th>
        <th style="text-align: left">Name</th>
        <th style="text-align: left">Short Name</th>
        <th style="text-align: left">Minimum Marks</th>
        <th style="text-align: left">Major Subject</th>
        <th style="text-align: left">Marks</th>
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
