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
            <form role="form" method="POST">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Codigo</label> <label style="color: red;"> * </label>
                                <input name="codigo" type="text" class="form-control " placeholder="Ingrese el codigo ">
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre</label> <label style="color: red;"> *</label>
                                <input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea class="form-control" rows="2"
                                    placeholder="Escribe una descripción del producto ..." name="vision"></textarea>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Categoria</label> <label style="color: red;"> *</label>
                                <select name="categoria" class="form-control">

                                    <option hidden selected>-Seleccione la categoria-</option>
                                    <option value="1">Aseo</option>
                                    <option value="2">Alimento</option>
                                    <option value="2">Accesorios</option>
                                </select>

                            </div>
                        </div>



                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Marca</label> <label style="color: red;"> *</label>
                                <select name="categoria" class="form-control">

                                    <option hidden selected>-Seleccione la marca-</option>
                                    <option value="1">Cipa</option>
                                    <option value="2">Nutrican</option>
                                    <option value="2">Petis</option>
                                    <option value="2">Dog chow</option>
                                </select>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Proveedor</label> <label style="color: red;"> *</label>
                                <select name="categoria" class="form-control">

                                    <option hidden selected>-Seleccione el proveedor-</option>
                                    <option value="1">Kanú</option>
                                    <option value="2">Alberto Perez</option>
                                    <option value="2">Solla S.A</option>
									<option value="2">Novaventa</option>
									<option value="2">Desconocido</option>
                                </select>

                            </div>

                        </div>



                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Existencia</label> <label style="color: red;"> * </label>
                                <input name="marca" type="text" class="form-control"
                                    placeholder="Ingrese la existencia">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Unidad de medida</label>
                                <select name="unidaDeMedida" class="form-control">

                                    <option hidden selected>-Seleccione la unidad de medida-</option>
                                    <option value="1">Gramo</option>
                                    <option value="2">kilogramo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Valor de medida</label>
                                <input name="valorDeMedida" type="text" class="form-control"
                                    placeholder="Ingrese el valor de medida">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Presentación</label> <label style="color: red;"> * </label>
                                <select name="presentacion" class="form-control">

                                    <option hidden selected>-Seleccione la presentacion-</option>
                                    <option value="1">Bolsa</option>
                                    <option value="2">Paquete</option>
                                    <option value="2">Caja</option>
                                    <option value="2">Sobre</option>
                                </select>
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
                                <input type="text" class="form-control" placeholder="Ingrese el precio de costo del producto">

                            </div>

                        </div>

                        <div class="col-md-4">

                            <label>Utilidad</label> <label style="color: red;"> * </label>
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
									<i class="fas fa-percentage"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Ingrese el porcentaje de utilidad">

                            </div>

                        </div>

                        <div class="col-md-4">

                            <label>Precio de venta</label> <label style="color: red;"> * </label>
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-dollar-sign"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="" readOnly="readonly">

                            </div>

                        </div>




                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Imagen</label>

                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
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
                                    <img src="http://placehold.it/250x200" alt="...">

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
