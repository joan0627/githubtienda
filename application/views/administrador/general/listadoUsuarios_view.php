<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-management-50.png" > Usuarios</h1>
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

                    <a href="guardar" class="btn btn-success"><i class="fas fa-plus-circle"></i> Crear usuario</a>
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
                                Documento
                            </th>
                            <th>
                                Nombre completo
                            </th>

                            <th>
                                Nombre de usuario
                            </th>
                            <th>
                                Rol
                            </th>
                            <th>
                                Estado
                            </th>
                            <th>
                                Fecha de registro
                            </th>
                            <th style="text-align:center;">
                                Acciones
                            </th>

                        </tr>
                    </thead>


                    <tbody>


                        <?php foreach( $resultado as $key => $d) :?>
                        <tr>



                            <td><?php echo  $d->documento;  ?></td>
                            <td><?php echo  $d->nombre; ?></td>
                            <td><?php echo  $d->username; ?></td>

                            <td>
                                <?php 
								if($d->rol==1)
								{
								echo'Administrador';

								}
								elseif($d->rol==2) echo 'Empleado';

							?>
                            </td>
                            <td>
                                <?php
							
								if($d->estado==1)
								{
								echo'<span class="badge badge-success">Activo</span>';

								}
								elseif($d->estado==2) echo '<span class="badge badge-danger">Inactivo</span>';
							
								?>
                            </td>

                            <td><?php echo  $d->fechaRegistro; ?></td>

                            <td class="project-actions text-right ">
                                <a class="btn btn-primary btn-sm" href="verdetalle/<?php  echo $d->documento;?>">
                                    <i class="fas fa-eye"></i>
                                    </i>
                                    Ver
                                </a>



                                <a class="btn btn-info btn-sm" href="actualizar/<?php  echo $d->documento;?>">

                                    <?php

									/*Esta es otra manera de pasar el parametro por la url al pulsar un botón
									
								     href="<?=//base_url('usuario/actualizar/'. $d->documento)?>"

                                    */

                                    ?>



                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Editar
                                </a>


                                <a class="btn btn-danger btn-sm" href="borrar/<?php  echo $d->documento;?>"
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


            </div>
            <!--Fin del footer del contenido-->






        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
