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
                                <button class="btn bg-primary" type="submit"><i class="fas fa-search"></i></button>
                            </span>

                            <span class="col-auto input-group-btn">
                                <a type="button" role="link" class="btn bg-success"
                                    onclick="location.href='servicio';"><i class="fas fa-sync-alt"></i></a>

                            </span>

                        </div>

                    </div>

                    <div class="col-auto">

                        <a href="<?php echo base_url(); ?>servicio/registro" class="btn btn-success"><i
                                class="fas fa-plus-circle"></i> Crear
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
                <table id="tablaServicios" class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>
                                Código
                            </th>
                            <th style='width:15%'>
                                Nombre
                            </th>
                            <th>
                                Tipo servicio
                            </th>

                            <th>
                                Precio
                            </th>
                            <th style="text-align:center; ">Estado</th>
                            <th style="text-align:center; ">
                                Acciones
                            </th>


                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($resultado as $key => $d) : ?>
                        <tr>

                            <td><?php echo  $d->idServicio;?></td>
                            <td style="width: 200px;"><?php echo  $d->nombreServicio;?></td>
                            <td><?php echo  $d->descripcionTipoServicio;?></td>

                            <td style="color:green; " class="listadoServicioMoney"><?php echo  $d->precio;?></td>

                            <?php if ($d->estado ==1) {?>
                            <td class="text-center"> <span id="estadoServicio<?php echo  $d->idServicio ?>"
                                    class="badge badge-success">Habilitado</span></td>
                            <?php  }
                           
                           else
                            {
                                if ($d->estado ==0) { ?>
                            <td class="text-center"> <span id="estadoServicio<?php echo  $d->idServicio ?>"
                                    class="badge badge-danger">Deshabilitado</span></td>
                            <?php   }  
                            } ?>


                            <td style="text-align:center; " class="project-actions">
                                <a class="btn btn-primary btn-sm"
                                    href="<?php echo base_url(); ?>servicio/detalle/<?php echo $d->idServicio; ?>">
                                    <i class="fas fa-eye"></i>
                                    </i>
                                    Ver
                                </a>



                                <?php if($d->estado ==1): ?>

                                <a class="btn btn-info btn-sm"
                                    href="<?php echo base_url();?>servicio/actualizar/<?php echo $d->idServicio; ?>"
                                    id="editarServicio<?php echo  $d->idServicio ?>">
                                    <i class="fas fa-pencil-alt"></i> Editar</a>

                                <?php endif?>

                                <?php if($d->estado ==0): ?>
                                <a class="isDisabled btn btn-info btn-sm"
                                    href="<?php echo base_url();?>servicio/actualizar/<?php echo $d->idServicio; ?>"
                                    id="editarServicio<?php echo  $d->idServicio ?>">
                                    <i class="fas fa-pencil-alt"></i> Editar</a>
                                <?php endif?>

                                <?php if($d->estado ==1): ?>

                                <button style='width:35%' class="deshabilitarServicio btn btn-danger btn-sm"
                                    data-Servicio="<?=$d->idServicio?>"
                                    id="deshabilitarServicio<?php echo  $d->idServicio ?>">
                                    <i class="fas fa-ban"></i> Deshabilitar</button>

                                <?php endif?>

                                <?php if($d->estado ==0): ?>
                                <button style='width:35%' class="habilitarServicio  btn btn-success btn-sm"
                                    data-Servicio="<?=$d->idServicio?>"
                                    id="habilitarServicio<?php echo  $d->idServicio ?>">
                                    <i class="fas fa-check-circle"></i> Habilitar</button>

                                <?php endif?>
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

                <div class="alert alert-warning text-center"> <?= $this->session->flashdata('busqueda');?> </div>


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
    confirmButtonColor: "#28a745",

});
</script>

<?php } ?>

<?php if ($this->session->flashdata('actualizar')) { ?>
<script>
Swal.fire({
    type: 'success',
    title: '¡Proceso completado!',
    confirmButtonColor: "#28a745",
    text: '<?= $this->session->flashdata('actualizar'); ?>',

});
</script>

<?php } ?>