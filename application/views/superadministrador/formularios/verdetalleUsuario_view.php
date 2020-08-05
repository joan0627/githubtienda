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
				<h3 class="card-title">Ver detalle del usuario</h3>


			</div> <!-- Fin Caja superior -->

			<!-- Inicio form -->
			<form role="form" method="POST">
				<!--Inicio del card body-->
				<div class="card-body ">

					<div class="row">

						<div class="col-md-6">

							<div class="form-group">
								<label>Id</label>
								<input readonly="readonly" name="id" type="text" class="form-control" placeholder="Ninguno" value="<?php echo $clave['celular']; ?>">
							</div>

						</div>

						<div class="col-md-6">

							<div class="form-group">
								<label>Nombre completo</label>
								<input readonly="readonly" name="nombre" type="text" class="form-control" placeholder="Ninguno" value="<?php echo $clave['nombre']; ?>">
							</div>

						</div>



					</div>


					<div class="row">


						<div class="col-md-6">

							<div class="form-group">
								<label>Celular</label>
								<input readonly="readonly" name="celular" type="text" class="form-control" placeholder="Ninguno" value="<?php echo $clave['celular']; ?>">
							</div>

						</div>

						<div class="col-md-6">

							<div class="form-group">
								<label>Nombre de usuario</label>
								<input readonly="readonly" name="username" type="text" class="form-control " placeholder="Ninguno" value="<?php echo $clave['username']; ?>">
							</div>

						</div>




					</div>
					<div class="row">

						<div class="col-md-6">
							<div class="form-group">
								<label>Rol</label>
								<input readonly="readonly" name="rol" type="text" class="form-control " placeholder="Ninguno" value="<?php
																																		if ($clave['rol'] == 1) {
																																			echo 'Administrador';
																																		} else {
																																			if ($clave['rol'] == 2) {
																																				echo 'Empleado';
																																			}
																																		}

																																		?>">
							</div>

						</div>


						<div class="col-md-6">
							<div class="form-group">
								<label>Estado</label>
								<input readonly="readonly" name="estado" type="text" class="form-control " placeholder="Ninguno" value="<?php
																																		if ($clave['estado'] == 1) {
																																			echo 'Activo';
																																		} else {
																																			if ($clave['estado'] == 2) {
																																				echo 'Inactivo';
																																			}
																																		}


																																		?>">
							</div>
						</div>
					</div>







					<!--Fin del card body-->

					<!--Inicio del footer del contenido-->
					<div class="card-footer">

						<a href="../listausuariosu" class="btn btn-success col-2">Atrás</a>

					</div>
					<!--Fin del footer del contenido-->



			</form>
			<!--Fin del form-->


		</div> <!-- Fin Contenido Total -->


	</section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
