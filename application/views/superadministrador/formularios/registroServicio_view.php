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
                        <li class="breadcrumb-item"><a href="#">Servicio</a></li>
                        <li class="breadcrumb-item active">Registro de servicios</li>
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
                <h3 class="card-title">Registro del Servicio </h3>


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
                                    placeholder="Ingrese el código del servicio" value="">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre</label> <label style="color: red;"> * </label>
                                <input name="nombre" type="text" class="form-control"
                                    placeholder="Ingrese el nombre del servicio">

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">


                                <div class="form-group">
                                    <label>Tipo de servicio</label> <label style="color: red;"> *</label>
                                    <select class="form-control " style="width: 100%;">
                                        <option selected hidden="selected">-Seleccione el tipo de servicio-</option>
                                        <option>Belleza</option>
                                        <option>Vacunación</option>
                                        <option>Desparasitación</option>

                                    </select>
                                </div>

                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Descripción</label> <label style="color: red;"> * </label>
                                <textarea class="form-control" rows="3"
                                    placeholder="Describa el detalle del servicio"></textarea>
                            </div>

                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Recomendaciones previas</label>
                                <textarea class="form-control" rows="3"
                                    placeholder="Tener en cuenta antes de la cita..." name="vision"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Recomendaciones posteriores</label>
                                <textarea class="form-control" rows="3"
                                    placeholder="Tener en cuenta después de la cita..." name="vision"></textarea>
                            </div>

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
                                <input type="text" class="form-control" placeholder="Ingrese el precio del servicio">

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Imagen del servicio</label> <label style="color: red;">
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


                    <!--Inicio del footer del contenido-->
                    <!--Inicio del footer del contenido-->
                    <div class="card-footer">

                        <button type="submit" id="botonRegistroServicio"
                            class="btn btn-success col-2">Registrar</button>
                        <a href="listaserviciosu" class="btn btn-success col-2">Atrás</a>
                    </div>
                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
