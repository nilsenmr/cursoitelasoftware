<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso IAIM</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="Views/img/favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="Plugins/fontawesome-free/css/all.min.css">
     <!-- icheck bootstrap -->
    <link rel="stylesheet" href="Plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="Views/css/adminlte.min.css">
    <!-- jQuery -->
    <script src="Plugins/jquery/jquery.min.js"></script>

    <script>

        $(document).ready(function(){
            var jsonM = '<?php if(isset($_GET['error'])){echo $_GET['error'];}?>';
            var mensaje;
            if(jsonM == '1'){
                $(".mensaje").html("Contraseña incorrecta");
                $("#modal").modal({backdrop: 'static', keyboard: false});
            }
            if(jsonM == '2'){
                $(".mensaje").html("Usuario inactivo");
                $('#modal').modal({backdrop: 'static', keyboard: false});			
            }
            if(jsonM == '3'){
                $(".mensaje").html("Usuario bloqueado");
                $('#modal').modal({backdrop: 'static', keyboard: false});			
            }
            if(jsonM == '4'){
                $(".mensaje").html("Usuario no existe");
                $('#modal').modal({backdrop: 'static', keyboard: false});			
            }
        });

    </script>
   

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="https://aeropuerto-maiquetia.com.ve/IAIM/" target="_blank">
                <img src="Views/img/loguito.png" alt="IAIM">
            </a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">INICIO DE SESIÓN</p>
                <form action="Controllers/c_usuario.php" method="POST" id="form_login">
                    <!--input-group-->
                    <div class="input-group form-group mb-3">
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Correo">
                        <div class="input-group-append"><!--input-group-append-->
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div><!--/ input-group-append-->
                    </div>
                     <!--/ input-group-->
                    <div class="input-group form-group mb-3">
                        <input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" id="btn_ingresar">Ingresar</button>
                </form>
            </div>

            <!--Modal-->
            <div class="modal fade" tabindex="-1" role="dialog" id="modal">
                <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Error</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <p class="mensaje"></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
		    </div><!-- /.modal -->

        </div>
    </div>

<!-- jQuery -->
<script src="Plugins/jquery/jquery.min.js"></script>
<script src="Plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="Plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="Plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="Views/js/adminlte.min.js"></script>
<!-- Login js -->
<script src="Views/js/login.js"></script>
</body>
</html>