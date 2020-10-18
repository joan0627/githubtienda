<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>El rincón de la mascota</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="<?php echo base_url();?>assets/plugins/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/adminlte.min.css">

    <!-- DataTable -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/datatables.css">

     <!-- DataTable Select-->
     <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/Select-1.3.1/css/select.dataTables.min.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="<?php echo base_url();?>assets/plugins/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/plugins/daterangepicker/daterangepicker.css">
    
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	<!-- Sweet Alert 2: mensajes animados -->
	<link href="<?php echo base_url();?>assets/plugins/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet">
   
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/plugins/plugins/jquery/jquery-3.5.1.min.js"></script>

    <!-- Plugin Sweet Alert 2: mensajes animados y popper: Este plugin se debe cargar siempre antes de ejecutarse por eso lo pusimos en el header-->
    <script src="<?php echo base_url(); ?>assets/plugins/plugins/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- Toaster-->
    <script src="<?php echo base_url(); ?>assets/plugins/plugins/toaster/toaster.js"></script>
    <!-- Toastr-->
<script src="<?php echo base_url(); ?>assets/plugins/plugins/toastr/toastr.min.js"></script>

    <link href="<?php echo base_url();?>assets/css/misestilos.css" rel="stylesheet">

      <!-- Select2 -->
      <link href="<?php echo base_url();?>assets/plugins/plugins/select2/css/select2.min.css" rel="stylesheet">
      
      <!-- Toastr -->
      <link href="<?php echo base_url();?>assets/plugins/plugins/toastr/toastr.min.css" rel="stylesheet">

      
       <!-- Tema diferente de bootrap
      <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap-theme.min.css">-->

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
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
						<i class=""><img src="<?php echo base_url();?>assets/img/iconos/icons8-notification-26.png"></i>
                        <span style="font-size:12px; right:14px; top:4px; 	 " class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">3 Notificaciones</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
							<i style="color:#28A745;" class="fas fa-clock mr-2"></i>Cita a las 19:30 PM
							
                         
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
						
                            <i style="color:#C6303E;"class="fas fa-exclamation mr-3"></i>Cambiar estado de cita ID #8939
                         
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
						<i style="color:#28A745;" class="fas fa-clock mr-2"></i>Cita a las 15:30 PM
                     
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Ver todas las notificaciones</a>
                    </div>
                </li>


                <li class=" dropdown user user-menu">
                    <a href="#" class="  nav-link" data-toggle="dropdown">
                        <img src="<?php echo base_url()?>assets/img/avatarjoan.jpg" class="user-image " alt="User Image">
                        <span class="hidden-xs"><?php if ($nombre= $this->session->userdata("nombre")){ echo $nombre;}   ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <a href="<?php echo base_url();?>usuario/perfilusuariosu">Mi perfil</a>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <a id='cerrarsesion'href="">Cerrar Sesión</a>
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
