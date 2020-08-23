<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url(); ?>assets/img/iconos/icons8-price-tag-50.png" class="nav-icon">
                        Productos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Productos</a></li>
                        <li class="breadcrumb-item active">Registro de producto</li>
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
                <h3 class="card-title">Registro de producto </h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" action="" name="producto" method="POST" enctype="multipart/form-data">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Código</label> <label style="color: red;"> * </label>
                                <input name="codigo" type="text" class="form-control " placeholder="Ingrese el codigo "
                                    value="<?php echo $idProducto;?>">
                                <?php echo form_error('codigo', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>


                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre</label> <label style="color: red;"> *</label>
                                <input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre"
                                    value="<?php echo $nombreProducto;?>">
                                <?php echo form_error('nombre', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea class="form-control" rows="2"
                                    placeholder="Escribe una descripción del producto ..." name="descripcion"><?php echo $descripcionProducto;?></textarea>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Categoría</label> <label style="color: red;"> *</label>
                                <select name="categoria" id="categoria" class="form-control" >

                                    <?php if ($categoria != "") : ?>
                                    <?php foreach ($categorias as $clave => $valor) : ?>
                                    <?php if ($categoria == $valor->idCategoria) : ?>

                                    <option hidden value=" <?php echo  $valor->idCategoria; ?>" selected >
                                        <?php


													echo  $valor->descripcion; ?></option>
                                    <?php
												foreach ($categorias as $clave => $valor) : ?>


                                    <option value=" <?php echo  $valor->idCategoria; ?>">
                                        <?php echo  $valor->descripcion; ?></option>

                                    <?php endforeach; ?>

                                    <?php endif;  ?>
                                    <?php endforeach; ?>
                                    <?php else :
										foreach ($categorias as $clave => $valor) : ?>
                                    <option value="" selected hidden>-Seleccione una categoría-</option>;
                                    <option value=" <?php echo  $valor->idCategoria; ?>">
                                        <?php echo  $valor->descripcion; ?></option>

                                    <?php endforeach; ?>
                                    <?php endif ?>
                                </select>
                                <?php echo form_error('categoria', '<p class="text-danger">', '</p>'); ?>

                            </div>
                        </div>



                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Marca</label> <label style="color: red;"> *</label>
                                <select name="marca" class="form-control">
                                    <?php if ($marca != "") : ?>
                                    <?php foreach ($marcas as $clave => $valor) : ?>
                                    <?php if ($marca == $valor->idMarca) : ?>

                                    <option hidden value=" <?php echo  $valor->idMarca; ?>" selected>
                                        <?php


													echo  $valor->descripcionMarca; ?></option>
                                    <?php
												foreach ($marcas as $clave => $valor) : ?>


                                    <option value=" <?php echo  $valor->idMarca; ?>">
                                        <?php echo  $valor->descripcionMarca; ?></option>

                                    <?php endforeach; ?>

                                    <?php endif;  ?>
                                    <?php endforeach; ?>
                                    <?php else :
										foreach ($marcas as $clave => $valor) : ?>
                                    <option value="" selected hidden>-Seleccione una marca-</option>;
                                    <option value=" <?php echo  $valor->idMarca; ?>">
                                        <?php echo  $valor->descripcionMarca; ?></option>

                                    <?php endforeach; ?>
                                    <?php endif ?>

                                </select>
                                <?php echo form_error('marca', '<p class="text-danger">', '</p>'); ?>

                            </div>

                        </div>



                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Presentación</label> <label style="color: red;"> * </label>
                                <select name="presentacion" class="form-control">

                                    <?php if ($presentacion != "") : ?>
                                    <?php foreach ($presentaciones as $clave => $valor) : ?>
                                    <?php if ($presentacion == $valor->idPresentacion) : ?>

                                    <option hidden value=" <?php echo  $valor->idPresentacion; ?>" selected>
                                        <?php


													echo  $valor->descripcionPresentacion; ?></option>
                                    <?php
												foreach ($presentaciones as $clave => $valor) : ?>


                                    <option value=" <?php echo  $valor->idPresentacion; ?>">
                                        <?php echo  $valor->descripcionPresentacion; ?></option>

                                    <?php endforeach; ?>

                                    <?php endif;  ?>
                                    <?php endforeach; ?>
                                    <?php else :
										foreach ($presentaciones as $clave => $valor) : ?>
                                    <option value="" selected hidden>-Seleccione una presentación-</option>;
                                    <option value=" <?php echo  $valor->idPresentacion; ?>">
                                        <?php echo  $valor->descripcionPresentacion; ?></option>

                                    <?php endforeach; ?>
                                    <?php endif ?>

                                </select>
                                <?php echo form_error('presentacion', '<p class="text-danger">', '</p>'); ?>
                            </div>





                        </div>



                    </div>

                    <div class="row">




                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Valor de medida</label><label style="color: red;"> * </label>
                                <input name="valorDeMedida" type="text" class="form-control"
                                    placeholder="Ingrese el valor de medida" value="<?php echo $valorMedida;?>">
                                <?php echo form_error('valorDeMedida', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Unidad de medida</label> <label style="color: red;"> * </label>
                                <select name="unidadDeMedida" class="form-control">
                                    <?php if ($unidadMedida != "") : ?>
                                    <?php foreach ($unidadesmedidas as $clave => $valor) : ?>
                                    <?php if ($unidadMedida == $valor->idUnidadMedida) : ?>

                                    <option hidden value=" <?php echo  $valor->idUnidadMedida; ?>" selected>
                                        <?php


													echo  $valor->descripcionUnidadmedida; ?></option>
                                    <?php
												foreach ($unidadesmedidas as $clave => $valor) : ?>


                                    <option value=" <?php echo  $valor->idUnidadMedida; ?>">
                                        <?php echo  $valor->descripcionUnidadmedida; ?></option>

                                    <?php endforeach; ?>

                                    <?php endif;  ?>
                                    <?php endforeach; ?>
                                    <?php else :
										foreach ($unidadesmedidas as $clave => $valor) : ?>
                                    <option value="" selected hidden>-Seleccione una unidad de medida-</option>;
                                    <option value=" <?php echo  $valor->idUnidadMedida; ?>">
                                        <?php echo  $valor->descripcionUnidadmedida; ?></option>

                                    <?php endforeach; ?>
                                    <?php endif ?>

                                </select>
                                <?php echo form_error('unidadDeMedida', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Existencia</label> <label style="color: red;"> * </label>
                                <input name="existencia" type="number" class="form-control"
                                    placeholder="Ingrese la existencia" value="<?php echo $existencia;?>" min="1">
                                <?php echo form_error('existencia', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>



                        <div class="col-md-6">



                            <div class="form-group">
                                <label>Tipo de especie</label> <label style="color: red;"> *</label>
                                <select class="form-control " style="width: 100%;" name="tipoespecie">
                                <?php if ($unidadMedida != "") : ?>
                                    <?php foreach ($unidadesmedidas as $clave => $valor) : ?>
                                    <?php if ($unidadMedida == $valor->idUnidadMedida) : ?>

                                    <option hidden value=" <?php echo  $valor->idUnidadMedida; ?>" selected>
                                    <?php echo  $valor->descripcionEspecie; ?></option>

                                    <?php foreach ($unidadesmedidas as $clave => $valor) : ?>

                                    <option value=" <?php echo  $valor->idUnidadMedida; ?>">
                                        <?php echo  $valor->descripcionEspecie; ?></option>

                                    <?php endforeach; ?>

                                    <?php endif;  ?>
                                    <?php endforeach; ?>
                                    <?php else :
										foreach ($unidadesmedidas as $clave => $valor) : ?>
                                    <option value="" selected hidden>-Seleccione una especie-</option>;
                                    <option value=" <?php echo  $valor->idUnidadMedida; ?>">
                                        <?php echo  $valor->descripcionEspecie; ?></option>

                                    <?php endforeach; ?>
                                    <?php endif ?>

                                </select>
                                <?php echo form_error('tipoespecie', '<p class="text-danger">', '</p>'); ?>
                            </div>




                        </div>


                    </div>

                    <div class="row"  >
                        <div class="col-md-6"  id="divIndicaciones">
                            <div class="form-group" >

                                <label>Indicaciones</label> <label style="color: red;"> * </label>
                                <textarea class="form-control" rows="3"
                                    placeholder="Especifique las indicaciones de la vacuna" name="indicaciones"
                                    ></textarea>
                            </div>
                            <?php echo form_error('indicaciones', '<p class="text-danger">', '</p>'); ?>
                        </div>

                        <div class="col-md-6"  id="divcontraindicaciones">
                            <label>Contraindicaciones</label> <label style="color: red;"> * </label>
                            <textarea class="form-control" rows="3"
                                placeholder="Especifique las contraindicaciones de la vacuna" name="contraIndicaciones"
                                ></textarea>
                                <?php echo form_error('contraIndicaciones', '<p class="text-danger">', '</p>'); ?>
                        </div>




                    </div>

					<div class="row" >
                        <div class="col-md-3"  id="divEdad">
                            <div class="form-group">

                                <label>Edad</label> <label style="color: red;"> * </label>
                                <input class="form-control" rows="3"
                                    placeholder="Ingrese el tiempo recomendado" name="edad" ></input>
                            </div>
                            <?php echo form_error('edad', '<p class="text-danger">', '</p>'); ?>
                        </div>

						<div class="col-md-4"  id="divUnidadTiempo">
                            <div class="form-group">
                                <label>Unidad de tiempo</label> <label style="color: red;"> *</label>
                                <select class="form-control " style="width: 100%;" name="unidadTiempo" >
                                    <option hidden >-Seleccione la unidad de tiempo-</option>
                                    <option>Dia(s)</option>
                                    <option>Semana(s)</option>
                                    <option>Mes(es)</option>
                                    <option>Año(s)</option>

                                </select>
                                <?php echo form_error('unidadTiempo', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <label>Precio de venta</label> <label style="color: red;"> * </label>
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-dollar-sign"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Ingrese el precio de la vacuna" name="precioVenta">
                                <?php echo form_error('precioVenta', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <input id="Valor" type="text" class="form-control " 
                        value="<?php echo $this->session->set_userdata('valorSesion', 'perra');?>" hidden>


                    </div>



                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->



                    <div class="text-center card-footer">

                        <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;" type="submit"
                            id="registroProveedor" class="btn btn-success col-2">Registrar</button>
                        <a style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; " href="<?php echo base_url(); ?>producto"
                            id="botonAtras" class="btn btn-success col-2">Atrás</a>

                    </div>


                </div>// <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
