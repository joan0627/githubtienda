<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El rincón de la mascota - Pregunta de seguridad</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/estilorestablecer2.css">
</head>

<body>
    <div class="login-dark">
        <form action="<?php echo base_url();?>login/iniciarsesion" method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group">

			<select name="tipoDocumento" class="form-control">
									
                                    <option hidden selected>-Seleccione la pregunta de seguridad-</option>
                                    <option value="1">¿Cuál es tu comida favorita?</option>
                                    <option value="2">¿Cómo se llamaba tu primera mascota?</option>
                                    <option value="3">¿En qué ciudad nació tu madre?</option>
                                    <option value="4">¿En qué ciudad nació tu madre?</option>
                                    <option value="5">¿Con qué soñaba trabajar de pequeño?</option>
                                </select>




			</div>
            <div class="form-group"><input class="form-control" type="text" name="respuesta" placeholder="Respuesta"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Establecer</button></div></form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
