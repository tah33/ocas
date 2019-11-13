<header class="main-header">

    <!-- Logo -->
    <a href="{{url('home')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('images/avatar.png')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{Auth::guard('admin') ? Auth::guard('admin')->user()->name : Auth::guard('student')->user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{asset('images/avatar.png')}}" class="img-circle" alt="User Image">

                            <p>
                                {{Auth::guard('admin') ? Auth::guard('admin')->user()->name : Auth::guard('student')->user()->name}}
                                <small>Member since {{Auth::guard('admin') ? Auth::guard('admin')->user()->created_at->diffForHumans() : Auth::guard('student')->user()->created_at->diffForHumans()}}</small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{url('profiles',Auth::guard('admin') ? Auth::guard('admin')->id() : Auth::guard('student')->id())}}" class="btn btn-default btn-flat">Profile</a>
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
