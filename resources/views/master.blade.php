<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Job Portal</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{asset("assets/plugins/fontawesome-free/css/all.min.css")}}>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href={{asset("assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}>
    <!-- iCheck -->
    <link rel="stylesheet" href={{asset("assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}>

    <link rel="stylesheet" href={{asset("assets/dist/css/adminlte.min.css")}}>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href={{asset("assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}>

    <!-- DataTables -->
    <link rel="stylesheet" href={{asset("assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}>


    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Scripts -->
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="">

    <div class="wrapper">
        <div id="app">

        </div>
    </div>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src={{asset("assets/plugins/jquery/jquery.min.js")}}></script>
    <!-- jQuery UI 1.11.4 -->
    <script src={{asset("assets/plugins/jquery-ui/jquery-ui.min.js")}}></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    {{-- <script src="  https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> --}}
   

    <!-- Bootstrap 4 -->
    <script src={{asset("assets/plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
    <script src={{asset("assets/plugins/moment/moment.min.js")}}></script>
    <script src={{asset("assets/plugins/daterangepicker/daterangepicker.js")}}></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src={{asset("assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}></script>

    <script src={{asset("assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}></script>


    <!-- DataTables -->
    <script src={{asset("assets/plugins/datatables/jquery.dataTables.min.js")}}></script>
    <script src={{asset("assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}></script>
    <script src={{asset("assets/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}></script>
    <script src={{asset("assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}></script>

    <!-- AdminLTE App -->
    <script src={{asset("assets/dist/js/adminlte.js")}}></script>
    
    
</body>

</html>