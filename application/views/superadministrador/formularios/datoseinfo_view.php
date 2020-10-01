<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-edit-property-50.png"> Datos e
                        Información
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Configuración</a></li>
                        <li class="breadcrumb-item active">Datos e Información</li>
                    </ol>
                </div>
            </div>
        </div><!-- FIN/.container-fluid -->
    </section>

    <!-- Incio seccion contenido -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Navegador -->
                    <div class="card  card-outline">
                        <div class="card-body ">

                            <ul class="nav flex-column nav-pills">

                                <li class="nav-item">
                                    <a class="nav-link active" href="#datos" data-toggle="tab"> Datos e información</a>
                                </li>

                                <li class="nav-item "><a class="nav-link " href="#tipodocumento" data-toggle="tab">Tipo
                                        documento</a>
                                </li>


                                <li id="categoriatab" class="nav-item"><a class="nav-link" href="#categoria"
                                        data-toggle="tab">Categoría</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#marca" data-toggle="tab">Marca</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#laboratorio"
                                        data-toggle="tab">Laboratorio</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#presentacion" data-toggle="tab"
                                        data-toggle="tab">Presentación</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#unidadmedida" data-toggle="tab">Unidad
                                        de medida</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#tiposervicio" data-toggle="tab">Tipo de
                                        servicio</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#raza" data-toggle="tab">Raza
                                    </a>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="#tipovacuna" data-toggle="tab">Tipo de
                                        vacuna</a>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="#tipomedicamento" data-toggle="tab">Tipo
                                        de
                                        medicamento</a>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="#estado" data-toggle="tab">Estado de la
                                        cita</a>
                                </li>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>

                <div class="col-md-9">
                    <div class="card">

                        <div class="card-body">
                            <div class="tab-content">

                                <div class=" active tab-pane " id="datos">


                                    <!-- Inicio Contenido Total -->




                                    <div class="">

                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta,
                                        voluptatibus magni.
                                        Minima, distinctio magni modi eius reprehenderit ullam perferendis
                                        omnis molestias neque eligendi delectus aspernatur aliquid vitae vero
                                        aut sint!
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta,
                                        voluptatibus magni.
                                        Minima, distinctio magni modi eius reprehenderit ullam perferendis
                                        omnis molestias neque eligendi delectus aspernatur aliquid vitae vero
                                        aut sint!

                                    </div>


                                </div>

                                <div class=" tab-pane " id="tipodocumento">


                                    <!-- Inicio Contenido Total -->

                                    <!-- Incio Caja superior -->
                                    <div class="card-header bg-success">
                                        <h3 class="card-title">Lista de tipos de documento</h3>


                                    </div>
                                    <!-- Fin Caja superior -->


                                    <br>

                                    <!--Inicio del card body-->
                                    <div class="card-body p-0">
                                        <table id="tablaMaestra" class="table table-striped" style="width:100%">
                                            <thead>

                                                <tr>
                                                    <th>Id</th>
                                                    <th>Descripción</th>
                                                    <th style="text-align: center;">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!--Fin del card body-->

                                    <!--Inicio del footer del contenido-->
                                    <div class="card-footer">


                                    </div>
                                    <!--Fin del footer del contenido-->







                                    <!-- Modal -->
                                    <div id="modalRegistroTipoDocumento" class="modal fade" role="dialog">
                                        <div class="modal-dialog modal-lg">

                                            <!-- Modal content-->
                                            <div class="modal-content">

                                                <div class="modal-body">

                                                    <div class="card card-success">
                                                        <!-- Incio Caja superior -->
                                                        <div class="card-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                            <h3 class="card-title">Registro de tipo de documento </h3>

                                                        </div>
                                                        <!-- Fin Caja superior -->



                                                        <!--Inicio del card body-->
                                                        <div class="card-body p-0">
                                                            <form role="form" method="POST">
                                                                <!--Inicio del card body-->
                                                                <div class="card-body ">
                                                                    <div class="row">

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">

                                                                                <label>Código</label>
                                                                                <input name="codigo" type="text"
                                                                                    class="form-control "
                                                                                    placeholder="001 "
                                                                                    textOnly="textonly"
                                                                                    id="idTipoDocumento"
                                                                                    readonly="readonly"
                                                                                    value="<?php
                                                                                                                    if ($this->session->flashdata('idTipoDocumento')) {
                                                                                                                        echo 1;
                                                                                                                    }
                                                                                                                    echo $clave['idTipoDocumento'] + 1; ?>">
                                                                            </div>
                                                                        </div>



                                                                        <div class="col-md-6">

                                                                            <div class="form-group">
                                                                                <label>Descripción</label>
                                                                                <label style="color: red;">
                                                                                    *</label>
                                                                                <input id="descripcionTipoDocumento"
                                                                                    type="text" class="form-control"
                                                                                    placeholder="Ingrese la descripción">
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                    <!--Fin del card body-->

                                                                    <!--Inicio del footer del contenido-->


                                                                    <!--Fin del footer del contenido-->
                                                                </div>


                                                            </form>

                                                        </div>
                                                        <!--Fin del card body-->

                                                        <!--Inicio del footer del contenido-->
                                                        <div class="text-center card-footer">


                                                            <button
                                                                style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;"
                                                                type="submit" id="btnRegistroTipoDocumento"
                                                                class="btn btn-success col-2">Registrar</button>

                                                                <button type="button" class="btn btn-success col-2"  data-dismiss="modal" style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; ">Atrás</button>


                                                

                                                        </div>
                                                        <!--Fin del footer del contenido-->

                                                    </div> <!-- Fin Contenido Total -->

                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                    <!-- Inicio Modal -->

                                    <!-- Fin Modal -->

                                </div>





                            </div>
                            <!-- /.col -->

                        </div>


                    </div>





    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->