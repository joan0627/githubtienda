<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-job-50.png"> Configuración</h1>
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
                <h3 class="card-title">Actualizar Home</h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" method="POST">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <label class="text-muted "> Se recomienda subir las imagenes con un tamaño de: (1200px *
                        1200px)</label>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Imagen 1</label> <label style="color: red;">
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
                                <label for="exampleInputFile">Imagen 2</label> <label style="color: red;">
                                    *</label>
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
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Imagen 3</label> <label style="color: red;">
                                    *</label>
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
                                <label for="exampleInputFile">Imagen 4</label> <label style="color: red;">
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
					</div>
					<hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <div class="form-group">
                                    <label>Quienes somos</label> <label style="color: red;"> *</label>
                                    <textarea class="form-control" rows="3"
                                        placeholder="Escribe algo de Quiénes somos ..." name="vision"></textarea>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">

                                <div class="form-group">
                                    <label>Misión</label> <label style="color: red;"> *</label>
                                    <textarea class="form-control" rows="3" placeholder="Escribe aqui tu misión ..."
                                        name="mision"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <div class="form-group">
                                    <label> Visión</label><label style="color: red;"> *</label>
                                    <textarea class="form-control" rows="3" placeholder="Escribe aqui tu visión ..."
                                        name="quienesSomos"></textarea>
                                </div>

                            </div>
                        </div>

					</div>
					<hr>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dirección</label> <label style="color: red;"> *</label>
                                <input name="dirección" type="text" class="form-control"
                                    placeholder="Ingrese la dirección">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Teléfono</label> <label style="color: red;"> *</label>
                                <input name="telefono" type="text" class="form-control"
                                    placeholder="Ingrese el teléfono">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo</label> <label style="color: red;"> *</label>
                                <input name="correo" type="text" class="form-control" placeholder="Ingrese el correo">
                            </div>
                        </div>
					</div>
					<hr>
                    <div class="row">


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dia inicio</label> <label style="color: red;"> *</label>
                                <input name="correo" type="text" class="form-control" placeholder="Lunes">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dia fin</label> <label style="color: red;"> *</label>
                                <input name="correo" type="text" class="form-control" placeholder="Viernes">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hora inicio</label> <label style="color: red;"> *</label>
                                <input name="correo" type="time" class="form-control" placeholder="Ingrese el correo">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hora fin</label> <label style="color: red;"> *</label>
                                <input name="correo" type="time" class="form-control" placeholder="Ingrese el correo">
                            </div>
                        </div>
                    </div>


                    <button type="submit" id="botonActualizarHome" class="btn btn-success col-2">Actualizar</button>
                  
                </div>





            </form>
            <!--Fin del form-->


            <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
