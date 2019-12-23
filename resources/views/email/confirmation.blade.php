<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <style>
        .a {
            background-color: #4CAF50; /* Green */
            border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>

<h2>Welcome to the site</h2>
<br/>
Your registered email-id is {{ $email}}
Your Password is {{ $password}},
Please change Your Password first.
<br/>
<a style="color: white" class="a" href="{{url('reset/'.$email)}}">Click Here to reset Your Password</a>
<a style="color: white" class="a" href="{{url('login')}}">Click Here to Login</a>
</body>
</html>
