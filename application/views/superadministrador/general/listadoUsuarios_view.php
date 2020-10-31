<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-management-50.png"> Usuarios</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
                        <li class="breadcrumb-item active">Lista de usuarios</li>
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
                                <button class="btn bg-primary" type="submit"><i class="fas fa-search"></i></button>
							</span>
     					
                            <span class="col-auto input-group-btn">
                                <a type="button" role="link" class="btn bg-success" onclick="location.href='usuario';"><i class="fas fa-sync-alt"></i></a>

                            </span>

                        </div>

                    </div>

                    <div class="col-auto">

                        <a href="<?php echo base_url(); ?>usuario/registro" class="btn btn-success"><i class="fas fa-plus-circle"></i> Crear
                            usuario</a>
                    </div>
        </form>



    </section>

    <!-- Incio seccion contenido -->
    <section class="content">

        <!-- Inicio Contenido Total -->
        <div class="card  card-success">
            <!-- Incio Caja superior -->
            <div class="card-header">
                <h3 class="card-title">Lista de usuarios</h3>

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
                                Id
                            </th>
                            <th>
                                Nombre completo
                            </th>

                            <th>
                                Nombre de usuario
                            </th>
                            <th class="text-center">
                                Rol
                            </th>
                            <th>
                                Fecha de registro
                            </th>
                            <th style="text-align:center;">
                                Estado
                            </th>
                            <th style="text-align:center;">
                                Acciones
                            </th>

                        </tr>
                    </thead>


                    <tbody>


                    <?php foreach ($resultado as $key => $d) : ?>
                        <tr>



                            <td><?php echo  $d->idUsuario;  ?></td>
                            <td><?php echo  $d->nombre; ?></td>
                            <td><?php echo  $d->nombreUsuario; ?></td>
                            <td class="text-center">
                                <?php 
								if($d->idRol==1)
								{
								echo'<span class="badge badge-administrador">Administrador</span>';
								}
								elseif($d->idRol==2)  echo'<span class="badge badge-empleado">Empleado</span>';

							?>
                            </td>
                            <td style="text-align:center;"><?php echo  $d->fechaRegistro; ?></td>
                            <td style="text-align:center;">
                                <?php
							
								if($d->estado==1)
								{
								echo'<span class="badge badge-success">Activo</span>';

								}
								elseif($d->estado==2) echo '<span class="badge badge-danger">Inactivo</span>';
							
								?>
                            </td>
                            <td class=" text-right " style="text-align:center;   width: 238px;     ">
                                <a class="btn btn-primary btn-sm"
                                href="<?php echo base_url(); ?>usuario/detalle/<?php echo $d->idUsuario; ?>">
                                    <i class="fas fa-eye"></i>
                                    </i>
                                    Ver
                                </a>



                                <a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>usuario/actualizar/<?php echo $d->idUsuario; ?>">

                                    <?php

									/*Esta es otra manera de pasar el parametro por la url al pulsar un botón
									
								     href="<?=//base_url('usuario/actualizar/'. $d->documento)?>"

                                    */

                                    ?>



                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Editar
                                </a>


                                <a class="btn btn-danger btn-sm" href="borrar/<?php  echo $d->idUsuario;?>"
                                    onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                    <i class="fas fa-trash">
                                    </i>
                                    Borrar
                                </a>
                            </td>


                        </tr>

                        <?php endforeach;?>

                    </tbody>
                </table>
            </div>
            <!--Fin del card body-->

            <!--Inicio del footer del contenido-->
            <div class="card-footer">


            <?php if($this->session->flashdata('busqueda')): ?>
            
            <div class="alert alert-warning text-center" > <?= $this->session->flashdata('busqueda');?> </div> 
           
            
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