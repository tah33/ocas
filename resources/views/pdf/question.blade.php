
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
    <caption style="font-size: 25px">{{$subject->name}}'s Question</caption>
    <thead>
    <tr>
        <th style="text-align: left">Serial</th>
        <th style="text-align: left">Question</th>
        <th style="text-align: left">Option1</th>
        <th style="text-align: left">Option2</th>
        <th style="text-align: left">Option3</th>
        <th style="text-align: left">Option4</th>
    </tr>
    </thead>
    <tbody>
    @foreach($subject->questions as $key => $question)
        <tr>
            <td style="text-align: left">{{$key+1}}</td>
            <td style="text-align: left">{{$question->question}}</td>
            <td style="text-align: left">{{$question->option1}}</td>
            <td style="text-align: left">{{$question->option2}}</td>
            <td style="text-align: left">{{$question->option3 ? $question->option3 : ""}}</td>
            <td style="text-align: left">{{$question->option4 ? $question->option4 : ''}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
