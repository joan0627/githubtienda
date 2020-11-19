<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-list-50.png">Lista de clientes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Clientes</a></li>
                        <li class="breadcrumb-item active">Lista de clientes</li>
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
                                    onclick="location.href='cliente';"><i class="fas fa-sync-alt"></i></a>

                            </span>

                        </div>

                    </div>

                    <div class="col-auto">

                        <a href="<?php echo base_url();?>cliente/registro" class="btn btn-success"><i
                                class="fas fa-plus-circle"></i> Crear cliente</a>
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
                <h3 class="card-title">Lista de clientes</h3>

                <div class="card-tools">



                </div>
            </div>
            <!-- Fin Caja superior -->



            <!--Inicio del card body-->
            <div class="card-body p-0">
                <table id="tablaListadoClientes" class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>
                                Documento
                            </th>

                            <th style='width:15%'>
                                Nombre completo
                            </th>
                            <th>
                                Celular
                            </th>
                            <th class="text-center">
                                Número de mascotas
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


                            <td><?php echo  $d->documento;?></td>
                            <td><?php echo  $d->nombre;?></td>

                            <td><?php echo  $d->celular;?></td>
                            <td class="text-center"><?php echo  $d->numMascotas;?></td>


                            <?php if ($d->estado ==1) {?>
                            <td class="text-center"> <span id="estadoCliente<?php echo  $d->documento ?>"
                                    class="badge badge-success">Habilitado</span></td>
                            <?php  }
                           
                           else
                            {
                                if ($d->estado ==0) { ?>
                            <td class="text-center"> <span id="estadoCliente<?php echo  $d->documento ?>"
                                    class="badge badge-danger">Deshabilitado</span></td>
                            <?php   }  
                                } ?>


                            <td class="project-actions text-right ">
                                <a class="btn btn-primary btn-sm"
                                    href="<?php echo base_url();?>cliente/detalleCliente/<?php echo $d->documento; ?><?php  ?>">
                                    <i class="fas fa-eye"></i>
                                    </i>
                                    Ver
                                </a>

                 
                                <?php if($d->estado ==1): ?>

                                <a class="btn btn-info btn-sm"
                                    href="<?php echo base_url();?>cliente/actualizar/<?php echo $d->documento; ?>"
                                    id="editarCliente<?php echo  $d->documento ?>">
                                    <i class="fas fa-pencil-alt"></i> Editar</a>

                                <?php endif?>

                                <?php if($d->estado ==0): ?>
                                <a class="isDisabled btn btn-info btn-sm"
                                    href="<?php echo base_url();?>cliente/actualizar/<?php echo $d->documento; ?>"
                                    id="editarCliente<?php echo  $d->documento ?>">
                                    <i class="fas fa-pencil-alt"></i> Editar</a>
                                <?php endif?>


                                <?php if($d->estado ==1): ?>

                                <button style='width:41%' class="deshabilitarCliente btn btn-danger btn-sm"
                                    data-documentoC="<?=$d->documento?>"
                                    id="deshabilitarCliente<?php echo  $d->documento ?>">
                                    <i class="fas fa-ban"></i> Deshabilitar</button>

                                <?php endif?>

                                <?php if($d->estado ==0): ?>
                                <button style='width:41%' class="habilitarCliente  btn btn-success btn-sm"
                                    data-documentoC="<?=$d->documento?>"
                                    id="habilitarCliente<?php echo  $d->documento ?>">
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

                <div class="alert alert-warning text-center">
                    <?= $this->session->flashdata('busqueda');?> </div>


                <?php endif?>


            </div>
            <!--Fin del footer del contenido-->






        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->