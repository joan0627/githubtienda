<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><img src="<?php echo base_url(); ?>assets/img/iconos/icons8-management-50.png"> Usuarios</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Usuarios</a></li>
						<li class="breadcrumb-item active">Registro de usuarios</li>
					</ol>
				</div>
			</div>
		</div><!-- FIN/.container-fluid -->
	</section>

	<!-- Incio seccion contenido -->
	<section class="content">

		<!-- Inicio Contenido Total -->
		<div class="card  card-success">
			<!-- Incio Caja superior -->
			<div class="card-header">
				<h3 class="card-title">Registro de usuarios </h3>


			</div> <!-- Fin Caja superior -->

			<!-- Inicio form -->
			<form role="form" name="registroUsuario" method="POST">
				<!--Inicio del card body-->
				<div class="card-body ">

					<div class="row">

						<div class="col-md-6">

							<div class="form-group">
								<label>Nombre completo</label> <label style="color: red;"> *</label>
								<input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre" value="<?php echo $nombre; ?>">
								<?php echo form_error('nombre', '<p class="text-danger">', '</p>'); ?>
							</div>

						</div>

						<div class="col-md-6">

							<div class="form-group">
								<label>Celular</label> <label style="color: red;"> *</label>
								<input name="celular" type="text" class="form-control" placeholder="Ingrese el celular" value="<?php echo $celular; ?>">
								<?php echo form_error('celular', '<p class="text-danger">', '</p>'); ?>
							</div>

						</div>

					</div>

					<div class="row">




					</div>


					<div class="row">


						<div class="col-md-6">

							<div class="form-group">
								<label>Nombre de usuario</label> <label style="color: red;"> *</label>
								<input name="username" type="text" class="form-control " placeholder="Ingrese el nombre de usuario" value="<?php echo $nombreUsuario; ?>" >
								<?php echo form_error('username', '<p class="text-danger">', '</p>'); ?>
							</div>

						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Rol</label> <label style="color: red;"> *</label>
								<select name="rol" class="form-control">
								<?php if ($idRol != "") : ?>
                                    <?php foreach ($idRoles as $clave => $valor) : ?>
                                    <?php if ($idRol == $valor->idRol) : ?>

                                    <option hidden value=" <?php echo  $valor->idRol; ?>" selected>
                                        <?php


													echo  $valor->descripcion; ?></option>
                                    <?php
												foreach ($idRoles as $clave => $valor) : ?>


                                    <option value=" <?php echo  $valor->idRol; ?>">
                                        <?php echo  $valor->descripcion; ?></option>

                                    <?php endforeach; ?>

                                    <?php endif;  ?>
                                    <?php endforeach; ?>
                                    <?php else :
										foreach ($idRoles as $clave => $valor) : ?>
                                    <option value="" selected hidden>-Seleccione el tipo de rol-</option>;
                                    <option value=" <?php echo  $valor->idRol; ?>">
                                        <?php echo  $valor->descripcion; ?></option>

                                    <?php endforeach; ?>
                                    <?php endif ?>
								</select>
								<?php echo form_error('rol', '<p class="text-danger">', '</p>'); ?>

							</div>
						</div>


					</div>

					<div class="row">

						<div class="col-md-6">

							<div class="form-group">
								<label>Contraseña</label> <label style="color: red;"> *</label>
								<input name="contrasena" type="password" class="form-control" placeholder="Ingrese la contraseña">
								<?php echo form_error('contrasena', '<p class="text-danger">', '</p>'); ?>
							</div>

						</div>


						<div class="col-md-6">

							<div class="form-group">
								<label>Confirmar contraseña</label> <label style="color: red;"> *</label>
								<input name="confirmarcontrasena" type="password" class="form-control" id="nombre" placeholder="Confirme la contraseña">
								<?php echo form_error('confirmarcontrasena', '<p class="text-danger">', '</p>'); ?>

							</div>

						</div>

					</div>


					<!--Fin del card body-->

					<!--Inicio del footer del contenido-->
					<div class="text-center card-footer">

						<button  style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;" type="submit" id="botonRegistroUsuario" class="btn btn-success col-2"><img src="<?php echo base_url(); ?>assets/img/iconos/icons8-save-100.png">Registrar</button>
						<a  style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;" href="<?php echo base_url(); ?>usuario" class="btn btn-success col-2">Atrás</a>
					</div>
					<!--Fin del footer del contenido-->
				</div>


			</form>
			<!--Fin del form-->


		</div> <!-- Fin Contenido Total -->


	</section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
