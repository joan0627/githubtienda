<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
				<h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-pill-50.png">Desparasitación</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Desparasitación</a></li>
						<li class="breadcrumb-item active">Lista de medicamentos</li>
					</ol>
				</div>
				
			</div>
			<br>
		</div><!-- FIN/.container-fluid -->
		
		<!--boton crear servicio-->
		<div class="container-fluid">
            <div class="row mb-1">

			<div class="col-auto col-md-6 mr-auto ">
                    <div class="input-group  mb-3">
                        <div class="input-group-prepend">
                            <button type="button" class="btn bg-gray dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-filter"></i> Filtrar
                            </button>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a href="#">Activo</a></li>
                                <li class="dropdown-item"><a href="#">Inactivo</a></li>
                                <li class="dropdown-item"><a href="#">Administrador</a></li>
                                <li class="dropdown-item"><a href="#">Empleado</a></li>

                            </ul>


                        </div>
                        <!-- /btn-group -->
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn bg-gray" type="button"><i class="fas fa-search"></i></button>
                        </span>
                    </div>
                </div>

                <div class="col-auto">

                    <a href="<?php echo base_url();?>servicio/crearmedicamento" class="btn btn-success"><i class="fas fa-plus-circle"></i> Crear medicamento</a>
                </div>
            </div>
        </div>
		<!--Fin boton crear servicio-->

	</section>

	<!-- Incio seccion contenido -->
	<section class="content">

		<!-- Inicio Contenido Total -->
		<div class="card  card-success">
			<!-- Incio Caja superior -->
			<div class="card-header">
				<h3 class="card-title">Lista de medicamentos</h3>

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
							   Código
							</th>
							<th>
								Nombre
							</th>
							<th>
								Laboratorio
							</th>
							<th >
								Tipo
							</th>
							<th>
								Precio
							</th>


						</tr>
					</thead>
					<tbody>
						
						<tr>

						
							<td>453</td>
							<td> NexGard Matapulgas y garrapatas</td>
							<td>FontLine Labs</td>
							<td>Canino</td>
							<td><label style="color:green; ">$35.000</label></td>



							<td class="project-actions text-right ">
								<a class="btn btn-primary btn-sm" href="#">
									<i class="fas fa-eye"></i>
									</i>
									Ver
								</a>



								<a class="btn btn-info btn-sm" href="#">
						
									<i class="fas fa-pencil-alt">
									</i>
									Editar
								</a>


								<a class="btn btn-danger btn-sm"  href="#"    
								onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')"
								>
									<i class="fas fa-trash">
									</i>
									Borrar
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
