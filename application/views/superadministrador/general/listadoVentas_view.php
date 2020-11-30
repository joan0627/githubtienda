<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-shop-50.png">Ventas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Ventas</a></li>
                        <li class="breadcrumb-item active">Historial de ventas</li>
                    </ol>
                </div>

            </div>
            <br>
        </div><!-- FIN/.container-fluid -->

        <!--boton crear servicio-->
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
                                <a type="button" role="link" class="btn bg-success" onclick="location.href='venta';"><i
                                        class="fas fa-sync-alt"></i></a>

                            </span>

                        </div>

                    </div>


                    <div class="col-auto">

                        <a href="<?php echo base_url();?>venta/registrarventa" class="btn btn-success"><i
                                class="fas fa-plus-circle"></i> Crear venta</a>
                    </div>
                </div>
            </div>
            <!--Fin boton crear servicio-->
            <form method="get">

    </section>

    <!-- Incio seccion contenido -->
    <section class="content">

        <!-- Inicio Contenido Total -->
        <div class="card  card-success">
            <!-- Incio Caja superior -->
            <div class="card-header">
                <h3 class="card-title">Historial de ventas</h3>

                <div class="card-tools">



                </div>
            </div>
            <!-- Fin Caja superior -->



            <!--Inicio del card body-->
            <div class="card-body p-0">
                <table id="tablaVentas" class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>
                                Codigo
                            </th>


                            <th style="text-align:center; ">
                                Vendedor
                            </th>
                            <th style="text-align:center; ">
                                Valor
                            </th>
                            <th style="text-align:center; ">
                                Metodo de pago
                            </th>

                            <th style="text-align:center; ">
                                Fecha de registro
                            </th>
                            <th style="text-align:center; ">
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

                            <td><?php echo  $d->idFactura;?></td>


                            <td style="text-align:center; "><?php echo  $d->nombre;?></td>

                            <td style="text-align:center; font-size: 16.5px ;color:green; font-weight: bold;"
                                class="totalVentas"><?php echo  $d->totalGlobal;?></td>
                            <td style="text-align:center; "><?php echo $d->descripcion; ?></td>
                            <td style="text-align:center; "><?php echo  $d->fecha;?></td>

                            <?php if ($d->estado ==1) {?>
                            <td style="text-align:center; "> <span id="estadoventa<?php echo  $d->idFactura ?>"
                                    class="badge badge-success">Registrada</span></td>
                            <?php  }
                           
                           else
                            {
                                if ($d->estado ==0) { ?>
                            <td style="text-align:center; "> <span id="estadoventa<?php echo  $d->idFactura ?>"
                                    class="badge badge-danger">Anulada</span></td>
                            <?php   }  
                                } ?>



                            <td class="project-actions  text-center  ">
                                <a class="btn btn-primary btn-sm" target="_blank" href="<?php echo base_url();?>venta/InformeVenta/<?= $d->idFactura;?>">
                                    <i class="fas fa-file-alt"></i>
                                    Ver
                                </a>


                                <?php if($d->estado ==0): ?>

                                <button disabled type="submit" class="btn btn-danger btn-sm"
                                    data-idventas="<?=$d->idFactura?>" id="anularVenta<?php echo  $d->idFactura ?>"><i
                                        class="fas fa-window-close"></i> Anular</button>

                                <?php endif?>

                                <?php if($d->estado ==1): ?>
                                <button type="submit" class=" anularVenta btn btn-danger btn-sm"
                                    data-idventas="<?=$d->idFactura?>" id="anularVenta<?php echo  $d->idFactura ?>"><i
                                        class="fas fa-window-close"></i> Anular</button>

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