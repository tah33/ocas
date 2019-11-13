<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <!-- Dashboard Area -->
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{url('home')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <!-- Settings Area -->
            <li class="header">User Settings</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gear"></i> <span>Settings</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('profiles',Auth::guard('admin') ? Auth::guard('admin')->id() : Auth::guard('student')->id())}}"><i class="glyphicon glyphicon-user"></i>Edit Profile</a></li>
                    <li><a href="{{url('change-password')}}"><i class="glyphicon glyphicon-eye-close"></i>Change Password</a></li>
                </ul>
            </li>
            <!-- Students Info -->
            <li class="header">Students</li>
            <li>
                <a href="{{url('students')}}">
                    <i class="glyphicon glyphicon-user"></i> <span>Students</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <!-- Dept Settings -->
            <li class="header">Departments</li>
            <li>
                <a href="{{url('departments')}}">
                    <i class="glyphicon glyphicon-education"></i> <span>Departments</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <!-- Question -->
            <li class="header">Set Questions</li>
            <li>
                <a href="{{url('questions')}}">
                    <i class="glyphicon glyphicon-question-sign"></i> <span>Questions</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
