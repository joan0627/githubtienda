<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-mascotas-50.png"> Mascotas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Mascotas</a></li>
                        <li class="breadcrumb-item active">Historial de mascotas</li>
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
                <h3 class="card-title">Historial de mascotas</h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" id="FormDetalleCliente" method="POST">
                <!--Inicio del card body-->

                <div class="card-body ">
                    <div class="row">


						<div style=" display : none;" class="col-md-6">
                            <div class="form-group">

                                <label>id</label>
                                <input id="idMascotaHistorial" type="text" class="form-control "
								value="<?php  echo $mascota['idMascota']; ?>" placeholder="Campo vacío ">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Especie</label>
								<input readOnly="readOnly"  type="text" class="form-control "
								value="<?php  echo $mascota['descripcion']; ?>">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Nombre</label>
                                <input readOnly="readOnly"  type="text" class="form-control "
								value="<?php  echo $mascota['nombreMascota']; ?>" placeholder="Campo vacío ">
                            </div>
                        </div>

                    </div>
                    <div class="row">


                        <div class="col-md-6">
                            <div class="form-group ">

                                <label>Raza</label>
								<input readOnly="readOnly"  type="text" class="form-control "
								value="<?php  echo $mascota['descripcionRaza']; ?>"  placeholder="Campo vacío">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Sexo</label>
								<input readOnly="readOnly"  type="text" class="form-control "
								value="<?php  echo $mascota['sexo']; ?>" placeholder="Campo vacío">

                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Peso</label>
                                <input readOnly="readOnly"  type="number" min="0" class="form-control"
								value="<?php  echo $mascota['peso']; ?>" placeholder="Campo vacío">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Unidad de medida</label>
								<input readOnly="readOnly" value="<?php  echo $mascota['descripcionUnidadmedida']; ?>" type="text" class="form-control "
                                    placeholder="Campo vacío">
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
                                    <input readOnly="readOnly"  value="<?php  echo $mascota['fechaCumpleanos']; ?>" type="date" class="form-control">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Edad</label>
                                <input readOnly="readOnly" type="number" class="form-control"
								value="<?php  echo $mascota['edad']; ?>" placeholder="Campo vacío">
                            </div>
                        </div>


                    </div>

                    <div class="row">


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tiempo</label>
								<input readOnly="readOnly" value="<?php  echo $mascota['tiempo']; ?>" type="text" class="form-control "
                                    placeholder="Campo vacío">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Observaciones</label>
                                <textarea readOnly="readOnly" class="form-control" rows="3"
								placeholder="Campo vacío"><?php  echo $mascota['observaciones']; ?></textarea>
                           
                            </div>
                        </div>


                    </div>


                    <br>

                    <table id="tableHistorialMascota" class=" table table-striped " style="width:100%">

                        <thead>
                            <tr>    
                                <th>Servicio</th>
                                <th>Producto</th>
                                <th class="text-center">Dosis</th>
                                <th class="text-center">Fecha aplicación</th>
                                <th class="text-center">Fecha próxima aplicación</th>
                                <th style="width:20%">Observaciones</th>

                            </tr>

                        </thead>


                        <tfoot>
                        </tfoot>
                    </table>





                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->


                    <div class="text-center card-footer">


                        <a style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; "
                            href="<?php echo base_url();?>cliente/listadoMascota" id="botonAtras"
                            class="btn btn-success col-2">Atrás</a>


                    </div>





                    <!--Fin del footer del contenido-->


                </div>

            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->