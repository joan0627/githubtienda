<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
				<h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-delivery-50.png">Compras</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Compras</a></li>
						<li class="breadcrumb-item active">Historial de compras</li>
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

                    <a href="<?php echo base_url();?>compras/registrarcomprasu" class="btn btn-success"><i class="fas fa-plus-circle"></i> Crear compra</a>
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
				<h3 class="card-title">Historial de compras</h3>

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
							Factura de compra N°
							</th>
							<th>
								Nit
							</th>
							<th>
							  Proveedor
							</th>
							<th>
								Usuario
							</th>
							<th>
								Valor
							</th>
							<th>
								Fecha 
							</th>
							<th>
								Fecha de registro
							</th>
							<th>
								Estado
							</th>


						</tr>
					</thead>
					<tbody>
						
						<tr>

							<td>0258</td>
							<td>811.425.369</td>
							<td>Solla</td>
							<td>juanito123</td>
							<td>$202.301</td>
							<td>2/06/2020</td>
							<td>27/06/2020</td>
							<td class="text-center"><span class="badge badge-success">Registrado</span></td>



							<td class="project-actions text-right ">
								<a class="btn btn-primary btn-sm" href="#">
								<i class="fas fa-file-alt"></i>
									Generar
								</a>



								<!--<a class="btn btn-info btn-sm" href="actualizar">
						
									<i class="fas fa-pencil-alt">
									</i>
									Editar
								</a>--><!--boton editar se desactiva, en compras-->


								<a class="btn btn-danger btn-sm"  href="#"    
								onclick="return confirm('¿Estás seguro que deseas anular esta compra?')"
								>
								<i class="fas fa-window-close"></i> 
									Anular
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
