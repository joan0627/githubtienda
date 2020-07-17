<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
				<h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-schedule-50.png"> Agenda</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Agenda</a></li>
						<li class="breadcrumb-item active">Programación de citas</li>
					</ol>
				</div>
				
			</div>
			<br>
		</div><!-- FIN/.container-fluid -->
		<div class="container-fluid">
            <div class="row mb-1">

                <div class="col-auto mr-auto col-md-5">

                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Estoy buscando...">
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="button"><i class="fas fa-search"></i></button>
                        </span>
                    </div>


                </div>

                <div class="col-auto">

                    <a href="registrarcita" class="btn btn-success"><i class="fas fa-plus-circle"></i> Crear cita</a>
                </div>


            </div>
        </div>
	</section>

	<!-- Incio seccion contenido -->
	<section class="content">

		<!-- Inicio Contenido Total -->
		<div class="card  card-success">
			<!-- Incio Caja superior -->
			<div class="card-header">
				<h3 class="card-title">Programación de citas</h3>

				<div class="card-tools">
			


				</div>
			</div>
			<!-- Fin Caja superior -->



			<!--Inicio del card body-->
			<div class="card-body p-0">
				<table class="table table-striped projects">
					<thead>
						<tr>
							<th>
								Nombre del cliente
							</th>
							<th>
								Asunto
							</th>
							
							<th>
								Fecha
							</th>
							<th>
								Hora
							</th>
							<th>
								Servicio
							</th>
							<th>
								Estado
							</th>

						</tr>
					</thead>
					<tbody>
						
						<tr>
							<td>Luis David Sánchez Cano</td>
							<td>Peluquiar al gato</td>
							
							<td>25/07/2020</td>
							<td>08:00 a.m</td>
							<td>Peluqueria</td>
							<td> <span class="badge badge-success">Programada</span></td>



							<td class="project-actions text-right ">
							<a class="btn btn-primary btn-sm" href="verdetallecita">
									<i class="fas fa-eye"></i>
									</i>
									Ver
								</a>



								<a class="btn btn-info btn-sm" href="actualizarcita">
						
									<i class="fas fa-pencil-alt">
									</i>
									Editar
								</a>

							</td>


						</tr>

						<tr>

							<td>Alejandro Cano</td>
							<td>Vacunar al perro</td>
							
							<td>20/07/2020</td>
							<td>09:00 a.m</td>
							<td>Vacunación</td>
							<td> <span class="badge badge-warning">En proceso</span></td>

							<td class="project-actions text-right ">
								<a class="btn btn-primary btn-sm" href="verdetallecita">
									<i class="fas fa-eye"></i>
									</i>
									Ver
								</a>



								<a class="btn btn-info btn-sm" href="actualizar">
						
									<i class="fas fa-pencil-alt">
									</i>
									Editar
								</a>

							</td>


						</tr>

					</tbody>
				</table>
			</div>
			<!--Fin del card body-->

			<!--Inicio del footer del contenido-->
			<div class="card-footer">


			</div>
			<!--Fin del footer del contenido-->

		</div> <!-- Fin Contenido Total -->


	</section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
