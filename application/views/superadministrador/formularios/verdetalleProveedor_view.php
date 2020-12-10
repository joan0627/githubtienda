<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-people-50.png">Proveedor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Proveedor</a></li>
                        <li class="breadcrumb-item active">Ver detalle del proveedor</li>
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
                <h3 class="card-title">Detalle del proveedor </h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" method="POST">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Tipo de documento</label>
                                <input readonly="readonly" name="tipoDocumento" type="text" class="form-control"
                                    placeholder="" value="<?php 

                                            echo $clave['descripcion']; 
									?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Documento</label>
                                <input id="documentoProveedorD" name="documento" type="text" class="form-control "
                                    placeholder="" value="<?php echo $clave['documento']; ?>" Readonly="Readonly">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre</label>
                                <input name="nombre" type="text" class="form-control" placeholder=""
                                    value="<?php echo $clave['nombre']; ?>" Readonly="Readonly">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Teléfono</label>
                                <input name="telefono" type="text" class="form-control" placeholder=""
                                    value="<?php echo $clave['telefono']; ?>" Readonly="Readonly">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label>
                                <input name="celular" type="text" class="form-control" placeholder="Ingrese el celular"
                                    value="<?php echo $clave['celular']; ?>" Readonly="Readonly">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dirección</label>
                                <input name="direccion" type="text" class="form-control" placeholder=""
                                    value="<?php echo $clave['direccion']; ?>" Readonly="Readonly">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo</label>
                                <input name="correo" type="email" class="form-control" placeholder="Ingrese el correo"
                                    value="<?php echo $clave['correo']; ?>" Readonly="Readonly">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre contacto</label>
                                <input name="nombreContacto" type="text" class="form-control" placeholder=""
                                    value="<?php echo $clave['nombreContacto']; ?>" Readonly="Readonly">
                            </div>
                        </div>

                        <div class="row">


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dia visita</label>
                                <input name="diaVisita" type="text" class="form-control" placeholder=""
                                    value="<?php echo $clave['diaVisita']; ?>" Readonly="Readonly">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Observaciones</label>
                                <textarea class="form-control" rows="2" placeholder="" name="vision"
                                    readOnly="readonly"><?php echo $clave['observaciones']; ?></textarea>
                            </div>

                        </div>

                        <!--Fin del card body-->


                        <br>
                        <div class="col-12 table-responsive">
                            <table id="tableDetalleMarca" class=" table table-striped " style="width:100%">

                                <thead>
                                    <tr>

                                        <th>id Marca</th>
                                        <th>Descripción</th>
                                  
                                    </tr>

                                </thead>


                                <tfoot>
                                </tfoot>
                            </table>
                        </div>


                        <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->

        <div class="text-center card-footer">

            <a style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; " href="<?php echo base_url(); ?>proveedor"
                id="botonAtras" class="btn btn-success col-2">Atrás</a>

        </div>


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->