<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="login-dark content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-price-tag-50.png"> Productos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Productos</a></li>
                        <li class="breadcrumb-item active">Lista de productos</li>
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
                                <a type="button" role="link" class="btn bg-gray" onclick="location.href='producto';"><i class="fas fa-sync-alt"></i></a>

                            </span>

                        </div>

                    </div>

                    <div class="col-auto">

                        <a href="<?php echo base_url(); ?>producto/registro" class="btn btn-success"><i class="fas fa-plus-circle"></i> Crear
                            producto</a>
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
                <h3 class="card-title">Lista de productos</h3>

                <div class="card-tools">



                </div>
            </div>
            <!-- Fin Caja superior -->



            <!--Inicio del card body-->
            <div class="card-body p-0 ">
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
                                Categoria
                            </th>

                            <th >
                                Marca
                            </th> 

                            <th>
                                 Existencia
                            </th>

                            <th >
                                Precio
                            </th> 

                            <th style="text-align:center; ">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($resultado as $key => $d) : ?>

                        <tr>

                            <td><?php echo  $d->idProducto;?></td>
                            <td><?php echo  $d->nombreProducto;?></td>
                            <td><?php echo  $d->descripcion;?></td>
                            <td><?php echo  $d->descripcionMarca;?></td>
                            <td><?php echo  $d->existencia;?></td>                       
                            <td><?php echo "<label style='color:green; '>$$d->precio</label>"?></td>
                          

                            <td class="text-right" style="text-align:center;   width: 238px;     ">
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>producto/detalle/<?php echo $d->idProducto; ?><?php  ?>">
                                    <i class="fas fa-eye"></i>
                                    </i>
                                    Ver
                                </a>



                                <a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>producto/actualizar/<?php echo $d->idProducto; ?>">

                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Editar
                                </a>


                                <button type="submit" class="btn btn-danger btn-sm"   data-documento= "<?=$d->idProducto?>" id="deleteProducto" href="borrar/<?php echo $d->idProducto; ?>"
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

    <?php if ($this->session->flashdata('message')) { ?>
			<script> 
		
        Swal.fire({        
		type: 'success',
		title: '¡Proceso completado!',
		text: '<?= $this->session->flashdata('message'); ?>', 
		
	}); 
		
		
		</script>
          
     <?php } ?>