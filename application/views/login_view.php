<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El rincón de la mascota - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <link href="<?php echo base_url();?>assets/plugins/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="<?php echo base_url(); ?>assets/plugins/plugins/toaster/toaster.js"></script>

    <!-- Plugin Sweet Alert 2: mensajes animados y popper: Este plugin se debe cargar siempre antes de ejecutarse por eso lo pusimos en el header-->
    <script src="<?php echo base_url(); ?>assets/plugins/plugins/sweetalert2/sweetalert2.all.min.js"></script>
</head>



<body>




    <div class="login-dark">
        <form action="<?php echo base_url();?>login/iniciarsesion" method="post">
       
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="username"
                    placeholder="Nombre de usuario" value="<?php echo $username;?>">
                    <?php echo form_error('username', '<p class="text-danger">', '</p  >'); ?>
                </div>
            <div class="form-group"><input class="form-control" type="password" name="password"
                    placeholder="Contraseña">  <?php echo form_error('password', '<p class="text-danger">', '</p  >'); ?>
                </div>
            <div class="form-group"><button id="iniciarsesion" class="btn btn-primary btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Iniciar
                    sesión</button></div><a href="<?php echo base_url();?>login/restablecer" class="forgot">¿Ha olvidado
                su contraseña?</a>
        </form>
        
    </div>

    
  
   
   



    <?php if ($this->session->flashdata('erroriniciosesion')) { ?>
    <script>
    $.toaster({
        settings: {
            'timeout': 3500,


        }
    });
    $.toaster({
        message: '<?php echo $this->session->flashdata('erroriniciosesion') ?>',
        title: 'Error',
        priority: 'danger',

    });;
    </script>

    <?php } ?>

    <?php if ($this->session->flashdata('authiniciosesioninv')) { ?>
    <script>
    $.toaster({
        settings: {
            'timeout': 3500,


        }
    });
    $.toaster({
        message: '<?php echo $this->session->flashdata('authiniciosesioninv') ?>',
        title: 'Atención',
        priority: 'warning',

    });;
    </script>

    <?php } ?>


    <?php if ($this->session->flashdata('restablecercontrasenaok')) { ?>
    <script>
    $.toaster({
        settings: {
            'timeout': 5500,


        }
    });
    $.toaster({
        message: '<?php echo $this->session->flashdata('restablecercontrasenaok') ?>',
        title: 'Proceso completado',
        priority: 'success',

    });;
    </script>

    <?php } ?>



</body>

</html>