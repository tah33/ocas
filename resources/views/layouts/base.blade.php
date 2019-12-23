<!DOCTYPE html>
<html>
<head>
    <title>@yield('backend.title')</title>
    <link rel="shortcut icon" href="{{ asset('icons/favicon.png') }}"/>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{URL::asset('assets/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::asset('assets/font-awesome/css/font-awesome.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{URL::asset('assets/select2/dist/css/select2.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset('dist/css/AdminLTE.min.css')}}">
    <!-- Skins -->
    <link rel="stylesheet" href="{{URL::asset('dist/css/skins/_all-skins.min.css')}}">
    <!-- Datatable -->
    <link rel="stylesheet" href="{{URL::asset('assets/datatables/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css')}}">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('css/log.css')}}"> -->
    @stack('backend.css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
@yield('backend.base.content')

<script src="{{URL::asset('assets/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{URL::asset('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/datatables/js/dataTables.bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('dist/js/demo.js')}}"></script>
<script src="{{URL::asset('assets/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{URL::asset('http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js')}}"></script>
{!! Toastr::message() !!}

<script>
    $(function () {
        //Datatable
        $('#search').DataTable({
            language: {
                searchPlaceholder: "Type Something to Search"
            }
        });
        //Select2
        $("#select2").select2();
    });
    function goBack() {
  window.history.back();
}
</script>
@stack('backend.js')
</body>
</html>
