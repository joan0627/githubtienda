<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url(); ?>assets/img/iconos/icons8-people-50.png">Proveedor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Proveedor</a></li>
                        <li class="breadcrumb-item active">Actualizar proveedor</li>
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
                <h3 class="card-title">Actualizar el proveedor </h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" method="POST" id="form_actualizar_proveedor">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Tipo de documento</label>
                                <input id="tipoDocumentoAP" name="tipoDocumento" type="text" class="form-control " readonly="readonly" value="<?php  
								
								echo $clave['descripcion'];
								
								?>">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Documento</label>
                                <input id="documentoAP" name="documento" type="text" class="form-control "
                                    placeholder="Ingrese el documento " readonly="readonly"
                                    value="<?php echo $clave['documento']  ?>">

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre</label> <label style="color: red;"> *</label>
                                <input id="nombreAP" name="nombreAP" type="text" class="form-control" placeholder="Ingrese el nombre"
                                    value="<?php if(isset($_POST['nombre'])){ echo $_POST['nombre']; }else{ echo $clave['nombre']; } ?>">

                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Teléfono</label>
                                <input id="telefonoAP" name="telefono" type="text" class="form-control"
                                    placeholder="Ingrese el teléfono"
                                    value="<?php if(isset($_POST['telefono'])){ echo $_POST['telefono']; }else{ echo $clave['telefono']; } ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label> <label style="color: red;"> *</label>
                                <input id="celularAP"name="celularAP" type="text" class="form-control" placeholder="Ingrese el celular"
                                    value="<?php  if(isset($_POST['celular'])){ echo $_POST['celular']; }else{ echo $clave['celular']; } ?>">

                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dirección</label>
                                <input id="direccionAP" name="direccion" type="text" class="form-control"
                                    placeholder="Ingrese la dirección"
                                    value="<?php  if(isset($_POST['direccion'])){ echo $_POST['direccion']; }else{ echo $clave['direccion']; } ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo</label>
                                <input id="correoAP"  name="correoAP" type="email" class="form-control" placeholder="Sin correo"
                                    value="<?php  if(isset($_POST['correo'])){ echo $_POST['correo']; }else{ echo $clave['correo']; } ?>">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre contacto</label> <label style="color: red;"> *</label>
                                <input id="nombreCompletaAP"name="nombreCompletaAP" type="text" class="form-control"
                                    placeholder="Ingrese el celular"
                                    value="<?php  if(isset($_POST['nombreContacto'])){ echo $_POST['nombreContacto']; }else{ echo $clave['nombreContacto']; } ?>">

                            </div>
                        </div>



                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dia visita</label><label style="color: red;"> * </label>
                                <input id="diaVisitaAP"name="diaVisitaAP" type="text" class="form-control"
                                    placeholder="Ingrese la dirección" value="<?php echo $clave['diaVisita']; ?>">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Observaciones</label>
                                <textarea class="form-control" rows="2" placeholder=""
                                    id=observacionesAP name="observaciones"><?php echo $clave['observaciones']; ?></textarea>
                            </div>

                        </div>






                    </div>

                    <hr>

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table id="Tabla_actualizar_marca" class="table table-striped" style="width:100%">

                                <thead>
                                    <tr>
                                        <th>Id marca</th>
                                        <th>Descripción</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>

                        </div>

                    </div>

                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->

                    <br>


                    <div class="text-center card-footer">



                        <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto"
                            id="botonActualizarProveedor" class="btn btn-success col-2">Actualizar</button>
                        <a style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; "
                            href="<?php echo base_url(); ?>proveedor" id="botonAtras"
                            class="btn btn-success col-2">Atrás</a>


                    </div>

                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


        <!--Modal de añadir marcas-->
        <div class="modal fade " id="modalActualizarMarca">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Buscar marca</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Listado de marca</h3>

                                <div class="float-right">

                                    <a href="#" class="btn btn-success"><i class="fas fa-plus-circle "></i>
                                        Crear marca</a>
                                </div>
                            </div>

                            <div class="card-body">


                                <table id="tableMarcaActualizar" class="table table-striped" style="width:100%">

                                    <thead>
                                        <tr>
                                            <th>Id Marca</th>
                                            <th>Descripción</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($marcas as $valor) : ?>
                                        <tr>
                                            <td><?php echo  $valor->idMarca; ?></td>
                                            <td><?php echo  $valor->descripcionMarca; ?></td>
                                            <td><button class='btnActualizarMarca'
                                                    style=' color: #5CB85C; border: none; background: none; outline: none;'><i
                                                        class='fas fa-plus-circle'
                                                        style='font-size:28px; '></i></button>
                                            </td>
                                        </tr>

                                        <?php endforeach; ?>
                                    </tbody>


                                    <tfoot>

                                    </tfoot>
                                </table>

                            </div>



                        </div>
                    </div>

                </div>


            </div>
        </div>

    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->