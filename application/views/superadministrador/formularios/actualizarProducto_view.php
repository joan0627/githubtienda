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
                        <li class="breadcrumb-item"><a href="#">Producto</a></li>
                        <li class="breadcrumb-item active">Actualizar</li>
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
                <h3 class="card-title">Actualizar producto </h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" method="POST">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Codigo</label> <label style="color: red;"> * </label>
                                <input name="codigo" type="text" class="form-control " placeholder="Ingrese el codigo"
                                    value="0001">
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre</label> <label style="color: red;"> *</label>
                                <input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre"
                                    value="NutreCan Croquetas">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Categoria</label> <label style="color: red;"> *</label>
                                <select name="categoria" class="form-control">

                                    <option hidden selected>Aseo</option>
                                    <option value="1">Aseo</option>
                                    <option value="2">Alimento</option>
                                    <option value="2">Accesorios</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Marca</label> <label style="color: red;"> *</label>
                                <select name="marca" class="form-control">

                                    <option hidden selected>Nutrican</option>
                                    <option value="1">Cipa</option>
                                    <option value="2">Nutrican</option>
                                    <option value="2">Petis</option>
                                    <option value="2">Dog chow</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Existencia</label><label style="color: red;"> * </label>
                                <input name="marca" type="text" class="form-control" placeholder="Ingrese la existencia"
                                    value="25">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Unidad de medida</label>
                                <select name="unidaDeMedida" class="form-control">

                                    <option hidden selected>Kilogramo</option>
                                    <option value="1">Gramo</option>
                                    <option value="2">Kilogramo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Valor de medida</label>
                                <input name="valorDeMedida" type="text" class="form-control"
                                    placeholder="Ingrese el valor de medida" value="1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Presentación</label><label style="color: red;"> * </label>
                                <select name="presentacion" class="form-control">

                                    <option hidden selected>Paquete</option>
                                    <option value="1">Bolsa</option>
                                    <option value="2">Paquete</option>
                                    <option value="2">Caja</option>
                                    <option value="2">Sobre</option>
                                    <option value="2">Bulto</option>
                                </select>
                            </div>

                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Estado</label> <label style="color: red;"> *</label>
                                <select name="Estado" class="form-control">

                                    <option hidden selected>Activo</option>
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                </select>
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Imagen</label> <label style="color: red;">
                                    * </label>
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
                    <a href="<?php echo base_url();?>producto/Actualizarprecio" id=""
                        class=" btn btn-success">Actualizar
                        precio</a>
                    <hr>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Precio</th>
                                <th>Fecha inicio</th>
                                <th>Fecha fin</th>
                                <th>Motivo del cambio</th>
                                <th class="text-center">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>10.000</td>
                                <td>
                                    <div class="">09/06/2020 8:00 am
                                        <div class=""></div>
                                    </div>
                                </td>
                                <td><span class="text-danger">09/06/2020 1:00 pm</span></td>
                                <td>Se sube el precio por alta demanda.</td>
                                <td class="text-center"><span class="badge badge-danger">Caducado</span></td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>11.000</td>
                                <td>
                                    <div class="">09/06/2020 1:00 pm
                                        <div class=""></div>
                                    </div>
                                </td>
                                <td><span class=""></span></td>
                                <td></td>
                                <td class="text-center"><span class="badge badge-success">Vigente</span></td>

                            </tr>

                        </tbody>
                    </table>

                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->
                    <div class="card-footer">




                        <br>

                        <button type="submit" id="botonRegistroUsuario"
                            class="btn btn-success col-2">Actualizar</button>
                        <a href="listaproductosu" id="botonAtras" class="btn btn-success col-2">Atrás</a>


                    </div>

                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
