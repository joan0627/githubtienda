<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-schedule-50.png"> Programación</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Configuración</a></li>
                        <li class="breadcrumb-item active">Programación</li>
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
                <h3 class="card-title">Programación de la disponibilidad</h3>
            </div> <!-- Fin Caja superior -->


            <div class="card-body">

                <!-- THE CALENDAR -->
                <div id="calendardisponibilidad">

                </div>


            </div>

            <div class="card-footer">


            </div>


        </div><!-- Fin content-wrapper -->


        <!--Modal formulario de citas-->
        <div class="modal fade " id="modal-disponibilidad">
            <div class="modal-dialog modal-auto" role="document">
                <div class="modal-content">

                    <div class="modal-body">

                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Registro de disponibilidad</h3>

                                <div class="float-right">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">
                            <form id="form-disponibilidad">
                                <div class="row">
                                    <input name="idDisponibilidad" id="idDisponibilidad" type="hidden"
                                        class="form-control " value="">
                                        <input hidden name="titulo" id="titulo" type="text" class="form-control"
                                        value="No disponible">
                                </div>


                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Fecha</label> <label style="color: red;"> * </label>
                                            <div class="input-group date" id="datepickerdis"
                                                data-target-input="nearest">
                                                <div class="input-group-prepend" data-target="#datepickerdis"
                                                    data-toggle="datetimepicker">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                                <input readonly type="text" class="form-control datetimepicker-input"
                                                    data-target="#datepickerdis" id="fechadisponibilidad" name="fechadisponibilidad" >
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Hora de inicio</label> <label style="color: red;"> *</label>
                                            <div class="input-group date" id="timeinicio" data-target-input="nearest">
                                                <input readonly type="text" class="form-control datetimepicker-input"
                                                    data-target="#timeinicio" id="horaI" name="horaI">
                                                <div class="input-group-append" data-target="#timeinicio"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                               
                                <div class="d-flex justify-content-center">
                                    
                                    <div  class="col-sm-6">
                                        <div style="text-align:center;">
                                        <label>Hora de fin</label> <label style="color: red;"> * </label>

                                        </div>
                                        <div class="form-group">
                                          
                                            <div style="text-align:center;" class="input-group date" id="timefin" data-target-input="nearest">
                                                <input readonly type="text" class="form-control datetimepicker-input"
                                                    data-target="#timefin" id="horaF" name="horaF">
                                                <div class="input-group-append" data-target="#timefin"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div class="text-center card-footer">

                                <button style="padding: 10px 5px; margin: 10px 5px;  margin: 5px auto;"
                                    id="botonRegistroDisponibilidad" class="btn btn-success col-md-4"><i
                                        class="fas fa-save"></i> Registrar</button>
                                 <button style="padding: 10px 5px; margin: 10px 5px;  margin: 5px auto;" id="botonActualizarDisponibilidad" class="btn btn-success col-md-4"><i class="fas fa-save"></i> Actualizar</button>
                                 <button style="padding: 10px 5px; margin: 10px 5px;  margin: 5px auto;" id="botonEliminarDisponibilidad" class="btn btn-danger col-md-4"><i class="fas fa-trash"></i> Eliminar</button>

                            </div>

                        </form>
                        </div>

                    </div>
                </div>

            </div>


        </div>






    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->

