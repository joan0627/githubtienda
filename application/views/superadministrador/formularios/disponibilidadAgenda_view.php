<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-schedule-50.png"> Disponibilidad</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Configuración</a></li>
                        <li class="breadcrumb-item active">Disponibilidad</li>
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
                <h3 class="card-title">Disponibilidad</h3>
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

                        <div class="card  card-success">
                            <div class="card-header">
                                <h3 class="card-title">Registro de disponibilidad</h3>

                                <div class="float-right">


                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="row">
                                    <input name="idDisponibilidad" id="idDisponibilidad" type="hidden"
                                        class="form-control " value="">
                                        <input hidden name="titulo" id="titulo" type="text" class="form-control"
                                        value="No disponible">

                                </div>

                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxdiall">
                                                <label for="checkboxdiall"></label>
                                            </div>
                                            <label>Todo el día</label>

                                        </div>

                                    </div>
                                        

                                </div>


                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Fecha</label> <label style="color: red;"> * </label>
                                        <div class="input-group date" id="datepickerdis" data-target-input="nearest">
                                            <div class="input-group-prepend" data-target="#datepickerdis"
                                                data-toggle="datetimepicker">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control datetimepicker-input"
                                                data-target="#datepickerdis" id="fechadisponibilidad">
                                        </div>
                                    </div>



                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Hora de inicio</label>
                                        <div class="input-group date" id="timeinicio" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                data-target="#timeinicio" id="horaInicio">
                                            <div class="input-group-append" data-target="#timeinicio"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Hora de fin</label>
                                        <div class="input-group date" id="timefin" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                data-target="#timefin" id="horaFin">
                                            <div class="input-group-append" data-target="#timefin"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>






                            </div>


                            <div class="text-center card-footer">

                                <button style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto;" id="botonRegistroDisponibilidad"
                                    class="btn btn-success col-md-4"><i class="fas fa-save"></i> Registrar</button>
                                <!-- <button style="" id="" class="btn btn-info "><i class="fas fa-save"></i> Editar</button>-->
                            </div>

                        </div>






                    </div>
                </div>

            </div>


        </div>
</div>





</section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->