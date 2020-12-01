<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="login-dark content-header">
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
                                <button class="btn bg-primary" type="submit"><i class="fas fa-search"></i></button>
                            </span>

                            <span class="col-auto input-group-btn">
                                <a type="button" role="link" class="btn bg-success"
                                    onclick="location.href='<?php echo base_url(); ?>proveedor/';"><i class="fas fa-sync-alt"></i></a>

                            </span>

                        </div>

                    </div>

                    <div class="col-auto">

                        <a href="<?php echo base_url(); ?>proveedor/registro" class="btn btn-success"><i
                                class="fas fa-plus-circle"></i> Crear
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
            <table class="table table-striped projects" id="tablaListadoProveedores">
                <thead>
                    <tr>

                        <th>
                            Documento
                        </th>


                        <th>
                            Nombre
                        </th>

                        <th style="text-align:center; ">
                            Nombre Contacto
                        </th>

                        <th>
                            Celular
                        </th>

                        <th>
                            Dia visita
                        </th>
                        <th class="text-center">
                            Estado
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
                        <td style="text-align:center; "><?php echo  $d->nombreContacto; ?></td>
                        <td><?php echo  $d->celular; ?></td>
                        <td><?php echo  $d->diaVisita; ?></td>

                        <?php if ($d->estado ==1) {?>
                        <td class="text-center"> <span id="estadoProveedor<?php echo  $d->documento ?>"
                                class="badge badge-success">Habilitado</span></td>
                        <?php  }
                           
                           else
                            {
                                if ($d->estado ==0) { ?>
                        <td class="text-center"> <span id="estadoProveedor<?php echo  $d->documento ?>"
                                class="badge badge-danger">Deshabilitado</span></td>
                        <?php   }  
                                } ?>


                        <td class="project-actions text-right ">
                            <a class="btn btn-primary btn-sm"
                                href="<?php echo base_url(); ?>proveedor/detalle/<?php echo $d->documento; ?>">
                                <i class="fas fa-eye"></i>
                                </i>
                                Ver
                            </a>



                            <?php if($d->estado ==1): ?>

                            <a class="btn btn-info btn-sm"
                                href="<?php echo base_url();?>proveedor/actualizar/<?php echo $d->documento; ?>"
                                id="editarProveedor<?php echo  $d->documento ?>">
                                <i class="fas fa-pencil-alt"></i> Editar</a>

                            <?php endif?>

                            <?php if($d->estado ==0): ?>
                            <a class="isDisabled btn btn-info btn-sm"
                                href="<?php echo base_url();?>proveedor/actualizar/<?php echo $d->documento; ?>"
                                id="editarProveedor<?php echo  $d->documento ?>">
                                <i class="fas fa-pencil-alt"></i> Editar</a>
                            <?php endif?>



                            <?php if($d->estado ==1): ?>

                            <button style='width:41%' class="deshabilitarProveedor btn btn-danger btn-sm"
                                data-documentoP="<?=$d->documento?>"
                                id="deshabilitarProveedor<?php echo  $d->documento ?>">
                                <i class="fas fa-ban"></i> Deshabilitar</button>

                            <?php endif?>

                            <?php if($d->estado ==0): ?>
                            <button style='width:41%' class="habilitarProveedor  btn btn-success btn-sm"
                                data-documentoP="<?=$d->documento?>"
                                id="habilitarProveedor<?php echo  $d->documento ?>">
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