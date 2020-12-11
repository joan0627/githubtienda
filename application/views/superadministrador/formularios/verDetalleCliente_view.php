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
                        <li class="breadcrumb-item active">Detalle del cliente</li>
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
                <h3 class="card-title">Detalle del cliente</h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" id="FormActualizarCliente" method="POST">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Tipo de documento</label> 
                                <select disabled name="tipoDocumento" class="form-control">

                                    <?php foreach ($idTiposDocumentos as $clave => $valor): ?>
                                    <option value="" selected hidden><?php  echo $cliente['descripcion']; ?></option>;
                                    <option value=" <?php echo $valor->idTipoDocumento; ?>">
                                        <?php echo $valor->descripcion; ?></option>

                                    <?php endforeach;?>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Documento</label> 
                                <input disabled id="documentoCDetalle" name="documentoCDetalle" type="text"
                                    class="form-control " placeholder="Ingrese el documento "
                                    value="<?php  echo $cliente['documento']; ?>">

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre completo</label>
                                <input disabled  type="text" class="form-control"
                                placeholder="Campo vacío" value="<?php  echo $cliente['nombre']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Teléfono</label>
                                <input disabled  type="text" class="form-control"
                                placeholder="Campo vacío" value="<?php  echo $cliente['telefono']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label>
                                <input  disabled  type="text" class="form-control"
                                placeholder="Campo vacío" value="<?php  echo $cliente['celular']; ?>">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dirección</label>
                                <input disabled  type="text" class="form-control"
                                placeholder="Campo vacío" value="<?php  echo $cliente['direccion']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo</label>
                                <input disabled  type="email" class="form-control"
                                    placeholder="Campo vacío" value="<?php  echo $cliente['correo']; ?>">
                            </div>

                        </div>

                    </div>

                
                    <br>
                    <div class="col-12 table-responsive">
                        <table id="tableDetalle" class=" table table-striped " style="width:100%">

                            <thead>
                                <tr>

                                    <th>Especie</th>
                                    <th>Nombre</th>
                                    <th>Raza</th>
                                    <th>Sexo</th>
                                    <th style='width:15% !important ;'>Peso</th>
                                    <th>Cumpleaños</th>
                                    <th style='width:15% !important ;'>Edad</th>
                                    <th style='width:15% !important ;'>Observación</th>
                                    <th style="text-align:center;">Estado</th>
                            
                
                                </tr>

                            </thead>

                            <tfoot>
                            </tfoot>
                        </table>
                    </div>




                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->


                    <div class="text-center card-footer">


                        <a style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; "
                            href="<?php echo base_url();?>cliente" id="botonAtras"
                            class="btn btn-success col-2"><i class="fas fa-arrow-left"></i> Atrás</a>


                    </div>





                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->