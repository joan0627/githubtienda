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
            <form role="form" method="POST">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Tipo de documento</label> <label style="color: red;"> *</label>
                                <select name="tipoDocumento" class="form-control">
                                    <?php if ($idTipoDocumento != "") : ?>
                                    <?php foreach ($idTiposDocumentos as $clave => $valor) : ?>
                                    <?php if ($idTipoDocumento == $valor->idTipoDocumento) : ?>

                                    <option hidden value=" <?php echo  $valor->idTipoDocumento; ?>" selected>
                                        <?php


													echo  $valor->descripcion; ?></option>
                                    <?php
												foreach ($idTiposDocumentos as $clave => $valor) : ?>


                                    <option value=" <?php echo  $valor->idTipoDocumento; ?>">
                                        <?php echo  $valor->descripcion; ?></option>

                                    <?php endforeach; ?>

                                    <?php endif;  ?>
                                    <?php endforeach; ?>
                                    <?php else :
										foreach ($idTiposDocumentos as $clave => $valor) : ?>
                                    <option value="" selected hidden>-Seleccione un tipo de documento-</option>;
                                    <option value=" <?php echo  $valor->idTipoDocumento; ?>">
                                        <?php echo  $valor->descripcion; ?></option>

                                    <?php endforeach; ?>
                                    <?php endif ?>

                                </select>
                                <?php echo form_error('tipoDocumento', '<p class="text-danger">', '</p>'); ?>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Documento</label> <label style="color: red;"> * </label>
                                <input name="documento" type="text" class="form-control "
                                    placeholder="Ingrese el documento " value="<?php echo $documento; ?>">
                                <?php echo form_error('documento', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre</label> <label style="color: red;"> *</label>
                                <input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre"
                                    value="<?php echo $nombre; ?>">
                                <?php echo form_error('nombre', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Teléfono</label>
                                <input name="telefono" type="text" class="form-control"
                                    placeholder="Ingrese el teléfono" value="<?php echo $telefono; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label> <label style="color: red;"> *</label>
                                <input name="celular" type="text" class="form-control" placeholder="Ingrese el celular"
                                    value="<?php echo $celular; ?>">
                                <?php echo form_error('celular', '<p class="text-danger">', '</p>'); ?>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dirección</label>
                                <input name="direccion" type="text" class="form-control"
                                    placeholder="Ingrese la dirección" value="<?php echo $direccion; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo</label>
                                <input name="correo" type="text" class="form-control" placeholder="Ingrese el correo"
                                    value="<?php echo $correo; ?>">
                                <?php echo form_error('correo', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre contacto</label> <label style="color: red;"> *</label>
                                <input name="nombreContacto" type="text" class="form-control"
                                    placeholder="Ingrese el nombre del contacto" value="<?php echo $nombreContacto; ?>">
                                <?php echo form_error('nombreContacto', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>




                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dia visita</label> <label style="color: red;"> *</label>
                                <input name="diaVisita" type="text" class="form-control"
                                    placeholder="Ingrese el dia de visita" value="<?php echo $diaVisita; ?>">
                                <?php echo form_error('diaVisita', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Observaciones</label>
                                <textarea class="form-control" rows="2"
                                    placeholder="Escribe una observación sobre tu proveedor..."
                                    name="observaciones"><?php echo $observaciones; ?></textarea>
                                <?php echo form_error('observaciones', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>



                    </div>
                    <hr>


                    <table id="tableProveedor" class="table table-striped" style="width:100%">

                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Age</th>
                            </tr>
                        </thead>
                        
                        <tr>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                        </tr>

                        <tfoot>

                        </tfoot>
                    </table>
                    <hr>

                    <!-- Modal -->
                    <div id="modalañadirMarca" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                            <div class="card card-success">
                                <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                            </div>

                        </div>
                    </div>

