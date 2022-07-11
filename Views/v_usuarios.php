<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios - IAIM</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../Views/img/favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Plugins/fontawesome-free/css/all.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../Plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../Plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../Plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../Plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!--Date range de DataTables-->
    <link rel="stylesheet" href="../Plugins/datatables-dateTime/css/dataTables.dateTime.min.css">
    <!--Prueba de date range de DataTables-->
    <!-- Theme style -->
    <link rel="stylesheet" href="../Views/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../Plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../Plugins/daterangepicker/daterangepicker.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../Plugins/sweetalert2/sweetalert2.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../Plugins/summernote/summernote-bs4.min.css"> 

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="img/loguito.png" alt="IAIM" height="60" width="60">
        </div>

        <?php include_once('includes/sidebar.php'); ?>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <h1><span class="fas fa-users"></span> Usuarios</h1>
                        </div>
                        <div class="col-sm-6 text-center">
                            <!--include modals-->
                        </div>
                    </div>



                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="x_panel">
                    <div class="x_title">
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <!-- ajax -->
                            <div class='outer_div'></div><!-- Carga los datos ajax -->
                            <span id="loader"></span>
                            <!-- /ajax -->
                        </div>
                    </div>
            </section>
        </div>
    </div>

<?php include_once('includes/footer.php')?>
<!-- jQuery -->
<script src="../Plugins/jquery/jquery.min.js"></script>
<!-- Usuarios JS -->
<script src="../Views/js/usuarios.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../Plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../Plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../Plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../Plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../Plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../Plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../Plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../Plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<!--Date range de DataTables-->
<script src="../Plugins/moment/moment.min.js"></script>
<script src="../Plugins/datatables-dateTime/js/dataTables.dateTime.min.js"></script>
<!--End Date range de DataTables-->
<script src="../Plugins/jszip/jszip.min.js"></script>
<script src="../Plugins/pdfmake/pdfmake.min.js"></script>
<script src="../Plugins/pdfmake/vfs_fonts.js"></script>
<script src="../Plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../Plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../Plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- ChartJS -->
<script src="../Plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../Plugins/sparklines/sparkline.js"></script>
<!-- bs-custom-file-input -->
<script src="../Plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="../Plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../Plugins/moment/moment.min.js"></script>
<script src="../Plugins/daterangepicker/daterangepicker.js"></script>
<!-- SweetAlert2 -->
<script src="../Plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../Plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="../Views/js/adminlte.js"></script>

<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

</body>

</html>