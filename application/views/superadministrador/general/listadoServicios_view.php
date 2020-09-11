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
		<form method="get">
			<div class="container-fluid">
                <div class="row mb-1">

                    <div class="col-auto col-md-4 mr-auto ">
                        <div class="input-group  mb-3">

                            <input name="buscar" type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn bg-gray" type="submit"><i class="fas fa-search"></i></button>
							</span>

                            <span class="col-auto input-group-btn">
                                <a type="button" role="link" class="btn bg-gray" onclick="location.href='servicio';"><i class="fas fa-sync-alt"></i></a>

                            </span>

                        </div>

                    </div>

                    <div class="col-auto">

                        <a href="<?php echo base_url(); ?>servicio/registro" class="btn btn-success"><i class="fas fa-plus-circle"></i> Crear
                            Servicio</a>
                    </div>




                </div>
            </div>
        </form>


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
								Código
							</th>
							<th>
								Nombre
							</th>
							<th >
								Tipo servicio
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

							<?php foreach ($resultado as $key => $d) : ?>
						<tr>

							<td><?php echo  $d->idServicio;?></td>
							<td><?php echo  $d->nombreServicio;?></td>
							<td><?php echo  $d->descripcionTipoServicio;?></td>
							<td><?php echo  $d->descripcion;?></td>
							<td style="color:green; "><label><?php echo  $d->precio;?></label></td>
								



								<td class="project-actions text-right ">
									<a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>servicio/detalle/<?php echo $d->idServicio; ?>">
										<i class="fas fa-eye"></i>
										</i>
										Ver
									</a>



									<a class="btn btn-info btn-sm" href="actualizarserviciosu">
							
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
 					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<!--Fin del card body-->

			<!--Inicio del footer del contenido-->
			<div class="card-footer">

			<?php if($this->session->flashdata('busqueda')): ?>
            
			<div class="alert alert-warning text-center" > <?= $this->session->flashdata('busqueda'); $this->session->sess_destroy();?> </div> 
		 
			
		 <?php endif?>
			</div>
			<!--Fin del footer del contenido-->






		</div> <!-- Fin Contenido Total -->


	</section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
