<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-cat-footprint-50.png">Mascota</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Mascota</a></li>
                        <li class="breadcrumb-item active">Detalle de mascota</li>
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
                <h3 class="card-title">Ver detalle de mascota </h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" method="POST">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Tipo de mascota</label>
                                <input name="raza" type="text" class="form-control" value="Perro" readonly="readonly">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Nombre</label>
                                <input name="nombre" type="text" class="form-control " value="Bruno"
                                    readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Raza</label>
                                <input name="raza" type="text" class="form-control" value="Pitbull" readonly="readonly">
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Sexo</label>
                                <input name="raza" type="text" class="form-control" value="Macho" readonly="readonly">
                            </div>
                        </div>


                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Peso</label>
                                <input name="peso" type="text" class="form-control" value="30KG" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cumpleaños</label>
                                <input name="Cumpleaños" type="text" class="form-control" value="22/01/2011"
                                    readonly="readonly">
                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Edad</label>
                                <input name="raza" type="text" class="form-control" value="5 años" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Observaciones</label>
                                <textarea class="form-control" rows="3" placeholder="Ninguna"
                                    readonly="readonly"></textarea>
                            </div>
                        </div>
                    </div>

                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->


                    <div class="card-footer">


                        <a href="<?php echo base_url();?>cliente/actualizarclientesu" id="botonAtras"
                            class="btn btn-success col-2">Atrás</a>

                    </div>






                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
