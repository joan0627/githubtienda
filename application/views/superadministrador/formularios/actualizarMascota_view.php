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

                                    <option hidden selected>-Seleccione el tipo de mascota-</option>
                                    <option value="1">Perro</option>
                                    <option value="2">Gato</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Nombre</label> <label style="color: red;"> * </label>
                                <input name="nombre" type="text" class="form-control " placeholder="Ingrese el nombre ">
                            </div>
                        </div>
                    </div>
                    <div class="row">


                        <div class="col-md-6">
                            <div class="form-group ">

                                <label>Raza</label> <label style="color: red;"> *</label>
                                <select class="form-control select2bs4" style="width: 100%;">

                                    <option selected="selected">-Seleccione la raza de la mascota-</option>
                                    <option value="">Pitbull</option>
                                    <option value="">Pastor alemán</option>
                                    <option value="">Doberman</option>
                                    <option value="">Angora</option>
                                    <option value="">Persa</option>
                                    <option value="">Labrador</option>
                                </select>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Sexo</label> <label style="color: red;"> *</label>
                                <select name="tipoDocumento" class="form-control">

                                    <option hidden selected>-Seleccione el sexo de la mascota-</option>
                                    <option value="1">Macho</option>
                                    <option value="2">Hembra</option>
                                </select>

                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Peso</label>
                                <input name="peso" type="text" class="form-control" placeholder="Ingrese el peso">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">


                                <div class="form-group">
                                    <label>Unidad de medida</label> <label style="color: red;"> *</label>
                                    <select class="form-control " style="width: 100%;">
                                        <option selected="selected">-Seleccione la unidad de medida-</option>
                                        <option>Gramos</option>
                                        <option>Kilogramos</option>
                                        <option>Libras</option>
                                        <option>Mililitros</option>

                                    </select>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fecha de cumpleaños</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" class="form-control">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Edad</label>
                                <input name="peso" type="text" class="form-control" placeholder="Ingrese la edad">
                            </div>
						</div>
						
						<div class="col-md-4">
						<div class="form-group">
                                    <label>Tiempo</label> <label style="color: red;"> *</label>
                                    <select class="form-control " style="width: 100%;">
                                        <option selected="selected">-Seleccione el tiempo de edad-</option>
                                        <option>Dia(s)</option>
                                        <option>Semana(s)</option>
                                        <option>Mes(es)</option>
                                        <option>Año(s)</option>

                                    </select>
                                </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Observaciones</label>
                                <textarea class="form-control" rows="3" placeholder="Ingrese una observación..."
                                    name="obs"></textarea>
                            </div>
                        </div>


                    </div>

                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->
                    <div class="card-footer">


                        <button id="botonActualizarCliente" class="btn btn-success col-2">Actualizar</button>
                        <a href="<?php echo base_url();?>cliente/actualizarclientesu" id="botonAtras"
                            class="btn btn-success col-2">Atrás</a>

                    </div>



                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
