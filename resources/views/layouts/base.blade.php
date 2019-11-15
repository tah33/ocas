<!DOCTYPE html>
<html>
<head>
    <title>@yield('backend.title')</title>
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
    <!-- Datatable -->
    <link rel="stylesheet" href="{{asset('bower_components/datatables/css/dataTables.bootstrap.min.css')}}">

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    @stack('backend.css')
</head>
<body class="hold-transition skin-blue sidebar-mini">

@yield('backend.base.content')

<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('bower_components/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables/js/dataTables.bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
@stack('script-file');
<script>
    $(function () {
            //Datatable
            $('#search').DataTable({
                language: {
                    searchPlaceholder: "Search By ID/Email/Name"
                }
            });
            //Select2
        $(".select2").select2();
    });

</script>
@stack('backend.js')
</body>
</html>
