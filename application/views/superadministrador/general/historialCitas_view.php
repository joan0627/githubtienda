<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-pasado-50.png"> Historial de citas
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Agenda</a></li>
                        <li class="breadcrumb-item active">Historial de citas</li>
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
                                    onclick="location.href='<?php echo base_url(); ?>agenda/historialcitas'" ;><i
                                        class="fas fa-sync-alt"></i></a>

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
                <h3 class="card-title">Historial de citas</h3>

                <div class="card-tools">



                </div>
            </div>
            <!-- Fin Caja superior -->



            <!--Inicio del card body-->
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th class="text-left">
                                ID
                            </th>

                            <th>
                                Servicio
                            </th>

                            <th>
                                Asunto
                            </th>

                            <th>
                                Nombre del cliente
                            </th>

                            <th>
                                Mascota
                            </th>

                            <th  style="text-align:center;">
                                Fecha
                            </th>
                            <th style="text-align:center;">
                                Hora
                            </th>

                            <th style="text-align:center;">
                                Estado
                            </th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($resultado as $key => $d) : ?>
                        <tr>
                            <td><?php echo  $d->id;?></td>
                            <td><?php echo  $d->nombreServicio;?></td>
                            <td><?php echo  $d->title;?></td>
                            <td><?php echo  $d->nombre;?></td>
                            <td><?php echo  $d->nombreMascota;?></td>
                            <td style="text-align:center;">
                                <?php 
                                $fechaHora = explode(" ",date("d-m-Y h:i a",strtotime($d->start)),2);
                                echo $fechaHora[0];
                                ?>

                            </td>
                            <td style="text-align:center;"><?php echo $fechaHora[1]?></td>

                            <?php if($d->estado == 1) {?>
                            <td style="text-align:center;"> <span class="badge badge-warning"><?php echo $d->nombreEstado; ?></span></td>
                            <?php } else if ($d->estado == 2){ ?>
                            <td style="text-align:center;"> <span class="badge badge-enprogreso"><?php echo $d->nombreEstado; ?></span></td>
                            <?php } else if ($d->estado == 3){ ?>
                            <td style="text-align:center;"> <span class="badge badge-finalizada"><?php echo $d->nombreEstado; ?></span></td>
                            <?php } else if ($d->estado == 4){ ?>
                            <td style="text-align:center;"> <span class="badge badge-cancelada"><?php echo $d->nombreEstado; ?></span></td>
                            <?php } else if ($d->estado == 5){ ?>
                            <td style="text-align:center;"> <span class="badge badge-noasistio"><?php echo $d->nombreEstado; ?></span></td>
                            <?php }?>

                            
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