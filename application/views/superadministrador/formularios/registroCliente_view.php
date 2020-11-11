<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-people-50.png"> Clientes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Clientes</a></li>
                        <li class="breadcrumb-item active">Registro cliente</li>
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
                <h3 class="card-title">Registro de cliente </h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form id="form_registroCliente" role="form" method="POST">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Tipo de documento</label> <label style="color: red;"> *</label>
                                <select id="tipoDocumentoC" name="tipoDocumento" class="form-control">

                                    <option hidden selected>-Seleccione el tipo de documento-</option>
                                    <option value="1">Cédula de ciudadanía</option>
                                    <option value="2">Cédula de extranjería</option>
                                    <option value="3">Pasaporte</option>
                                    <option value="4">Tarjeta de identidad</option>
                                    <option value="5">Registro civil</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Documento</label> <label style="color: red;"> * </label>
                                <input id="documentoC" name="documento" type="text" class="form-control "
                                    placeholder="Ingrese el documento ">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre completo</label> <label style="color: red;"> *</label>
                                <input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Teléfono</label>
                                <input name="telefono" type="text" class="form-control"
                                    placeholder="Ingrese el teléfono">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label> <label style="color: red;"> *</label>
                                <input name="celular" type="text" class="form-control" placeholder="Ingrese el celular">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dirección</label>
                                <input name="direccion" type="text" class="form-control"
                                    placeholder="Ingrese la dirección">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo</label>
                                <input name="correo" type="email" class="form-control" placeholder="Ingrese el correo">
                            </div>
                        </div>

                    </div>


                    <hr>


                            <table id="tableDetalleMascota" class=" table table-striped ">

                                    <thead>

                                        <tr>
                                            <th>Tipo</th>
                                            <th>Nombre</th>
                                            <th>Raza</th>
                                            <th>Sexo</th>
                                            <th style='width:15%' >Peso</th>
                                            <th>Cumpleaños</th>
                                            <th style='width:15% '>Edad</th>
                                            <th>Observaciones</th>
                                            <th>Acciones</th>


                                        </tr>

                                    </thead>
                                    <tbody>
                                        
  
                                    </tbody>

                                    <tfoot>



                                    </tfoot>
                                </table>
                    

                    <hr>

                    <!--Fin del card body-->


                    <!--Inicio del footer del contenido-->
                    <div class="text-center card-footer">



                        <button  style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;" 
                            id="btnRegistroCliente" class="btn btn-success col-2">Registrar</button>

                        <a style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; " href="listaclientesu"
                            id="botonAtras" class="btn btn-success col-2">Atrás</a>


                    </div>

                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


        <!--Modal de añadir mascotas-->
        <div class="modal fade " id="modalMascota">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">

                        <!-- Inicio Contenido Total -->
                        <div class="card  card-success">
                            <!-- Incio Caja superior -->
                            <div class="card-header">
                                <h3 class="card-title">Registro de mascotas </h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div> <!-- Fin Caja superior -->

                            <!-- Inicio form -->
                            <form id="formMascota">
                                <!--Inicio del card body-->
                                <div class="card-body ">
                                    <div class="row">                                       

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <label>Tipo de mascota</label> <label style="color: red;"> *</label>
                                                <select id="tipoMascota" name="tipoMascota" class="form-control">
                                                <?php foreach ($tipomascotas as $clave => $valor) : ?>
                                                    <option value="" selected hidden>-Seleccione el tipo de mascota-</option>;
                                                    <option><?php echo  $valor->descripcion; ?></option>
                                                        

                                                <?php endforeach; ?>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <label>Nombre</label> <label style="color: red;"> * </label>
                                                <input id="nombreM" name="nombreM" type="text" class="form-control "
                                                    placeholder="Ingrese el nombre ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group ">

                                                <label>Raza</label> <label style="color: red;"> *</label>
                                                <select id="razaM" name="razaM" class="form-control select2bs4" style="width: 100%;">

                                                <?php foreach ($razas as $clave => $valor) : ?>
                                                    <option value="" selected hidden>-Seleccione la raza de mascota-</option>;
                                                    <option><?php echo  $valor->descripcion; ?></option>
                                                    <?php endforeach; ?>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <label>Sexo</label> <label style="color: red;"> *</label>
                                                <select id="sexoM" name="sexoM" class="form-control">

                                                    <option value="" hidden selected>-Seleccione el sexo de la mascota-</option>
                                                    <option>Macho</option>
                                                    <option>Hembra</option>
                                                </select>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Peso</label>
                                                <input id="pesoM" name="pesoM" type="text" class="form-control"
                                                    placeholder="Ingrese el peso">
                                            </div>
                                        </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Unidad de medida</label> <label style="color: red;">*</label>
                                                    <select id="unidadM" name="unidadMascota" class="form-control " style="width: 100%;">
                                               
                                                        <?php foreach ($unidadesmedidas as $clave => $valor) : ?>
                                                        <option value="" selected hidden>-Seleccione una unidad de medida-</option>;
                                                        <option><?php echo  $valor->descripcionUnidadmedida; ?></option>

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
                                                    <input id="cumpleanosM" name="cumpleanosM" type="date" class="form-control">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Edad</label>
                                                <input id="edadM" name="edadM" type="text" class="form-control"
                                                    placeholder="Ingrese la edad">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tiempo</label> <label style="color: red;"> *</label>
                                                <select id="tiempoM" name="tiempoM" class="form-control " style="width: 100%;">
                                                    <option value="" selected="selected">-Seleccione el tiempo de edad-</option>
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
                                                <textarea id="observacionesM" name="observacionesM" class="form-control" rows="3"
                                                    placeholder="Ingrese una observación..." name="obs"></textarea>
                                            </div>
                                        </div>


                                    </div>

                            </form>

                            <!--Fin del card body-->

                            <!--Inicio del footer del contenido-->
                            <div class="text-center card-footer">


                                <button  style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;"
                                    id="btnAnadirMascota" class="btn btn-success col-2">Añadir</button>

                                <button style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; "
                                    data-dismiss="modal" id="botonCancelar"
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