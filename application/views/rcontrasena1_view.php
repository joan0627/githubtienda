<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El rincón de la mascota - Restablecer contraseña</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/estilorestablecer2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>
    <div class="login-dark">
        <form action="<?php echo base_url();?>login/restablecer" method="post">
            <h2 class="sr-only">Restablecer contraseña</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <input class="form-control" type="text" name="usernamev"
                    placeholder="Nombre de usuario">
                <?php echo form_error('usernamev', '<p class="text-danger">', '</p>'); ?>
            

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-check"></i> Verificar</button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <a class="btn btn-primary btn-block" href="<?php echo base_url();?>login"><i class="fas fa-arrow-circle-left"></i> Atrás</a>
                    </div>
                </div>
            </div>




            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js">
            </script>
            <link href="<?php echo base_url();?>assets/plugins/plugins/sweetalert2/sweetalert2.min.css"
                rel="stylesheet">

            <script src="<?php echo base_url(); ?>assets/plugins/plugins/toaster/toaster.js"></script>

            <!-- Plugin Sweet Alert 2: mensajes animados y popper: Este plugin se debe cargar siempre antes de ejecutarse por eso lo pusimos en el header-->
            <script src="<?php echo base_url(); ?>assets/plugins/plugins/sweetalert2/sweetalert2.all.min.js"></script>


            <?php if ($this->session->flashdata('verificacionusuario')) { ?>
            <script>
            $.toaster({
                settings: {
                    'timeout': 3500,


                }
            });
            $.toaster({
                message: '<?php echo $this->session->flashdata('verificacionusuario') ?>',
                title: 'Atención',
                priority: 'warning',

            });;
            </script>

            <?php } ?>

</body>

</html>