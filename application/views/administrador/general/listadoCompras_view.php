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
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Blank Page</li>
					</ol>
				</div>
				
			</div>
			<br>
		</div><!-- FIN/.container-fluid -->
		
		<!--boton crear servicio-->
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

                    <a href="<?php echo base_url();?>compras/registrar" class="btn btn-success"><i class="fas fa-plus-circle"></i> Crear compra</a>
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




							<td class="project-actions text-right ">
								<a class="btn btn-primary btn-sm" href="#">
									<i class="fas fa-eye"></i>
									</i>
									Ver
								</a>



								<!--<a class="btn btn-info btn-sm" href="actualizar">
						
									<i class="fas fa-pencil-alt">
									</i>
									Editar
								</a>--><!--boton editar se desactiva, en compras-->


								<a class="btn btn-danger btn-sm"  href="#"    
								onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')"
								>
									<i class="fas fa-exclamation-circle">
									</i>
									Deshabilitar
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
