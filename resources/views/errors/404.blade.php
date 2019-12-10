<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Not Found</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Oswald:400,500,600,700');
        body{
            font-family: 'Oswald', sans-serif;
        }
        .wrapper {
            display: flex;
            flex-direction: row;
        }

        .item {
            width: 50%;
        }

        .box {
            display: inline-block;
            background: #e2e2e2;
            text-align: center;
            border-radius: 50%;
            margin: 15%;
            width: 400px;
            height: 400px;
        }
        .table {
            display: table;
            width: 100%;
            height: 100%;
        }

        .tablecell {
            display: table-cell;
            vertical-align: middle;
        }

        .box h1 {
            color: #b7b7b7;
            font-size: 9em;
            line-height: 0px;
        }
        .box h1 span {
            color: #2196F3;
        }

        .box p {
            color: #b7b7b7;
            line-height: 0;
            font-size: 20px;
        }

        .item-content {
            text-align: center;
            padding: 95px 0px;
        }

        .item-content h2 {
            color: #2196F3;
            font-size: 79px;
            line-height: 0;
            margin-bottom: 100px;
        }

        .item-content p {
            font-size: 18px;
            color: #b7b7b7;
        }

        .item-content h3 {
            color: #6d6d6d;
            font-size: 22px;
        }

        .item-content a {
            background: #009688;
            color: #fff;
            display: inline-block;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        .item-content a:hover {
            opacity: 0.9;
            transition: 0.25s;
        }

    </style>
</head>
<body>
<div class="wrapper">
    <div class="item">
        <div class="box">
            <div class="table">
                <div class="tablecell">
                    <h1>4<span>0</span>4</h1>
                    <p>Page Not Found</p>
                </div>
            </div>
        </div>
    </div>
    <div class="item item-content">
        <h2>Oops!</h2>
        <h3>Page not found on server</h3>
        <a href="{{url('home')}}">Go to Home</a>
    </div>
</div>
</body>
</html>
