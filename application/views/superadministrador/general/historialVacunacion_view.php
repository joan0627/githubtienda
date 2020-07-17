<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
				<h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-syringe-50.png"> Historial de vacunación</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Clientes</a></li>
						<li class="breadcrumb-item active">Historial de clientes</li>
						<li class="breadcrumb-item active">Historial de vacunación </li>
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

                    <a href="crearvacuna" class="btn btn-success"><i class="fas fa-plus-circle"></i> Crear vacuna</a>
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
				<h3 class="card-title">Lista de vacunas</h3>

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
							<th >
								Marca
							</th>
							<th >
								Tipo vacuna
							</th>
							<th >
								Precio
							</th>

						</tr>
					</thead>
					<tbody>
						
						<tr>

						   
							<td>851515</td>
							<td style="width: 500px">Vacuna para la inmunización y prevención de eteritis canina causada por parvovirus canino</td>
							
							<td >Biozoo</td>
							<td class="">Canina</td>
							<td><label style="color:green; ">$80.000</label></td>



							<td class="project-actions text-right ">
								<a class="btn btn-primary btn-sm" href="<?php echo base_url();?>cliente/verDetalle">
									<i class="fas fa-eye"></i>
									</i>
									Ver
								</a>



								<a class="btn btn-info btn-sm" href="actualizar">
						
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
