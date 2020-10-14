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
                        <li class="breadcrumb-item"><a href="#">Servicios</a></li>
                        <li class="breadcrumb-item active">Actualizar servicio</li>
                    </ol>
                </div>
            </div>
        </div><!-- FIN/.container-fluid -->
    </section>

    <!-- Incio seccion contenido -->
    <section class="content">

        <!-- Inicio Contenido Total -->
        <div class="card  card-success">
            <!-- Incio Caja superior -->
            <div class="card-header">
                <h3 class="card-title">Actualizar Servicio </h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" method="POST">

                <!--Inicio del card body-->
                <div class="card-body ">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Código</label> <label style="color: red;"> *</label>
                                <input name="codigo" type="text" class="form-control" readonly="readonly"
                                    placeholder="Ingrese el código del servicio"
                                    value="<?php if(isset($_POST['codigo'])){ echo $_POST['codigo']; }else{ echo $clave['idServicio']; } ?>">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre</label> <label style="color: red;"> * </label>
                                <input name="nombre" type="text" class="form-control"
                                    placeholder="Ingrese el nombre del servicio"
                                    value="<?php if(isset($_POST['nombre'])){ echo $_POST['nombre']; }else{ echo $clave['nombreServicio']; } ?>">
                                <?php echo form_error('nombre', '<p class="text-danger">', '</p>'); ?>
                            </div>

                        </div>

                    </div>

                    <div class="row">



                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Tipo de servicio</label> <label style="color: red;"> *</label>
                                <select class="form-control " style="width: 100%;" name="tipoServicio">
                                    <?php if ($tiposervicio != "") : ?>
                                    <?php foreach ($tipoServicios as $clave => $valor) : ?>
                                    <?php if ($tiposervicio == $valor->idTipoServicio) : ?>

                                    <option hidden value=" <?php echo  $valor->idTipoServicio; ?>" selected>
                                        <?php echo  $valor->descripcionTipoServicio; ?></option>

                                    <?php foreach ($tipoServicios as $clave => $valor) : ?>

                                    <option value=" <?php echo  $valor->idTipoServicio; ?>">
                                        <?php echo  $valor->descripcionTipoServicio; ?></option>

                                    <?php endforeach; ?>

                                    <?php endif;  ?>
                                    <?php endforeach; ?>
                                    <?php else :
										foreach ($tipoServicios as $clave => $valor) : ?>
                                    <option value="" selected hidden>-Seleccione un tipo de servicio-</option>;
                                    <option value=" <?php echo  $valor->idTipoServicio; ?>">
                                        <?php echo  $valor->descripcionTipoServicio; ?></option>

                                    <?php endforeach; ?>
                                    <?php endif ?>
                                </select>
                                <?php echo form_error('tipoServicio', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Descripción</label> <label style="color: red;"> * </label>
                                <textarea class="form-control" rows="3" cols="50"
                                    name="descripcion"><?php if(isset($_POST['descripcion'])){ echo $_POST['descripcion']; }else{ echo $clave['descripcion']; } ?></textarea>
                            </div>
                            <?php echo form_error('descripcion', '<p class="text-danger">', '</p>'); ?>

                        </div>



                    </div>


                    <div class="row">




                        <div class="col-md-6">
                            <div class="form-group">

                                <div class="form-group">
                                    <label>Recomendaciones previas</label>
                                    <textarea class="form-control" rows="3" name="recomendacionesPrevias"
                                        cols="50"><?php if(isset($_POST['recomendacionesPrevias'])){ echo $_POST['recomendacionesPrevias']; }else{ echo $clave['recomendacionesPrevias']; } ?></textarea>

                                    <!--<textarea class="form-control" rows="3"
                                        placeholder="Tener en cuenta antes de la cita..." name="vision"></textarea>-->
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Recomendaciones posteriores</label>
                                <textarea class="form-control" rows="3" name="recomendacionesPosteriores"
                                    cols="50"><?php if(isset($_POST['recomendacionesPosteriores'])){ echo $_POST['recomendacionesPosteriores']; }else{ echo $clave['recomendacionesPosteriores']; } ?></textarea>


                                <!--<textarea class="form-control" rows="3"
                                    placeholder="Tener en cuenta después de la cita..." name="vision"></textarea>-->
                            </div>

                        </div>




                    </div>

                    <div class="row">


                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Precio</label> <label style="color: red;"> *</label>
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-dollar-sign"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="precio"
                                        value="<?php if(isset($_POST['precio'])){ echo $_POST['precio']; }else{ echo $clave['precio']; } ?>">
                                    <?php echo form_error('precio', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <!-- en type se tuvo que poner text, porque con number no funcionaba el value-->
                            </div>
                            
                        </div>

                    </div>

                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->
                    <div class="text-center card-footer">

                        <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;" type="submit"
                            id="botonActualizarServicio" class="btn btn-success col-2">Actualizar</button>
                        <a style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; "
                            href="<?php echo base_url(); ?>servicio" id="botonAtras"
                            class="btn btn-success col-2">Atrás</a>

                    </div>

                    <!--Fin del footer del contenido-->
            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->

</div><!-- Fin content-wrapper -->