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
                                value="<?php if(isset($_POST['nombre'])){ echo $_POST['nombre']; }else{ echo $clave['nombreProducto']; } ?>">
                                <?php echo form_error('nombre', '<p class="text-danger">', '</p>'); ?>
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

                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->
                <br>
                <div class="text-center card-footer">



                        <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;" type="submit"
                            id="botonActualizarProducto" class="btn btn-success col-2">Actualizar</button>
                        <a style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; " 
						href="<?php echo base_url(); ?>producto"
                            id="botonAtras" class="btn btn-success col-2">Atrás</a>


                </div>
                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
