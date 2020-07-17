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
                        <li class="breadcrumb-item active">Actualizar la mascota</li>
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
                <h3 class="card-title">Actualizar la mascota </h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" method="POST">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Tipo de mascota</label> <label style="color: red;"> *</label>
                                <select name="tipoDocumento" class="form-control">

                                    
                                    <option selected value="1">Perro</option>
                                    <option value="2">Gato</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Nombre</label> <label style="color: red;"> * </label>
                                <input name="nombre" type="text" class="form-control " value="Bruno" placeholder="Ingrese el nombre ">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Raza</label> <label style="color: red;"> *</label>
                                <input name="raza" type="text" class="form-control" value="Pitbull" placeholder="Ingrese la raza">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Peso</label>
                                <input name="peso" type="text" class="form-control" value="30KG" placeholder="Ingrese el peso">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cumpleaños</label>
                                <input name="Cumpleaños" type="date" value="01/22/2011"class="form-control"
                                    placeholder="Ingrese el celular">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Observaciones</label>
                                <textarea class="form-control" rows="3" placeholder="Ninguna"
                                    name="obs"></textarea>
                            </div>
                        </div>
                    </div>

                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->
                    <div class="card-footer">


                        <button id="botonActualizarCliente" class="btn btn-success col-2">Actualizar</button>
                        <a href="<?php echo base_url();?>cliente/actualizar" id="botonAtras" class="btn btn-success col-2">Atrás</a>

                    </div>




                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
