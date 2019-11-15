@extends('layouts.header')
<div class="overflow">
<div class="sidenav" marin-login>
         <div class="login-main-text ">
            <h2>Application<br> Login Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-8">
            <div id='frame'>
               <div class='search'><h1>Sign In Here</h1>
                  <form method="POST" action="{{url('students')}}" enctype="multipart/form-data">
                    @csrf
                     <div class="content"> 
                      <div class="col-md-8">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{old('name')}}" name="name" placeholder="Enter Name">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                            <div class="col-md-8">
                                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{old('email')}}" name="email" placeholder="Enter Email">
                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                            <div class="col-md-8">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{old('username')}}" name="username" placeholder="Enter UserName">
                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                       <div class="col-md-8">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Confirm Password">
                              </div>
                              <div class="col-md-8">
                                <input id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" placeholder="Enter Phone">
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                            <div class="col-md-8">
                                <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" placeholder="Enter password">
                                @if ($errors->has('dob'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>                               
                                @endif
                            </div>
                            <div class="col-md-12">
                              <select name="gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}">
                                <option>Select Gender</option>
                                <option value='male'>Male</option>
                                <option value='female'>Female</option>
                              </select>
                              @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>                               
                                @endif
                            </div> 
                            <div class="col-md-8">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" placeholder="Enter Address">
                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>                               
                                @endif
                            </div> 
                            <div class="col-md-8">
                              <select name="id" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }} select2 select" data-placeholder="Select Departments" multiple="multiple">
                                @foreach($departments as $department)
                                <option value='{{$department->id}}'>{{$department->name}}</option>
                                @endforeach
                              </select>
                              @if ($errors->has('id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>                               
                                @endif
                            </div> 
                            <div class="col-md-8">
                              <input type="file" name="image">
                            </div>

        <button type="submit" class="btn btn-primary">Submit</button>
                      
                      </div>
                  </form>
               </div>
            </div>  
                                
         </div> 
      </div>
      </div>
      </body>
</html>
