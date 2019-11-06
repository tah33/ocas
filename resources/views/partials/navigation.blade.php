
<!-- Left side column. contains the logo and sidebar -->
<aside id="dt-Nav" class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">NAVIGATION</li>
            <!-- Optionally, you can add icons to the links -->
            <li>
                <a href="{{ url('home') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="header">Students</li>
                <li>
                    <a href="{{ url('students') }}">
                        <i class="fa fa-user"></i>
                        <span>Students</span>
                    </a>
                </li>
            </li>

            <li class="header">Attendance</li>
            <li class="treeview {{ Request::is('attendance') || Request::is('attendance/*') ? 'active' : '' }}">
                <a href="{{ url('#') }}">
                    <i class="fa fa-hand-stop-o" style="color:cadetblue"></i>
                    <span>Employee Attendance</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('attendance/upload') ? 'active' : '' }}">
                        <a href="{{ url('attendance/upload') }}">Upload Attendance Data</a>
                    </li>
                    <li class="{{ Request::is('attendance/processing') ? 'active' : '' }}">
                        <a href="{{ url('attendance/processing') }}">Attendance Processing</a>
                    </li>
                    <li class="{{ Request::is('attendance/list') ? 'active' : '' }}">
                        <a href="{{ url('attendance/list') }}">Attendance View</a>
                    </li>
                    <li class="{{ Request::is('attendance/job-card') ? 'active' : '' }}">
                        <a href="{{ url('attendance/job-card') }}">Job Card</a>
                    </li>
                </ul>
            </li>


        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>