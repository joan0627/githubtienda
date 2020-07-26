<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-price-tag-50.png" class="nav-icon">
                        Productos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
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
            <form role="form" action="" name="producto" method="POST"  enctype="multipart/form-data">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Código</label> <label style="color: red;"> * </label>
								<input name="codigo" type="text" class="form-control " placeholder="Ingrese el codigo ">
								<?php echo form_error('codigo', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre</label> <label style="color: red;"> *</label>
								<input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre">
								<?php echo form_error('nombre', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea class="form-control" rows="2"
									placeholder="Escribe una descripción del producto ..." name="descripcion"></textarea>
									
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">

								<label>Categoría</label> <label style="color: red;"> *</label>
                                <select name="categoria" class="form-control">

									<option Value="" hidden selected>-Seleccione la categoría-</option>
									<option value="1">Alimento</option>
									<option value="2">Accesorios</option>
                                    <option value="3">Aseo</option>
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

									<option Value="" hidden selected>-Seleccione la marca-</option>
									<option value="1">Nutrican</option>
                                    <option value="2">Cipa</option>
                                    <option value="3">Petis</option>
                                    <option value="4">Dog chow</option>
								</select>
								<?php echo form_error('marca', '<p class="text-danger">', '</p>'); ?>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Proveedor</label> <label style="color: red;"> *</label>
                                <select name="proveedor" class="form-control">

                                    <option Value="" hidden selected>-Seleccione el proveedor-</option>
                                    <option value="15">Carlos</option>
                                    <option value="16">Sebastian</option>
                                    <option value="17">Evis</option>
								</select>
								<?php echo form_error('proveedor', '<p class="text-danger">', '</p>'); ?>

                            </div>

                        </div>



                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Existencia</label> <label style="color: red;"> * </label>
                                <input name="existencia" type="text" class="form-control"
									placeholder="Ingrese la existencia">
									<?php echo form_error('existencia', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="col-md-6">
						<div class="form-group">
                                <label>Valor de medida</label>
                                <input name="valorDeMedida" type="text" class="form-control"
									placeholder="Ingrese el valor de medida">
									<?php echo form_error('valorDeMedida', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
						<div class="form-group">
                                <label>Unidad de medida</label>
                                <select name="unidaDeMedida" class="form-control">

                                    <option Value="" hidden selected>-Seleccione la unidad de medida-</option>
                                    <option value="1">Kilogramo</option>
									<option value="2">Unidad</option>
									<option value="3">Paquete</option>
									<option value="4">Libras</option>
									<option value="5">Mililitros </option>
								</select>
								<?php echo form_error('unidaDeMedida', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Presentación</label> <label style="color: red;"> * </label>
                                <select name="presentacion" class="form-control">

                                    <option Value="" hidden selected>-Seleccione la presentacion-</option>
                                    <option value="1">Bolsa</option>
                                    <option value="2">Paquete</option>
                                    <option value="3">Botella</option>
                                    <option value="4">Caja</option>
								</select>
								<?php echo form_error('presentacion', '<p class="text-danger">', '</p>'); ?>
                            </div>



                        </div>


                    </div>

                    <div class="row">

                        <div class="col-md-4">

                            <label>Costo</label> <label style="color: red;"> * </label>
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-dollar-sign"></i>
                                    </span>
                                </div>
								<input type="number" class="form-control" placeholder="Ingrese el precio de costo del producto" name="costo" onKeyUp="CalcularPrecioVenta()">

							</div>
							<?php echo form_error('costo', '<p class="text-danger">', '</p>'); ?>

                        </div>

                        <div class="col-md-4">

                            <label>Utilidad</label> <label style="color: red;"> * </label>
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
									<i class="fas fa-percentage"></i>
                                    </span>
                                </div>
								<input type="number" class="form-control" placeholder="Ingrese el porcentaje de utilidad" name="utilidad" onKeyUp="CalcularPrecioVenta()">
                            </div>
							<?php echo form_error('utilidad', '<span class="text-danger">', '</span>'); ?>
                        </div>

                        <div class="col-md-4">

                            <label>Precio de venta</label>
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-dollar-sign"></i>
                                    </span>
                                </div>
								<input type="text" class="form-control" placeholder="" readOnly="readonly" 
								id="total" name="precioVenta" >

                            </div>

						</div>
						





                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Imagen</label>

                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="cargaimagenproducto" name="cargaimagenproducto">
                                        <label class="custom-file-label" for="exampleInputFile"></label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Cargar</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Vista previa de la imagen</label>
                                <div class="timeline-body">
									<img style="width: 250px; height: 200px;" id="vistapreviaproducto" src="http://placehold.it/250x200" alt="...">
								

                                </div>
                            </div>
                        </div>



                    </div>




                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->


                    <div class="card-footer">


                        <button type="submit" id="botonRegistroUsuario" class="btn btn-success col-2">Registrar</button>
                        <a href="listaproductosu" id="botonAtras" class="btn btn-success col-2">Atrás</a>

                    </div>

                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
