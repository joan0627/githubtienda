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
                        <li class="breadcrumb-item active">Registro de proveedores</li>
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
                <h3 class="card-title">Registro de proveedor </h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form id="form_proveedor" >
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Tipo de documento</label> <label style="color: red;"> *</label>
                                <select id="idTipodocumenroP" name="tipoDocumento" class="form-control">
                                    <?php if ($idTipoDocumento != ""): ?>
                                    <?php foreach ($idTiposDocumentos as $clave => $valor): ?>
                                    <?php if ($idTipoDocumento == $valor->idTipoDocumento): ?>

                                    <option hidden value=" <?php echo $valor->idTipoDocumento; ?>" selected>
                                        <?php

                                            echo $valor->descripcion; ?></option>
                                                                                <?php
                                            foreach ($idTiposDocumentos as $clave => $valor): ?>


                                    <option value=" <?php echo $valor->idTipoDocumento; ?>">
                                        <?php echo $valor->descripcion; ?></option>

                                    <?php endforeach;?>

                                    <?php endif;?>
                                    <?php endforeach;?>
                                    <?php else:
                                     foreach ($idTiposDocumentos as $clave => $valor): ?>
                                    <option value="" selected hidden>-Seleccione un tipo de documento-</option>;
                                    <option value=" <?php echo $valor->idTipoDocumento; ?>">
                                        <?php echo $valor->descripcion; ?></option>

                                    <?php endforeach;?>
                                    <?php endif?>

                                </select>
                                <?php echo form_error('tipoDocumento', '<p class="text-danger">', '</p>'); ?>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Documento</label> <label style="color: red;"> * </label>
                                <input id="documentoProveedor" name="documento" type="text" class="form-control "
                                    placeholder="Ingrese el documento " value="<?php if (isset($documento)){echo $documento;  } else echo $documento; ?>">
                                <?php echo form_error('documento', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre</label> <label style="color: red;"> *</label>
                                <input id="nombreP" name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre"
                                    value="<?php echo $nombre; ?>">
                              

                                <?php echo form_error('nombre', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Teléfono</label>
                                <input id="telefonoP" name="telefono" type="text" class="form-control"
                                    placeholder="Ingrese el teléfono" value="<?php echo $telefono; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label> <label style="color: red;"> *</label>
                                <input id="celularP" name="celular" type="text" class="form-control" placeholder="Ingrese el celular"
                                    value="<?php echo $celular; ?>">
                                <?php echo form_error('celular', '<p class="text-danger">', '</p>'); ?>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dirección</label>
                                <input id="direccionP"name="direccion" type="text" class="form-control"
                                    placeholder="Ingrese la dirección" value="<?php echo $direccion; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo</label>
                                <input id="correoP"name="correo" type="text" class="form-control" placeholder="Ingrese el correo"
                                    value="<?php echo $correo; ?>">
                                <?php echo form_error('correo', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre contacto</label> <label style="color: red;"> *</label>
                                <input id="nombreContactoP" name="nombreContacto" type="text" class="form-control"
                                    placeholder="Ingrese el nombre del contacto" value="<?php echo $nombreContacto; ?>">
                                <?php echo form_error('nombreContacto', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>




                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dia visita</label> <label style="color: red;"> *</label>
                                <input id="diaVisitaP" name="diaVisita" type="text" class="form-control"
                                    placeholder="Ingrese el dia de visita" value="<?php echo $diaVisita; ?>">
                                <?php echo form_error('diaVisita', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Observaciones</label>
                                <textarea class="form-control" rows="2"
                                    placeholder="Escribe una observación sobre tu proveedor..."
                                    id="observacionesP" name="observaciones"><?php echo $observaciones; ?></textarea>
                                <?php echo form_error('observaciones', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>



                    </div>
                    <hr>

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table id="tableProveedor" class="table table-striped" style="width:100%">

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
                    <hr>



                    <!--Fin del card body-->


                    <!--Inicio del footer del contenido-->
                    <div class="text-center card-footer">



                        <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;" type="submit"
                            id="registroProveedor" class="btn btn-success col-2">Registrar </button>
                            
                        <a style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; "
                            href="<?php echo base_url(); ?>proveedor" id="botonAtras"
                            class="btn btn-success col-2">Atrás</a>


                    </div>


            </form>



            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->





        <!--Fin del footer del contenido-->



        <!--Modal de añadir marcas-->
        <div class="modal fade " id="modalañadirMarca">
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


                                <table id="tableMarca" class="table table-striped" style="width:100%">

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
                                            <td><button class='btnMarca'
                                                    style=' border: none; background: none; outline: none;'><i
                                                        class='fas fa-plus-circle'
                                                        style='font-size:28px;color: #5CB85C; '></i></button>
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