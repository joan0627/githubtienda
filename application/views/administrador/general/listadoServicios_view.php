<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
				<h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-barbershop-50.png">Servicios</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Servicio</a></li>
						<li class="breadcrumb-item active">Lista de servicios</li>
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
				<h3 class="card-title">Lista de servicios</h3>

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
								Imagen
							</th>
							<th>
								Código
							</th>
							<th>
								Nombre
							</th>
							<th >
								Descripción
							</th>
							<th>
								Precio
							</th>


						</tr>
					</thead>
					<tbody>
						
						<tr>

							<td>
							<div class="timeline-body">
                                    <img src="<?php echo base_url();?>assets/img/servicios/peluqueria.png" alt="...">

                                </div>
								
						
							</td>
							<td>P1203</td>
							<td> Peluqueria canina</td>
							<td style="width:310px;">Corte y cepillado de canino con shampoo especial antipulgas y loción protectora.</td>
							<td><label style="color:green; ">$25.000</label></td>



							<td class="project-actions text-right ">
								<a class="btn btn-primary btn-sm" href="verDetalle">
									<i class="fas fa-eye"></i>
									</i>
									Ver
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
