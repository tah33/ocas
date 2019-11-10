
<!DOCTYPE html>
<html>
<head>    
    <title>OCASUS</title>
    <link rel="shortcut icon" href="{{ asset('public/favicon.jpg') }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- Skins -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

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
                  <small>Member since {{Auth::guard('admin') ? Auth::guard('admin')->user()->created_at : Auth::guard('student')->user()->created_at->diffForhumans}}</small>
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
  <!-- Left side column. contains the logo and sidebar -->
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
        <!-- Settings Area -->
        <li class="header">Dept Navigation</li>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-education"></i> <span>Department</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('departments/create')}}"><img src="{{asset('icons/dept.svg')}}" height="21" width="21"></i>Create Department</a></li>
            <li><a href="{{url('departments')}}"><i class="glyphicon glyphicon-education"></i>Departments Info</a></li>
          </ul>
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
        <!-- Exam Setting -->
        <li class="header">Exam Setting</li>
        <li>
          <a href="{{url('exams/create')}}">
            <i class="glyphicon glyphicon-book"></i> <span>Set Exam Time</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
    
@yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
@stack('script-file');
<script>
    $(function () {
        $(".select2").select2();
        $(".btn-success").click(function () {
            var html = $(".clone").html();
            $(".increment").before(html);
        });

        $("body").on("click", ".btn-danger", function () {
            $(this).parents(".control-group").remove();
        });
    });
    $(document).ready(function () {
        $("#formButton").click(function () {
            $("#form1").toggle();
        });

    });
</script>
</body>
</html>
