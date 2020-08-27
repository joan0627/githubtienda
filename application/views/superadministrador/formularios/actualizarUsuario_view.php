<!-- Inicio Content Wrapper. Contains page content -->
<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
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
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Blank Page</li>
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
				<h3 class="card-title">Actualización de usuario</h3>


			</div> <!-- Fin Caja superior -->

			<!-- Inicio form -->
			<form role="form" method="POST">
				<!--Inicio del card body-->
				<div class="card-body ">
					<div class="row">

						<div class="col-md-6">

							<div class="form-group">
								<label>Id</label>
								<input readonly="readonly" name="id" type="text" class="form-control" placeholder="Ninguno" value="<?php echo $clave['idUsuario']; ?>">
							</div>

						</div>

						<div class="col-md-6">

							<div class="form-group">
								<label>Nombre completo</label>
								<input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre" value="<?php echo $clave['nombre']; ?>">
							</div>

						</div>

					</div>



					<div class="row">

						<div class="col-md-6">

							<div class="form-group">
								<label>Celular</label>
								<input name="celular" type="text" class="form-control" placeholder="Ingrese el celular" value="<?php echo $clave['celular']; ?>">
							</div>

						</div>

						<div class="col-md-6">

							<div class="form-group">
								<label>Nombre de usuario</label>
								<input name="username" type="text" class="form-control " placeholder="Ingrese el nombre de usuario" value="<?php echo $clave['nombreUsuario']; ?>">
							</div>

						</div>

					</div>
					<div class="row">


						<div class="col-md-6">
							<div class="form-group">
								<label>Rol</label>
								<select name="rol" class="form-control">

									<option value="<?php echo ($clave['idRol']) ?>">
										<?php
										switch ($clave['idRol']) {
											case 1:
												echo "Administrador";

												echo '<option value="2">Empleado</option>';

												break;
											case 2:
												echo "Empleado";

												echo '<option value="1">Administrador</option>';
										}

										?>
									</option>

								</select>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label>Estado</label>
								<select name="estado" class="form-control">
									<option value="<?php echo ($clave['estado']) ?>">
										<?php
										switch ($clave['estado']) {
											case 1:
												echo "Activo";

												echo '<option value="2">Inactivo</option>';

												break;
											case 2:
												echo "Inactivo";

												echo '<option value="1">Activo</option>';
										}

										?>
									</option>

								</select>
							</div>
						</div>
					</div>







					<!--Fin del card body-->

					<!--Inicio del footer del contenido-->
					<div class="card-footer">

						<button type="submit" id="botonActualizarUsuario" class="btn btn-success col-2">Actualizar</button>

						<a href="<?php echo base_url(); ?>usuario/listausuariosu" class="btn btn-success col-2">Atrás</a>

					</div>
					<!--Fin del footer del contenido-->



			</form>
			<!--Fin del form-->


		</div> <!-- Fin Contenido Total -->


	</section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
