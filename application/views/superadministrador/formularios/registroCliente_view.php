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
                        <li class="breadcrumb-item active">Registro cliente</li>
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
                <h3 class="card-title">Registro de cliente </h3>


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

                                    <option hidden selected>-Seleccione el tipo de documento-</option>
                                    <option value="1">Cédula de ciudadanía</option>
                                    <option value="2">Cédula de extranjería</option>
                                    <option value="3">Pasaporte</option>
                                    <option value="4">Tarjeta de identidad</option>
                                    <option value="5">Registro civil</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Documento</label> <label style="color: red;"> * </label>
                                <input name="documento" type="text" class="form-control "
                                    placeholder="Ingrese el documento ">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre completo</label> <label style="color: red;"> *</label>
                                <input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Teléfono</label>
                                <input name="telefono" type="text" class="form-control"
                                    placeholder="Ingrese el teléfono">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label> <label style="color: red;"> *</label>
                                <input name="celular" type="text" class="form-control" placeholder="Ingrese el celular">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dirección</label>
                                <input name="direccion" type="text" class="form-control"
                                    placeholder="Ingrese la dirección">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo</label>
                                <input name="correo" type="email" class="form-control" placeholder="Ingrese el correo">
                            </div>
                        </div>

                    </div>


                    <hr>


                    <table id="tableDetalleMascota" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tipo de mascota</th>
                                <th>Nombre de la mascota</th>
                                <th>Raza</th>
                                <th>Sexo</th>
                                <th>Cumpleaños</th>
                                <th>Edad</th>
                                <th>Acciónes</th>


                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Perro</td>
                                <td>Bruno</td>
                                <td>
                                    <div class="">Pitbull

                                    </div>
                                </td>
                                <td><span class="">Macho</span></td>
                                <td><span class="">30KG</span></td>
                                <td><span class="">01/22/2015</span></td>
                                <td class="text-center">
                                    <button class='verDetalle btn btn-info btn-sm'><i class="fas fa-eye"></i> Ver </button>
                                    <button class='quitarMascota btn btn-danger btn-sm'><i
                                            class='fas fa-minus-circle'></i> Quitar </button>
                                </td>
                            </tr>

                        </tbody>

                        <tfoot>

                        </tfoot>
                    </table>

                    <hr>

                    <!--Fin del card body-->


                    <!--Inicio del footer del contenido-->
                    <div class="text-center card-footer">



                        <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;" type="submit"
                            id="btnRegistroCliente" class="btn btn-success col-2">Registrar</button>

                        <a style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; " href="listaclientesu"
                            id="botonAtras" class="btn btn-success col-2">Atrás</a>


                    </div>

                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


        <!--Modal de añadir marcas-->
        <div class="modal fade " id="modalMascota">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">

                        <!-- Inicio Contenido Total -->
                        <div class="card  card-success">
                            <!-- Incio Caja superior -->
                            <div class="card-header">
                                <h3 class="card-title">Registro de mascotas </h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

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
                                                <input name="nombre" type="text" class="form-control "
                                                    placeholder="Ingrese el nombre ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group ">

                                                <label>Raza</label> <label style="color: red;"> *</label>
                                                <select class="form-control select2bs4" style="width: 100%;">

                                                    <option selected="selected">-Seleccione la raza de la mascota-
                                                    </option>
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
                                                <input name="peso" type="text" class="form-control"
                                                    placeholder="Ingrese el peso">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">


                                                <div class="form-group">
                                                    <label>Unidad de medida</label> <label style="color: red;">
                                                        *</label>
                                                    <select class="form-control " style="width: 100%;">
                                                        <option selected="selected">-Seleccione la unidad de medida-
                                                        </option>
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
                                                        <span class="input-group-text"><i
                                                                class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="date" class="form-control">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Edad</label>
                                                <input name="peso" type="text" class="form-control"
                                                    placeholder="Ingrese la edad">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">


                                        <div class="col-md-6">
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

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Observaciones</label>
                                                <textarea class="form-control" rows="3"
                                                    placeholder="Ingrese una observación..." name="obs"></textarea>
                                            </div>
                                        </div>


                                    </div>

                                    <!--Fin del card body-->

                                    <!--Inicio del footer del contenido-->
                                    <div class="text-center card-footer">


                                        <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;"
                                            type="submit" id="btnRegistroMacota"
                                            class="btn btn-success col-2">Añadir</button>

                                        <a style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; "
                                            href="listaclientesu" id="botonCancelar"
                                            class="btn btn-success col-2">Cancelar</a>


                                    </div>



                                    <!--Fin del footer del contenido-->



                            </form>
                            <!--Fin del form-->


                        </div> <!-- Fin Contenido Total -->
                    </div>

                </div>


            </div>
        </div>
        <!--Fin Modal-->

    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->