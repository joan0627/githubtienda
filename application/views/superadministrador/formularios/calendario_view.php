<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-bookmark-50.png"> Agenda</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Citas</a></li>
                        <li class="breadcrumb-item active">Agenda</li>
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
                <h3 class="card-title">Calendario</h3>
            </div> <!-- Fin Caja superior -->


            <div class="card-body">

                <!-- THE CALENDAR -->
                <div id="calendar">

                </div>


            </div>

            <div class="card-footer">


            </div>


        </div><!-- Fin content-wrapper -->


        <!--Modal formulario de citas-->
        <div class="modal fade " id="modal-cita">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-body">

                        <div class="card  card-success">
                            <div class="card-header">
                                <h3 class="card-title">Registro de cita</h3>

                                <div class="float-right">


                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">
                            <form id="form-cita">
                                <div class="row">
                                    <input name="idCita" id="idCita" type="hidden" class="form-control " value="">

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tipo de servicio</label> <label style="color: red;"> *</label>
                                            <select name="tiposervicioscita" id="tiposervicioscita"
                                                class="form-control">
                                                <option hidden value="">-Seleccione un tipo de servicio-</option>
                                                <?php foreach ($tiposservicios as $valor) : ?>
                                                <option value="<?php  echo  $valor->idTipoServicio; ?>">
                                                    <?php echo  $valor->descripcionTipoServicio; ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Servicio</label> <label style="color: red;"> *</label>
                                            <select disabled name="serviciocita" id="serviciocita" class="form-control">
                                               
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxasunto">
                                                <label for="checkboxasunto"></label>
                                            </div>
                                            <label>Asunto</label> <label style="color: red;"> * </label>
                                            <input disabled name="asunto" id="asunto" type="text" class="form-control "
                                                placeholder="Ingrese un breve asunto">
                                        </div>
                                    </div>


                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <label>Cliente</label> <label style="color: red;"> * </label>
                                        <div class="form-group">
                                            <select  id="clienteselect" name="clienteselect" class="form-control">
                                              
                                                <?php foreach ($clientes as $valor) : ?>

                                                <option value="<?php  echo  $valor->documento; ?>">
                                                    <?php echo  $valor->nombre; ?></option>

                                                <?php endforeach; ?>

                                            </select>
                                        </div>

                                    </div>

                                    <!--  <div class="col-md-3">

                                        <a href="<?php echo base_url(); ?>producto/registro" class="btn btn-info "><i
                                                class="fas fa-plus-circle "></i>
                                            Crear cliente</a>

                                    </div>-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nombre de la mascota</label> <label style="color: red;"> *</label>
                                            <select disabled id="mascotacliente"  name="mascotacliente" class="form-control "
                                                style="width: 100%;">
                                              
                                            </select>


                                        </div>

                                    </div>
                                </div>





                                <div class="row">


                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Especie</label>
                                            <input name="especiem" id="especiem" type="text" class="form-control"
                                                readOnly="readonly">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Raza</label>
                                            <input name="razam" id="razam" type="text" class="form-control"
                                                readOnly="readonly">
                                        </div>

                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Fecha de la cita</label> <label style="color: red;"> * </label>
                                            <div class="input-group date" id="datepicker" data-target-input="nearest">
                                                <div class="input-group-prepend" data-target="#datepicker"
                                                    data-toggle="datetimepicker">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                                <input readonly type="text" class="form-control datetimepicker-input"
                                                    data-target="#datepicker" id="fechaCita" name="fechaCita">
                                                    <input hidden type="text" class="form-control datetimepicker-input"
                                                    data-target="#datepicker" id="fechaFinCita">
                                            </div>
                                        </div>



                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Hora</label> <label style="color: red;"> *</label>
                                            <div class="input-group date" id="timepicker" data-target-input="nearest">
                                                <input readonly type="text" class="form-control datetimepicker-input"
                                                    data-target="#timepicker" id="horaCita" name="horaCita">
                                                <div class="input-group-append" data-target="#timepicker"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-3">

                                        <div class="form-group">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxcolor">
                                                <label for="checkboxcolor"></label>
                                            </div>
                                            <label>Color cita</label>
                                            <input type="color" id="color" value="#ffbcd1" class="
                                                form-control my-colorpicker1">
                                        </div>




                                    </div>
                                  
                                    
                                    <div class="col-md-3">

                                        <div class="form-group">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxcolortexto">
                                                <label for="checkboxcolortexto"></label>
                                            </div>
                                            <label>Color texto   </label>
                                            <input type="color" id="colortexto" value="#ffbcd1" class="form-control my-colorpicker1">
                                        </div>

                                    </div>




                                </div>
                                <div class="row">


                                    <div id="ob">
                                        <div class="form-group">
                                            <label>Observaciones</label>
                                            <textarea class="form-control" rows="4"
                                                placeholder="Escribe una observación ..." id="observacionesCita"
                                                name="observacionesCita"></textarea>


                                        </div>
                                    </div>
                                    <div class="col-md-6" id="estado">
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <select name="estadoCita" id="estadoCita" type="text" class="form-control" value="">
                                              
                                                <?php foreach ($estados as $valor) : ?>

                                                <option value="<?php  echo  $valor->idEstado; ?>">
                                                    <?php echo  $valor->descripcion; ?></option>

                                                <?php endforeach; ?>


                                            </select>
                                        </div>
                                    </div>



                                </div>

                                <div class="text-center card-footer">

                                    <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;"
                                        id="botonRegistroCita" class="btn btn-success col-2"><i class="fas fa-save"></i>
                                        Registrar</button>
                                    <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;"
                                        id="botonEditarCita" class="btn btn-success col-2"><i class="fas fa-save"></i>
                                        Actualizar</button>
                                       
                                    <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;"
                                        class="btn btn-success col-2" data-dismiss="modal"><i
                                            class="fas fa-window-close"></i>
                                        Cancelar</button>
                                </div>
                        </form>
                            </div>

                        




                        </div>
                    </div>

                </div>


            </div>
        </div>



        <!--Modal de pago para las citas -->
        <div class="modal fade " id="modal-pagarCita">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Pagar</h4>
                        
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">

                            <div class="container-fluid">
                                <div class="row mb-1">



                                    <div class="col-auto">

                                        <div class="form-group">

                                            <label>Forma de pago</label>
                                            <select id="forma_pagocita" name="forma_pagocita" class="form-control">


                                                <?php foreach ($formaPago as $valor) : ?>

                                                <option value="<?php  echo  $valor->idFormaPago; ?>">
                                                    <?php echo  $valor->descripcion; ?></option>

                                                <?php endforeach; ?>

                                            </select>

                                        </div>




                                    </div>



                                </div>

                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <div class="form-group">

                                            <label>Total</label>
                                            <input id="total_ventacita" name="total_ventacita" type="text" class="form-control "
                                                readOnly="readonly">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">

                                            <label>Entregado</label>
                                            <input id="entregadocita" name="entregadocita" placeholder="$" type="text"
                                                class="form-control " value="">
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">

                                            <label>Comprobante N°</label>
                                            <input disabled id="Ncomprobantecita" type="text" class="form-control "
                                                placeholder="N°">
                                        </div>
                                    </div>
                                </div>

                            </div>



                        </form>

                        <div id="div_cambiocita" style=" text-align:center; color:green; font-size:30px;">
                            <h2>Cambio: </h2>
                            <h2 class="cambiocita" id="cambiocita"> </h2>
                        </div>



                    </div>


                    <div class="modal-footer ">

                        <button  id="registroVentaCita" type="button" class="btn btn-success">
                            <i class="fas fa-save"></i> Registrar</button>



                    </div>




                </div>
            </div>
            <!-- /.modal-content -->
        </div>


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->


<script>
//Select2 para el campo CLiente de la sección de cita en agenda


</script>