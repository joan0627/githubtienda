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
                                <button class="btn bg-primary" type="submit" ><i class="fas fa-search"></i></button>
                            </span>

                            <span class="col-auto input-group-btn">
                                <a type="button" role="link" class="btn bg-success"
                                    onclick="location.href='usuario';"><i class="fas fa-sync-alt"></i></a>

                            </span>

                        </div>

                    </div>

                    <div class="col-auto">

                        <a href="<?php echo base_url(); ?>usuario/registro" class="btn btn-success"><i
                                class="fas fa-plus-circle"></i> Crear
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
                <table id="listausuarios"class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th style ="width:17%;">
                                Nombre completo
                            </th>
                            <th style ="">
                                Celular
                            </th>

                            <th style ="width:10%;">
                             Usuario
                            </th>
                            <th style =" text-align:center; width:2%;">
                                Rol
                            </th>
                            <th style="  text-align:center; width:18% !important;">
                                Fecha de registro
                            </th>
                            <th style=" width:3% !important; text-align:center;">
                                Estado
                            </th>
                            <th style="width:34% !important; text-align:center;">
                                Acciones
                            </th>

                        </tr>
                    </thead>


                    <tbody>


                        <?php foreach ($resultado as $key => $d) : ?>
                        <tr>



                            <td><?php echo  $d->idUsuario;  ?></td>
                            <td style ="width:20% !important;"><?php echo  $d->nombre; ?></td>
                            <td style ="width:18% !important;"><?php echo  $d->celular; ?></td>
                            <td  style ="width:7%;"><?php echo  $d->nombreUsuario; ?></td>
                            <td style ="width:2% !important; text-align:center;">
                                <?php 
								if($d->idRol==1)
								{
								echo'<span class="badge badge-administrador">Administrador</span>';
								}
								elseif($d->idRol==2)  echo'<span class="badge badge-empleado">Empleado</span>';

							?>
                            </td>
                            <td style=" width:14% !important; text-align:center;"><?php echo  $d->fechaRegistro; ?></td>
                            <td style="text-align:center;">
                                <?php
							
								if($d->estado==1)
								{?>
								<span  id="estadoU<?php echo  $d->idUsuario?>" class="badge badge-success">Habilitado</span>

								<?php }
                                else if($d->estado==0) {?> 
                                <span id="estadoU<?php echo  $d->idUsuario?>" class="badge badge-danger">Deshabilitado</span>
                                <?php }?>
								
                            </td>
                            <td  style="text-align:center;">
                            
                              <?php
							
                                 if($d->estado==1)
                                 {?>
                                <a  id="editarUsuario<?php echo  $d->idUsuario?>" class="btn  btn-info btn-sm"
                                    href="<?php echo base_url(); ?>usuario/actualizar/<?php echo $d->idUsuario; ?>">

                                    <?php

									/*Esta es otra manera de pasar el parametro por la url al pulsar un botón
									
								     href="<?=//base_url('usuario/actualizar/'. $d->documento)?>"

                                    */

                                    ?>



                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Editar
                                </a>
                                 <?php }
                                 
                                 else if ($d->estado==0){ ?>

                                    <a  id="editarUsuario<?php echo  $d->idUsuario?>" class=" isDisabled btn  btn-info btn-sm"
                                    href="<?php echo base_url(); ?>usuario/actualizar/<?php echo $d->idUsuario; ?>">

                                    <?php

									/*Esta es otra manera de pasar el parametro por la url al pulsar un botón
									
								     href="<?=//base_url('usuario/actualizar/'. $d->documento)?>"

                                    */

                                    ?>



                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Editar
                                </a>


                                 <?php } ?>


                                <?php if($d->estado==1) {?>
                                <button style='width:54%' class="deshabilitarUsuario btn btn-danger btn-sm"
                                    data-idUsuario="<?=$d->idUsuario?>"
                                    id="deshabilitarUsuario<?php echo  $d->idUsuario?>">
                                    <i class="fas fa-ban"></i> Deshabilitar</button>
                                <?php }
                                else if($d->estado==0)
                                {?>
                                    <button style='width:54%' class="habilitarUsuario btn btn-success btn-sm"
                                    data-idUsuario="<?=$d->idUsuario?>"
                                    id="habilitarUsuario<?php echo  $d->idUsuario?>">
                                    <i class="fas fa-check-circle"></i> Habilitar</button>
                              <?php  }?>

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

<?php if ($this->session->flashdata('deny')) { ?>
<script>
Swal.fire({
    type: 'info',
    title: '¡Atención!',
    text: '<?= $this->session->flashdata('deny'); ?>',
    confirmButtonColor: "#28a745"
});
</script>

<?php } ?>