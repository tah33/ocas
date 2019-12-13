
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
    <caption style="font-size: 25px">Test's Assessment</caption>
    <thead>
    <tr>
        <th style="text-align: left">Serial</th>
        <th style="text-align: left">Student Name</th>
        <th style="text-align: left">Total Marks</th>
    </tr>
    </thead>
    @php $names = []; @endphp
                <tbody>
                @foreach ($tests as $key => $test)
                    <tr>
                        <td style="text-align: left">{{ $key+1 }}</td>
                        @if(!in_array($test->student->name,$names))                       
                            @php
                            $names[] = $test->student->name;
                            @endphp
                        <td rowspan="{{count($test->student->tests)}}" style="text-align: left">{{ $test->student->name }}</td>
                        @endif
                        <td style="text-align: left">{{ $test->marks + $test->common_marks }}</td>
                        
                    </tr>
                @endforeach
                </tbody>
</table>
