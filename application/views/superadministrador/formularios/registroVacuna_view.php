<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-syringe-50.png"> Vacunación</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Servicios</a></li>
                        <li class="breadcrumb-item active">Registro de vacuna</li>
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
                <h3 class="card-title">Registro de vacuna </h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" method="POST">
                <!--Inicio del card body-->

                <div class="card-body ">
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Código</label> <label style="color: red;"> *</label>
                                <input name="codigo" type="text" class="form-control"
                                    placeholder="Ingrese el código de la vacuna" value="">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre</label> <label style="color: red;"> * </label>
                                <input name="nombre" type="text" class="form-control"
                                    placeholder="Ingrese el nombre de la vacuna">

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">


                                <div class="form-group">
                                    <label>Laboratorio</label> <label style="color: red;"> *</label>
                                    <select class="form-control " style="width: 100%;">
                                        <option selected hidden="selected">-Seleccione el fabricante-</option>
                                        <option>Biozoo</option>
                                        <option>Virbac</option>
                                        <option>Canigen</option>

                                    </select>
                                </div>

                            </div>
                        </div>






                        <div class="col-md-6">
                            <div class="form-group">


                                <div class="form-group">
                                    <label>Presentación</label> <label style="color: red;"> *</label>
                                    <select class="form-control " style="width: 100%;">
                                        <option selected="selected">-Seleccione el tipo de presentación-</option>
                                        <option>Paquete</option>
                                        <option>Bulto</option>
                                        <option>Frasco</option>
                                        <option>Botella</option>
                                        <option>Caja</option>

                                    </select>
                                </div>

                            </div>
                        </div>





                    </div>


                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tipo de vacuna</label> <label style="color: red;"> *</label>
                                <select class="form-control " style="width: 100%;">
                                    <option selected="selected">-Seleccione el tipo de vacuna-</option>
                                    <option>Canina</option>
                                    <option>Felina</option>


                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">

                                <div class="form-group">
                                    <label>Valor medida</label> <label style="color: red;"> *</label>
                                    <input class="form-control" rows="3"
                                        placeholder="Ingrese el valor de la medida de la vacuna" name="">
                                </div>

                            </div>
                        </div>



                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">


                                <div class="form-group">
                                    <label>Unidad de medida</label> <label style="color: red;"> *</label>
                                    <select class="form-control " style="width: 100%;">
                                        <option selected="selected">-Seleccione la unidad de medida-</option>
                                        <option>Gramos</option>
                                        <option>Kilogramos</option>
                                        <option>Libras</option>
                                        <option>Mililitros</option>

                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Fecha de caducidad</label> <label style="color: red;"> * </label>
                                <input name="fechaCita" type="date" class="form-control"
                                    placeholder="Indique la fecha de caducidad">
                            </div>
                        </div>


                    </div>





                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Calendario</label> <label style="color: red;"> * </label>
                                <input name="nombre" type="text" class="form-control"
                                    placeholder="Ingrese las semanas recomendadas para la aplicación de la vacuna">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">

                                <div class="form-group">
                                    <label>Existencias</label> <label style="color: red;"> * </label>
                                    <input name="nombre" type="text" class="form-control"
                                        placeholder="Ingrese las existencias">

                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Indicaciones</label> <label style="color: red;"> * </label>
                                <textarea class="form-control" rows="3"
                                    placeholder="Especifique las indicaciones de la vacuna"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>Contraindicaciones</label> <label style="color: red;"> * </label>
                            <textarea class="form-control" rows="3"
                                placeholder="Especifique las contraindicaciones de la vacuna"></textarea>

                        </div>




                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Precio </label> <label style="color: red;"> * </label>
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-dollar-sign"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Ingrese el precio de la vacuna">

                            </div>
                        </div>


                    </div>



                </div>

                <!--Inicio del footer del contenido-->
                <!--Inicio del footer del contenido-->
                <div class="card-footer">

                    <button type="submit" id="botonRegistroServicio" class="btn btn-success col-2">Registrar</button>
                    <a href="listasvacunas" class="btn btn-success col-2">Atrás</a>
                </div>
                <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
