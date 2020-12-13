<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-order-history-50.png">Historial de mascotas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Clientes</a></li>
                        <li class="breadcrumb-item active">Historial de mascotas</li>
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
                                <a type="button" role="link" class="btn bg-success"
                                    onclick="location.href='listadoMascota';"><i class="fas fa-sync-alt"></i></a>

                            </span>

                        </div>

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
                <h3 class="card-title">Lista de mascotas</h3>

                <div class="card-tools">



                </div>
            </div>
            <!-- Fin Caja superior -->



            <!--Inicio del card body-->
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>Especie</th>
                            <th>
                                Nombre mascota
                            </th>

                            <th>Raza</th>

                            <th>
                                Propietario
                            </th>

                            <th class="text-center">
                                Estado
                            </th>

                            <th style="text-align:center;">
                                Acción
                            </th>


                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($resultado as $key => $d) : ?>

                        <tr>

                            <td><?php echo  $d->descripcion;?></td>
                            <td><?php echo  $d->nombreMascota;?></td>
                            <td><?php echo $d->descripcionRaza; ?></td>
                            <td><?php echo $d->nombre?></td>
                            

                            <?php if ($d->estadoMascota ==1) {?>
                            <td class="text-center"> <span class="badge badge-success">Habilitada</span></td>
                            <?php  }
                           
                           else
                            {
                                if ($d->estadoMascota ==0) { ?>
                            <td class="text-center"> <span class="badge badge-danger">Deshabilitada</span></td>
                            <?php   }  
                                } ?>


                            <td class="project-actions text-center ">
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>cliente/historialMascota/<?php echo $d->idMascota ?>">
                                <i class="fas fa-notes-medical"></i>
                                     Ver historial
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
                    <div class="alert alert-warning text-center">
                        <?= $this->session->flashdata('busqueda');?> </div>


                <?php endif?>

            </div>
            <!--Fin del footer del contenido-->






        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->