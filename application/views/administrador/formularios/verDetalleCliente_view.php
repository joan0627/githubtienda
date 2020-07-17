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
                <h3 class="card-title">Ver detalle del cliente</h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" method="POST">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Tipo de documento</label>
                                <input name="documento" type="text" class="form-control "
                                    placeholder="Ingrese el documento " value="Cédula de ciudadania"
                                    readonly="readonly">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Documento</label>
                                <input name="documento" type="text" class="form-control "
                                    placeholder="Ingrese el documento " value="1001661421" readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre completo</label>
                                <input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre"
                                    value="Carlos Sánchez" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Teléfono</label>
                                <input name="telefono" type="text" class="form-control"
                                    placeholder="Ingrese el teléfono" value="454512512" readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label>
                                <input name="celular" type="text" class="form-control" placeholder="Ingrese el celular"
                                    value="3017474883" readonly="readonly">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dirección</label>
                                <input name="direccion" type="text" class="form-control"
                                    placeholder="Ingrese la dirección" value="carrera #80" readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo</label>
                                <input name="correo" type="email" class="form-control" placeholder="Ingrese el correo"
                                    value="Carlos124@gmail.com" readonly="readonly">
                            </div>

                        </div>

                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 150px">Tipo de mascota</th>
                                <th>Nombre de la mascota</th>
                                <th>Raza</th>
                                <th style="width: 40px">Peso</th>
                                <th>Cumpleaños</th>
                                <th>Observaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Perro</td>
                                <td>Bruno</td>
                                <td>
                                    <div class="">Pitbull
                                        <div class="" style="width: 55%"></div>
                                    </div>
                                </td>
                                <td><span class="">30KG</span></td>
                                <td><span class="">01/22/2011</span></td>
                                <td><span class="">Ninguna</span></td>
                            </tr>
                            <tr>
                                <td>Gato</td>
                                <td>Muñeca</td>
                                <td>
                                    <div class="">Angora
                                        <div class="" style="width: 70%"></div>
                                    </div>
                                </td>
                                <td><span class="">5KG</span></td>
                                <td><span class="">31/10/2017</span></td>
                                <td><span class="">Ninguna</span></td>
                            </tr>

                        </tbody>
                    </table>


                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->



                    <div class="card-footer">


					<a href="listado" id="botonAtras" class="btn btn-success col-2">Atrás</a>


                    </div>



                  

                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
