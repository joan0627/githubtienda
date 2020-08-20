<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="login-dark content-header" style="background: url(../../../tienda/assets/img/fondo.jpg) ; ">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url(); ?>assets/img/iconos/icons8-people-50.png"> Proveedores</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Proveedores</a></li>
                        <li class="breadcrumb-item active">Lista de proveedores</li>
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
                                <a type="button" role="link" class="btn bg-gray" onclick="location.href='proveedor';"><i class="fas fa-sync-alt"></i></a>

                            </span>

                        </div>

                    </div>

                    <div class="col-auto">

                        <a href="<?php echo base_url(); ?>proveedor/registro" class="btn btn-success"><i class="fas fa-plus-circle"></i> Crear
                            proveedor</a>
                    </div>
        </form>



                </div>
            </div>
   
    </section>

    <!-- Incio seccion contenido -->
    <section class="content">

        <!-- Inicio Contenido Total -->
        <div class="card  card-success">
            <!-- Incio Caja superior -->
            <div class="card-header">
                <h3 class="card-title">Lista de proveedores</h3>

                <div class="card-tools">



                </div>
            </div>
            <!-- Fin Caja superior -->



            <!--Inicio del card body-->
            <div class="card-body p-0 ">
                <table class="table table-striped projects" >
                    <thead>
                        <tr>
                         
                            <th>
                                Documento
                            </th>


                            <th>
                                Nombre
                            </th>

                            <th>
                                Nombre Contacto
                            </th>

                            <th>
                                Celular 
                            </th>

                            <th >
                                Dia visita
                            </th> 
                            <th style="text-align:center; ">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($resultado as $key => $d) : ?>

                        <tr>

                            <td><?php echo  $d->documento; ?></td>
                            <td><?php echo  $d->nombre; ?></td>
                            <td><?php echo  $d->nombreContacto; ?></td>
                            <td><?php echo  $d->celular; ?></td>
                            <td><?php echo  $d->diaVisita; ?></td>


                            <td class="text-right" style="text-align:center;   width: 238px;     ">
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>proveedor/detalle/<?php echo $d->documento; ?>">
                                    <i class="fas fa-eye"></i>
                                    </i>
                                    Ver
                                </a>



                                <a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>proveedor/actualizar/<?php echo $d->documento; ?>">

                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Editar
                                </a>


                                <button type="submit" class="btn btn-danger btn-sm"  data-documento= "<?=$d->documento?>" id="delete" href="borrar/<?php echo $d->documento; ?>"
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

            <div>
            <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
  </ul>
</nav>
            </div>

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

    <?php if ($this->session->flashdata('message')) { ?>
			<script> 
		
        Swal.fire({        
		type: 'success',
		title: '¡Proceso completado!',
		text: '<?= $this->session->flashdata('message'); ?>', 
		
	}); 
		
		
		</script>
          
     <?php } ?>

     <?php if ($this->session->flashdata('actualizar')) { ?>
			<script> 
		
        Swal.fire({        
		type: 'success',
		title: '¡Proceso completado!',
		text: '<?= $this->session->flashdata('actualizar'); ?>', 
		
	}); 
		
		
		</script>
          
     <?php } ?>