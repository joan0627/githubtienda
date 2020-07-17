<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-schedule-50.png">Citas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Citas</a></li>
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
                <h3 class="card-title">Actualizar la cita </h3>


            </div> <!-- Fin Caja superior -->


            <!-- Inicio form -->
            <form role="form" method="POST">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">


                                <label>Cliente</label> <label style="color: red;"> * </label>
                                <select class="form-control select2bs4" style="width: 100%;">
                                    <option selected="selected">-Seleccione el cliente-</option>
                                    <option value="1">David Sánchez Cano</option>
                                    <option value="2">Joan Manuel Bolivar</option>
                                    <option value="2">Fredy Alberto Gil</option>

                                </select>



                            </div>

                        </div>


                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Asunto de la cita</label> <label style="color: red;"> * </label>
                                <input name="asunto" type="text" class="form-control "
                                    placeholder="Ingrese un breve asunto">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre de la mascota</label>
                                <select class="form-control select2bs4" style="width: 100%;">
                                    <option selected="selected">-Seleccione una mascota-</option>
                                    <option value="1">Luna</option>
                                    <option value="2">Rambo</option>
                                </select>


                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Tipo</label>
                                <input name="Tipo" type="text" class="form-control" placeholder="" readOnly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Raza</label>
                                <input name="raza" type="text" class="form-control" placeholder="" readOnly="readonly">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fecha de la cita</label> <label style="color: red;"> * </label>
                                <input name="fechaCita" type="date" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hora</label> <label style="color: red;"> * </label>
                                <input name="hora" type="time" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <div class="form-group">
                                    <label>Observaciones</label>
                                    <textarea class="form-control" rows="2" placeholder="Escribe una observación ..."
                                        name="vision"></textarea>
                                </div>

                            </div>
                        </div>

                        <div class="row">


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Servicio</label> <label style="color: red;"> *</label>
                                <select name="servicio" class="form-control">

                                    <option hidden selected>-Seleccione el tipo de servicio-</option>
                                    <option value="1">Peluqueria</option>
                                    <option value="2">Desparacitación</option>
                                    <option value="2">Vacunación</option>
                                </select>
                            </div>
						</div>
						

						<div class="col-md-6">
                            <div class="form-group">
                                <label>Estado</label> <label style="color: red;"> *</label>
                                <select name="servicio" class="form-control">

                                   
                                    <option selected value="1">Programada</option>
                                    <option value="2">En proceso</option>
									<option value="2">Finalizado</option>
									<option value="2">No asistió</option>
									<option value="2">Reprogramar</option>
									<option value="2">Canceló</option>
									
                                </select>
                            </div>
                        </div>

                    </div>

                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->

                    <br>

                    <button type="submit" id="botonAgregarServicio" class="btn btn-success col-2">Actualizar</button>
                    <a href="historial" id="botonAtras" class="btn btn-success col-2">Atrás</a>

                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
