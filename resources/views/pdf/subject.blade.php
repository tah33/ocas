
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
    <caption style="font-size: 25px">Subject's List</caption>
    <thead>
    <tr>
        <th style="text-align: left">Serial</th>
        <th style="text-align: left">Name</th>
        <th style="lefttext-align: left">Short Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($subjects as $key => $subject)
        <tr>
            <td style="text-align: left">{{$key+1}}</td>
            <td style="text-align: left">{{$subject->name}}</td>
            <td style="text-align: left">{{$subject->slug}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
