<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <!-- Dashboard Area -->
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a href="{{url('home')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <!-- Settings Area -->
            <li class="header">User Settings</li>
            <li class="treeview {{ Request::is('profiles/*') || Request::is('change-password') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-gear"></i> <span>Settings</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('profiles/*') ? 'active' : '' }}">
                        <a href="{{url('profiles',Auth::guard('admin')->check() ? Auth::guard('admin')->id() : Auth::guard('student')->id())}}"><i
                                class="glyphicon glyphicon-user"></i>Edit Profile</a></li>
                    <li class="{{ Request::is('change-password') ? 'active' : '' }}"><a href="{{url('change-password')}}"><i class="glyphicon glyphicon-eye-close"></i>Change
                            Password</a></li>
                </ul>
            </li>
        @if(Auth::guard('admin')->check())

            <!-- Students Info -->
                <li class="header">Students</li>
                <li class=" {{ Request::is('students') ? 'active' : '' }}">
                    <a href="{{url('students')}}">
                        <i class="glyphicon glyphicon-user"></i> <span>Students</span>
                        <span class="pull-right-container">
            </span>
                    </a>
                </li>
                <!-- Dept Settings -->
                <li class="header">Departments</li>
                <li class="treeview {{ Request::is('departments') || Request::is('departments/*') ? 'active' : '' }}">
                    <a href="#">
                        <i class="glyphicon glyphicon-education"></i> <span>Department Setting</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{Request::is('departments/create') ? 'active' : ''}}"><a href="{{url('departments/create')}}"><i class="fa fa-plus-circle"></i>Create Department</a></li>
                        <li class=" {{ Request::is('departments') ? 'active' : '' }}"><a href="{{url('departments')}}"><i
                                    class="fa fa-university"></i>Departments</a></li>
                    </ul>
                </li>
                <!-- Question -->
                <li class="header">Subjects</li>
                <li class="treeview {{ Request::is('subjects') || Request::is('subjects/*') ? 'active' : '' }}">
                    <a href="#">
                        <i class="glyphicon glyphicon-book"></i> <span>Subject Setting</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{Request::is('subjects/create') ? 'active' : ''}}"><a href="{{url('subjects/create')}}"><i class="fa fa-plus"></i>Create Subject</a>
                        </li>
                        <li class="{{Request::is('subjects') ? 'active' : ''}}"><a href="{{url('subjects')}}"><i class="fa fa-book"></i>Subjects</a></li>
                    </ul>
                </li>
                <!-- Students Info -->
                <li class="header">Questions Setting</li>
                <li class="{{Request::is('questions/*') || Request::is('questions') ? 'active' : ''}}">
                    <a href="{{url('questions')}}">
                        <i class="glyphicon glyphicon-question-sign"></i> <span>Questions</span>
                        <span class="pull-right-container">
            </span>
                    </a>
                </li>
                <li class="header">Exam Setting</li>
                <li class="{{Request::is('exams/*')  ? 'active' : ''}}">
                    <a href="{{url('exams/create')}}">
                        <i class="fa fa-pencil"></i> <span>Set Exam Rule</span>
                        <span class="pull-right-container">
            </span>
                    </a>
                </li>
                <li class="header">Common Subjects</li>
                <li class="treeview {{ Request::is('commons') || Request::is('commons/*') ? 'active' : '' }}">
                    <a href="#">
                        <i class="glyphicon glyphicon-education"></i> <span>Common Subject</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{  Request::is('commons/create') ? 'active' : '' }}"><a href="{{url('commons/create')}}"><i class="fa fa-check"></i>Choose
                                Subject</a></li>
                        <li class="{{  Request::is('commons') ? 'active' : '' }}"><a href="{{url('commons')}}"><i class="fa fa-book"></i>Subjects</a></li>
                    </ul>
                </li>
            @endif

            @if(Auth::guard('student')->check())
            <li class="header">Tests</li>

            <li class="{{  Request::is('tests/create') ? 'active' : '' }}">
                <a href="{{url('tests/create')}}">
                    <i class="fa fa-question-circle"></i> <span>Test</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
                @endif
            @if(Auth::guard('admin')->check())
            <li class="header">Exam Inspect</li>
                <li class="{{  Request::is('tests/*') || Request::is('tests') ? 'active' : '' }}">
                    <a href="{{url('tests')}}">
                        <i class="fa fa-question-circle"></i> <span>Test</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
