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
    Your registered email-id is {{ $email}} , Please click on the below link to Reset your Password
    <br/>
    <a style="color: white" class="a" href="{{url('reset/'.$email)}}">Click Here to reset Your Password</a>
  </body>
</html>
