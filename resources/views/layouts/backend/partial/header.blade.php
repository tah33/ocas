<header class="main-header">
    <!-- Logo -->
    <a style="background-color: #00A65A;" href="{{url('home')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">@if(Auth::guard('admin')->check())<b>Admin</b>@else <b>Student</b>@endif</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">@if(Auth::guard('admin')->check())<b>Admin</b>@else <b>Student</b>@endif</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #00A65A;">
        <!-- Sidebar toggle button-->
        <a style="background-color: #00A65A;" href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu" >
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @if(empty(Auth::user()->image))
                        <img src="{{asset('images/avatar.png')}}" class="user-image" alt="User Image">
                        @else
                        <img src="{{asset('images/'.Auth::guard('student')->user()->image)}}" class="user-image" alt="User Image">
                        @endif
                        <span class="hidden-xs">{{Auth::guard('admin')->check() ? Auth::guard('admin')->user()->name : Auth::guard('student')->user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            @if(empty(Auth::user()->image))
                        <img src="{{asset('images/avatar.png')}}" class="image-circle" alt="User Image">
                        @else
                        <img src="{{asset('images/'.Auth::guard('student')->user()->image)}}" class="image-circle" alt="User Image">
                        @endif

                            <p>
                                {{Auth::guard('admin')->check() ? Auth::guard('admin')->user()->name : Auth::guard('student')->user()->name}}
                                <small>Member since {{Auth::guard('admin')->check() ? Auth::guard('admin')->user()->created_at->diffForHumans() : Auth::guard('student')->user()->created_at->diffForHumans()}}</small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{url('profiles',Auth::guard('admin')->check() ? Auth::guard('admin')->id() : Auth::guard('student')->id())}}" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{url('logout')}}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>


    </nav>
</header>
