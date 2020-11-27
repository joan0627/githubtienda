<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url(); ?>assets/img/iconos/icons8-people-50.png"> Clientes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Clientes</a></li>
                        <li class="breadcrumb-item active">Actualizar cliente</li>
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
                <h3 class="card-title">Actualizar cliente</h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" id="FormActualizarCliente" method="POST">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div style="text-align:left">
                                <i><small> Todos los campos marcados con <label style="color: red;">asterisco
                                            (*)</label>
                                        son obligatorios.</small></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Tipo de documento</label>

                                <input readonly="readonly" name="tipoDocumento" type="text" class="form-control "
                                    placeholder="Campo vacío" value="<?php  echo $cliente['descripcion']; ?>">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Documento</label>
                                <input readonly="readonly" id="documentoClienteA" name="documento" type="text"
                                    class="form-control " placeholder="Ingrese el documento "
                                    value="<?php  echo $cliente['documento']; ?>">

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre completo</label> <label style="color: red;"> *</label>
                                <input id="nombreClienteA" name="nombreClienteA" type="text" class="form-control"
                                    placeholder="Ingrese el nombre" value="<?php  echo $cliente['nombre']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Teléfono</label>
                                <input id="telefonoClienteA" name="telefonoClienteA" type="text" class="form-control"
                                    placeholder="Ingrese el teléfono" value="<?php  echo $cliente['telefono']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label> <label style="color: red;"> *</label>
                                <input id="celularClienteA" name="celularClienteA" type="text" class="form-control"
                                    placeholder="Ingrese el celular" value="<?php  echo $cliente['celular']; ?>">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dirección</label>
                                <input id="direccionClienteA" name="direccionClienteA" type="text" class="form-control"
                                    placeholder="Ingrese la dirección" value="<?php  echo $cliente['direccion']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo</label>
                                <input id="correoClienteA" name="correoClienteA" type="email" class="form-control"
                                    placeholder="Ingrese el correo" value="<?php  echo $cliente['correo']; ?>">
                            </div>

                        </div>

                    </div>

                    <hr>
                    <div class="col-12 table-responsive">

                        <table id="ActualizarTablaDetalleMascota" class=" table table-striped " style="width:100%">

                            <thead>
                                <tr>

                                    <th>Especie</th>
                                    <th>Nombre</th>
                                    <th>Raza</th>
                                    <th>Sexo</th>
                                    <th style='width:10% !important ;'>Peso</th>
                                    <th>Cumpleaños</th>
                                    <th style='width:10% !important ;'>Edad</th>
                                    <th>Observaciones</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                    <th>idMascota</th>




                                </tr>

                            </thead>


                            <tfoot>
                            </tfoot>
                        </table>

                    </div>

                    <hr>


                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->


                    <div class="text-center card-footer">



                        <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;"
                            id="botonActualizarCliente" action="confirmEdit"
                            class="btn btn-success col-2">Actualizar</button>

                        <a style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; "
                            href="<?php echo base_url();?>cliente" id="botonAtras"
                            class="btn btn-success col-2">Atrás</a>


                    </div>





                    <!--Fin del footer del contenido-->
                </div>


            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->
        <!--Modal de añadir mascotas-->
        <div class="modal fade " id="modalActualizarMascota">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">

                        <!-- Inicio Contenido Total -->
                        <div class="card  card-success">
                            <!-- Incio Caja superior -->
                            <div class="card-header">
                                <h3 id="nameEtiqueta" class="card-title">Registro de mascotas </h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div> <!-- Fin Caja superior -->

                            <!-- Inicio form -->
                            <form id="FormActualizarMascota">
                                <!--Inicio del card body-->
                                <div class="card-body ">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div style="text-align:left">
                                                <i><small> Todos los campos marcados con <label
                                                            style="color: red;">asterisco
                                                            (*)</label>
                                                        son obligatorios.</small></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">


                                        <div hidden class="col-md-2">
                                            <div class="form-group">

                                                <label>id</label> <label style="color: red;"> * </label>
                                                <input id="idActualizar" name="idAcualizarM" type="text"
                                                    class="form-control " placeholder="Ingrese el nombre ">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <label>Especie</label> <label style="color: red;"> *</label>
                                                <select id="tipoMascotaActualizar" name="tipoMascotaActualizar"
                                                    class="form-control">
                                                    <?php foreach ($tipomascotas as $clave => $valor) : ?>
                                                    <option value="" selected hidden>-Seleccione el tipo de especie-
                                                    </option>;
                                                    <option value="<?php echo  $valor->idTipoMascota; ?>">
                                                        <?php echo  $valor->descripcion; ?></option>

                                                    <?php endforeach; ?>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <label>Nombre</label> <label style="color: red;"> * </label>
                                                <input id="nombreActualizar" name="nombreActualizar" type="text"
                                                    class="form-control " placeholder="Ingrese el nombre ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group ">

                                                <label>Raza</label> <label style="color: red;"> *</label>
                                                <select id="razaActualizar" name="razaActualizar"
                                                    class="form-control select2bs4" style="width: 100%;">

                                                    <?php foreach ($razas as $clave => $valor) : ?>
                                                    <option value="" selected hidden>-Seleccione la raza de mascota-
                                                    </option>;
                                                    <option value="<?php echo  $valor->idraza; ?>">
                                                        <?php echo  $valor->descripcionRaza; ?></option>
                                                    <?php endforeach; ?>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <label>Sexo</label> <label style="color: red;"> *</label>
                                                <select id="sexoActualizar" name="sexoActualizar" class="form-control">

                                                    <option value="" hidden selected>-Seleccione el sexo de la mascota-
                                                    </option>
                                                    <option>Macho</option>
                                                    <option>Hembra</option>
                                                    <option>Desconocido</option>
                                                </select>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Peso</label> <label style="color: red;">*</label>
                                                <input id="pesoActualizar" name="pesoActualizar" type="number" min="0"
                                                    class="form-control" placeholder="Ingrese el peso">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Unidad de medida</label> <label style="color: red;">*</label>
                                                <select id="unidadActualizar" name="unidadActualizar"
                                                    class="form-control " style="width: 100%;">

                                                    <?php foreach ($unidadesmedidas as $clave => $valor) : ?>
                                                    <option value="" selected hidden>-Seleccione una unidad de medida-
                                                    </option>;
                                                    <option value="<?php echo  $valor->idUnidadMedida; ?>">
                                                        <?php echo  $valor->descripcionUnidadmedida; ?></option>

                                                    <?php endforeach; ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Fecha de cumpleaños</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input id="cumpleanosActualizar" name="cumpleanosActualizar"
                                                        type="date" class="form-control">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Edad</label> <label style="color: red;">*</label>
                                                <input id="edadActualizar" name="edadActualizar" type="number"
                                                    class="form-control" placeholder="Ingrese la edad">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tiempo</label> <label style="color: red;"> *</label>
                                                <select id="tiempoActualizar" name="tiempoActualizar"
                                                    class="form-control " style="width: 100%;">
                                                    <option value="" selected="selected">-Seleccione el tiempo de edad-
                                                    </option>
                                                    <option>Dia(s)</option>
                                                    <option>Semana(s)</option>
                                                    <option>Mes(es)</option>
                                                    <option>Año(s)</option>
                                                   
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Observaciones</label>
                                                <textarea id="observacionesActualizar" name="observacionesActualizar"
                                                    class="form-control" rows="3"
                                                    placeholder="Ingrese una observación..." maxlength="150"></textarea>
                                                <div style="color: gray;" class="contador text-right"><span
                                                        id="contador"></span><span>/150</span></div>
                                            </div>
                                        </div>


                                    </div>

                            </form>

                            <!--Fin del card body-->

                            <!--Inicio del footer del contenido-->
                            <div class="text-center card-footer">


                                <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;"
                                    id="btnActualizarAnadirMascota" action="confirmEdit"
                                    class="btn btn-success col-2">Añadir</button>

                                <button style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; "
                                    data-dismiss="modal" id="botonCancelarMascotaA"
                                    class="btn btn-success col-2">Cancelar</button>




                            </div>



                            <!--Fin del footer del contenido-->




                            <!--Fin del form-->


                        </div> <!-- Fin Contenido Total -->
                    </div>

                </div>


            </div>
        </div>
        <!--Fin Modal-->

    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->