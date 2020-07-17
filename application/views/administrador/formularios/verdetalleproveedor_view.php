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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
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
                                <input name="documento" type="text" class="form-control "
                                    placeholder="Ingrese el documento " value="Nit" Readonly="Readonly">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Documento</label> 
                                <input name="documento" type="text" class="form-control "
                                    placeholder="Ingrese el documento " value="41524124151" Readonly="Readonly">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre</label> 
                                <input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre"
                                    value="Soya" Readonly="Readonly">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Teléfono</label>
                                <input name="telefono" type="text" class="form-control"
                                    placeholder="Ingrese el teléfono" value="4525645" Readonly="Readonly">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label> 
                                <input name="celular" type="text" class="form-control" placeholder="Ingrese el celular"
                                    value="301747458" Readonly="Readonly">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dirección</label>
                                <input name="direccion" type="text" class="form-control"
                                    placeholder="Ingrese la dirección" value="Carrera 80 madera" Readonly="Readonly">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo</label>
                                <input name="correo" type="email" class="form-control" placeholder="Ingrese el correo"
                                    value="soya@gmail.com" Readonly="Readonly">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre contacto</label> 
                                <input name="nombreContacto" type="text" class="form-control"
                                    placeholder="Ingrese el celular" value="Alejandro Quintana" Readonly="Readonly">
                            </div>
                        </div>

                        <div class="row">


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dia visita</label>
                                <input name="diaVisita" type="text" class="form-control"
                                    placeholder="Ingrese la dirección" value="Lunes" Readonly="Readonly">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Observaciones</label>
                                <textarea class="form-control" rows="2" placeholder="" name="vision"
                                    readOnly="readonly">Este proveedor me vende más barato y es muy cumplido.</textarea>
                            </div>

                        </div>

                        <!--Fin del card body-->

                        <!--Inicio del footer del contenido-->
                        <br>
                        <a href="listado" id="botonAtras" class="btn btn-success col-2">Atrás</a>


                        <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
