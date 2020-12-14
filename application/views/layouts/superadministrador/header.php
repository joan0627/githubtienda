<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>El rincón de la mascota</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="icon" href="<?php echo base_url();?>assets/img/iconos/icons8-mascotas-16.png" sizes="32x32" type="image/png">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/adminlte.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Charts css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets\plugins\plugins\chart.js\Chart.min.css">

    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"   href="<?php echo base_url();?>assets/plugins/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <!-- DataTable -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/datatables.css">

     <!-- DataTable Select-->
     <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/Select-1.3.1/css/select.dataTables.min.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet"  href="<?php echo base_url();?>assets/plugins/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	<!-- Sweet Alert 2: mensajes animados -->
	<link href="<?php echo base_url();?>assets/plugins/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet">

      <!-- Select2 -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets\plugins\plugins\select2\css\select2.min.css">
   
     <link rel="stylesheet" href="<?php echo base_url();?>assets\plugins\plugins\select2-bootstrap4-theme/select2-bootstrap4.css">
     
     <!-- Clock Picker -->
     <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/plugins/clockpicker-gh-pages/src/clockpicker.css">
     <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/plugins/Easy-Clock-Time-Picker/css/clockface.css">


    <link href="<?php echo base_url();?>assets/css/misestilos.css" rel="stylesheet">

      
       <!-- Tema diferente de bootrap
      <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap-theme.min.css">-->
    
     <!-- jQuery -->
   <script src="<?php echo base_url(); ?>assets/plugins/plugins/jquery/jquery-3.5.1.min.js"></script>



<!-- DateTable -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/datatables.js"></script>
<!-- DateTable Botones -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/Buttons-1.6.3/js/dataTables.buttons.min.js"></script>



<!-- DateTable Botones HTML5-->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/Buttons-1.6.3/js/buttons.html5.min.js"></script>

<!-- DateTable Select-->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/Select-1.3.1/js/dataTables.select.min.js"></script>

<!-- Plugin Sweet Alert 2: mensajes animados y popper: Este plugin se debe cargar siempre antes de ejecutarse por eso lo pusimos en el header-->
<script src="<?php echo base_url(); ?>assets/plugins/plugins/sweetalert2/sweetalert2.all.min.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/plugins/plugins/select2/js/select2.full.min.js"></script>


<!-- Librerias inputMaks-->
<script src="<?php echo base_url(); ?>assets/plugins/plugins/inputmask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>assets\plugins\plugins\inputmask\bindings\inputmask.binding.js"></script>


<!-- Libreria para formatiar la moneda CURRENCY-->
<script src="<?php echo base_url(); ?>assets/plugins/plugins/currencyFormatter.js-master/dist/currencyFormatter.min.js"></script>
	
<!-- Toaster-->
<script src="<?php echo base_url(); ?>assets/plugins/plugins/toaster/toaster.js"></script>
   
  <!-- Toastr-->
<script src="<?php echo base_url(); ?>assets/plugins/plugins/toastr/toastr.min.js"></script>

<!-- JQuery Validate -->
<script src="<?php echo base_url(); ?>assets/plugins/plugins/jquery-validation/jquery.validate.min.js"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
              
            </ul>

           

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                
               
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown user-body">
                    <a class="nav-link" data-toggle="dropdown" href="#">
						<i class=""><img src="<?php echo base_url();?>assets/img/iconos/icons8-notification-26.png"></i>
                        <span id="contadorN" style="font-size:12px; right:14px; top:4px;" class="badge badge-danger navbar-badge"></span>
                    </a>
                    <div style=" overflow: auto;" class="dropdown-menu dropdown-menu-lg fijo dropdown-menu-right">
                     
                    <a id="encabezado" class="dropdown-header" ></i></a>
                    <div id="notificaciones"></div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-footer">No hay más notificaciones</a>
               
                    </div>
                    
                </li>


                <li class=" dropdown user user-menu">
                    <a href="#" class="  nav-link" data-toggle="dropdown">
                    <?php if($this->session->userdata("idRol") == 100 && $this->session->userdata("idUsuario") ==2 ) { ?>
                        <img src="<?php echo base_url()?>assets/img/admin2.png" class="user-image " alt="User Image">
                        <?php }
                            else if($this->session->userdata("idRol") == 100){ ?>
                                 <img src="<?php echo base_url()?>assets/img/admin.png" class="user-image " alt="User Image">
                                 <?php }
                                     else if($this->session->userdata("idRol") == 200){ ?>
                                     <img src="<?php echo base_url()?>assets/img/empleado.png" class="user-image " alt="User Image">
                                     <?php } ?>
                        <span class="hidden-xs"><?php if ($nombre= $this->session->userdata("nombre")){ echo $nombre;}   ?> <i class="fas fa-angle-down right"></i> </span>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-right">
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <a href="<?php echo base_url();?>configuracion/seguridad"><img src="<?php echo base_url();?>assets/img/iconos/icons8-bloquear-30.png"
                              class="nav-icon"> Seguridad</a>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xs-12 text-center">
                                <a id='cerrarsesion' href=""><img src="<?php echo base_url();?>assets/img/iconos/icons8-apagar-26.png"  class=""> Cerrar sesión</a>

                                </div>
                            </div>

                            <!-- /.row -->
                        </li>

                    </ul>
                </li>





                </li>
            </ul>
        </nav>
        <!-- /.navbar -->