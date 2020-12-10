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
                        <div class="card-body">

                            <ul class="nav flex-column nav-pills">

                                <li class="nav-item">
                                    <a class="nav-link active" href="#datos" data-toggle="tab"> Datos e información</a>
                                </li>

                                <li class="nav-item"><a class="nav-link " href="#tipodocumento" data-toggle="tab">Tipo
                                        documento</a>
                                </li>


                                <li class="nav-item"><a class="nav-link" href="#categoria"
                                        data-toggle="tab">Categoría</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#marca" data-toggle="tab">Marca</a>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="#presentacion"
                                        data-toggle="tab">Presentación</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#unidadmedida" data-toggle="tab">Unidad
                                        de medida</a>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="#raza" data-toggle="tab">Raza
                                    </a>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="#especie" data-toggle="tab">Especies
                                </a>
                                </li>

                            </ul>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>

                <div class="col-md-9">
                    <div class="card">

                        <div class="card-body">
                            <div class="tab-content">

                                <div class="active tab-pane " id="datos">


                                    <!-- Inicio Contenido Total -->



                                    Desde esta sección podrá gestionar los datos e información dinámica
                                    que se agregará a los diferentes formularios que componen los módulos del sistema 
                                    de información IntraRuk. Podrá crear, editar o eliminar esta información a medida 
                                    de sus necesidades. Es importante recordarle que los datos que proporcione por cada 
                                    uno de los items deben ser lo suficientemente claros y verídicos, ya que estos 
                                    son base fundamental para que este sistema de información sea fiable y estable 
                                    para usted y su negocio. Si tiene dudas acerca de la configuración por favor 
                                    consulte la sección de ayuda ubicada en el menú izquierdo de la aplicación.




                                </div>

                                <div class="tab-pane " id="tipodocumento">

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
                                                    <th>id</th>
                                                    <th>Descripción</th>
                                                    <th style="text-align: center;">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>



                                    <!-- Modal -->
                                    <div id="modalRegistroTipoDocumento" class="modal fade" role="dialog">
                                        <div class="modal-dialog  modal-md">

                                            <!-- Modal content-->
                                            <div class="modal-content">

                                                <div class="modal-body">

                                                    <div class="card card-success">
                                                        <!-- Incio Caja superior -->
                                                        <div class="card-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                            <h3 id="etiqueta" class="card-title">Registro de tipo de
                                                                documento </h3>

                                                        </div>
                                                        <!-- Fin Caja superior -->

                                                        <!--Inicio del card body-->
                                                        <div class="card-body p-0">
                                                            <form id="Formtipodocumento" method="POST">
                                                                <!--Inicio del card body-->
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div style="text-align:left">
                                                                                <i><small> Todos campos marcados con
                                                                                        <label
                                                                                            style="color: red;">asterisco
                                                                                            (*)</label>
                                                                                        son obligatorios.</small></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">

                                                                        <div class="col-md-6" style="display: none;">
                                                                            <div class="form-group">

                                                                                <label>Código</label>
                                                                                <input id="codigoTipoDocumento"
                                                                                    type="text" class="form-control"
                                                                                    readonly="readonly">

                                                                            </div>
                                                                        </div>



                                                                        <div class="col-md-12"
                                                                            style="align-items: center;">

                                                                            <div class="form-group">
                                                                                <label>Descripción</label>
                                                                                <label style="color: red;">*</label>
                                                                                <input id="descripcionTipoDocumento"
                                                                                    name="descripcionTipoDocumento"
                                                                                    type="text" class="form-control"
                                                                                    placeholder="Ingrese la descripción">
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </form>

                                                        </div>
                                                        <!--Fin del card body-->

                                                        <!--Inicio del footer del contenido-->
                                                        <div class="text-center card-footer">


                                                            <button
                                                                style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto; width:100%"
                                                                type="submit" id="btnRegistroTipoDocumento"
                                                                class="btn btn-success col-3">Registrar</button>

                                                            <button type="button" class="btn btn-success col-3"
                                                                data-dismiss="modal"
                                                                style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; ">Cerrar</button>




                                                        </div>
                                                        <!--Fin del footer del contenido-->

                                                    </div> <!-- Fin Contenido Total -->

                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>

                                <!-- 
                                **********************************
                                ******** Vista  Categoria*********
                                **********************************
                                -->

                                <div class="tab-pane" id="categoria">

                                    <!-- Incio Caja superior -->
                                    <div class="card-header bg-success">
                                        <h3 class="card-title">Lista de categorias</h3>

                                    </div>
                                    <!-- Fin Caja superior -->

                                    <br>


                                    <!--Inicio del card body-->
                                    <div class="card-body p-0">
                                        <table id="tablaMaestra_Categoria" class="table table-striped"
                                            style="width:100%">
                                            <thead>

                                                <tr>
                                                    <th>id</th>
                                                    <th>Descripción</th>
                                                    <th style="text-align: center;">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>




                                    <!-- Modal -->
                                    <div id="modalRegistroCategoria" class="modal fade" role="dialog">
                                        <div class="modal-dialog  modal-md">

                                            <!-- Modal content-->
                                            <div class="modal-content">

                                                <div class="modal-body">

                                                    <div class="card card-success">
                                                        <!-- Incio Caja superior -->
                                                        <div class="card-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                            <h3 id="etiquetaCategoria" class="card-title">Registro de
                                                                categoria </h3>

                                                        </div>
                                                        <!-- Fin Caja superior -->

                                                        <!--Inicio del card body-->
                                                        <div class="card-body p-0">
                                                            <form id="FormCategoria" method="POST">
                                                                <!--Inicio del card body-->
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div style="text-align:left">
                                                                                <i><small> Todos campos marcados con
                                                                                        <label
                                                                                            style="color: red;">asterisco
                                                                                            (*)</label>
                                                                                        son obligatorios.</small></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">

                                                                        <div class="col-md-6" style="display: none;">
                                                                            <div class="form-group">

                                                                                <label>id</label>
                                                                                <input id="idCategoria" type="text"
                                                                                    class="form-control"
                                                                                    readonly="readonly">

                                                                            </div>
                                                                        </div>



                                                                        <div class="col-md-12"
                                                                            style="align-items: center;">

                                                                            <div class="form-group">
                                                                                <label>Descripción</label>
                                                                                <label style="color: red;">*</label>
                                                                                <input id="descripcionCategoria"
                                                                                    name="descripcionCategoria"
                                                                                    type="text" class="form-control"
                                                                                    placeholder="Ingrese la descripción">
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </form>

                                                        </div>
                                                        <!--Fin del card body-->

                                                        <!--Inicio del footer del contenido-->
                                                        <div class="text-center card-footer">


                                                            <button
                                                                style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto; width:100%"
                                                                type="submit" id="btnRegistroCategoria"
                                                                class="btn btn-success col-3">Registrar</button>

                                                            <button type="button" class="btn btn-success col-3"
                                                                data-dismiss="modal"
                                                                style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; ">Cerrar</button>




                                                        </div>
                                                        <!--Fin del footer del contenido-->

                                                    </div> <!-- Fin Contenido Total -->

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>


                                <!-- 
                                **********************************
                                ***********Marca******************
                                **********************************
                                -->



                                <div class="tab-pane " id="marca">


                                    <!-- Incio Caja superior -->
                                    <div class="card-header bg-success">
                                        <h3 class="card-title">Lista de marcas</h3>

                                    </div>
                                    <!-- Fin Caja superior -->

                                    <br>


                                    <!--Inicio del card body-->
                                    <div class="card-body p-0">
                                        <table id="tablaMaestra_Marca" class="table table-striped" style="width:100%">
                                            <thead>

                                                <tr>
                                                    <th>id</th>
                                                    <th>Descripción</th>
                                                    <th style="text-align: center;">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>



                                    <!-- Modal -->
                                    <div id="modalRegistroMarca" class="modal fade" role="dialog">
                                        <div class="modal-dialog  modal-md">

                                            <!-- Modal content-->
                                            <div class="modal-content">

                                                <div class="modal-body">

                                                    <div class="card card-success">
                                                        <!-- Incio Caja superior -->
                                                        <div class="card-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                            <h3 id="etiquetaMarca" class="card-title">Registro de
                                                                marca </h3>

                                                        </div>
                                                        <!-- Fin Caja superior -->

                                                        <!--Inicio del card body-->
                                                        <div class="card-body p-0">
                                                            <form id="FormMarca" method="POST">
                                                                <!--Inicio del card body-->
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div style="text-align:left">
                                                                                <i><small> Todos campos marcados con
                                                                                        <label
                                                                                            style="color: red;">asterisco
                                                                                            (*)</label>
                                                                                        son obligatorios.</small></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">

                                                                        <div class="col-md-6" style="display: none;">
                                                                            <div class="form-group">

                                                                                <label>id</label>
                                                                                <input id="idMarca" type="text"
                                                                                    class="form-control"
                                                                                    readonly="readonly">

                                                                            </div>
                                                                        </div>



                                                                        <div class="col-md-12"
                                                                            style="align-items: center;">

                                                                            <div class="form-group">
                                                                                <label>Descripción</label>
                                                                                <label style="color: red;">*</label>
                                                                                <input id="descripcionMarca"
                                                                                    name="descripcionMarca" type="text"
                                                                                    class="form-control"
                                                                                    placeholder="Ingrese la descripción">
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </form>

                                                        </div>
                                                        <!--Fin del card body-->

                                                        <!--Inicio del footer del contenido-->
                                                        <div class="text-center card-footer">


                                                            <button
                                                                style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto; width:100%"
                                                                type="submit" id="btnRegistroMarca"
                                                                class="btn btn-success col-3">Registrar</button>

                                                            <button type="button" class="btn btn-success col-3"
                                                                data-dismiss="modal"
                                                                style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; ">Cerrar</button>




                                                        </div>
                                                        <!--Fin del footer del contenido-->

                                                    </div> <!-- Fin Contenido Total -->

                                                </div>

                                            </div>
                                        </div>

                                    </div>



                                </div>




                                <!-- 
                                **********************************
                                ***********Presentación***********
                                **********************************
                                -->



                                <div class="tab-pane " id="presentacion">


                                    <!-- Incio Caja superior -->
                                    <div class="card-header bg-success">
                                        <h3 class="card-title">Lista de presentaciones</h3>

                                    </div>
                                    <!-- Fin Caja superior -->

                                    <br>


                                    <!--Inicio del card body-->
                                    <div class="card-body p-0">
                                        <table id="tablaMaestra_Presentacion" class="table table-striped" style="width:100%">
                                            <thead>

                                                <tr>
                                                    <th>id</th>
                                                    <th>Descripción</th>
                                                    <th style="text-align: center;">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>



                                    <!-- Modal -->
                                    <div id="modalRegistroPresentacion" class="modal fade" role="dialog">
                                        <div class="modal-dialog  modal-md">

                                            <!-- Modal content-->
                                            <div class="modal-content">

                                                <div class="modal-body">

                                                    <div class="card card-success">
                                                        <!-- Incio Caja superior -->
                                                        <div class="card-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                            <h3 id="etiquetaPresentacion" class="card-title">Registro de
                                                                presentación</h3>

                                                        </div>
                                                        <!-- Fin Caja superior -->

                                                        <!--Inicio del card body-->
                                                        <div class="card-body p-0">
                                                            <form id="FormPresentacion" method="POST">
                                                                <!--Inicio del card body-->
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div style="text-align:left">
                                                                                <i><small> Todos campos marcados con
                                                                                        <label
                                                                                            style="color: red;">asterisco
                                                                                            (*)</label>
                                                                                        son obligatorios.</small></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">

                                                                        <div class="col-md-6" style="display: none;">
                                                                            <div class="form-group">

                                                                                <label>id</label>
                                                                                <input id="idPresentacion" type="text"
                                                                                    class="form-control"
                                                                                    readonly="readonly">

                                                                            </div>
                                                                        </div>



                                                                        <div class="col-md-12"
                                                                            style="align-items: center;">

                                                                            <div class="form-group">
                                                                                <label>Descripción</label>
                                                                                <label style="color: red;">*</label>
                                                                                <input id="descripcionPresentacion"
                                                                                    name="descripcionPresentacion" type="text"
                                                                                    class="form-control"
                                                                                    placeholder="Ingrese la descripción">
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </form>

                                                        </div>
                                                        <!--Fin del card body-->

                                                        <!--Inicio del footer del contenido-->
                                                        <div class="text-center card-footer">


                                                            <button
                                                                style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto; width:100%"
                                                                type="submit" id="btnRegistroPresentacion"
                                                                class="btn btn-success col-3">Registrar</button>

                                                            <button type="button" class="btn btn-success col-3"
                                                                data-dismiss="modal"
                                                                style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; ">Cerrar</button>




                                                        </div>
                                                        <!--Fin del footer del contenido-->

                                                    </div> <!-- Fin Contenido Total -->

                                                </div>

                                            </div>
                                        </div>

                                    </div>



                                </div>


                                
                                <!-- 
                                **********************************
                                ***********Unidad de medida*******
                                **********************************
                                -->



                                <div class="tab-pane " id="unidadmedida">


                                    <!-- Incio Caja superior -->
                                    <div class="card-header bg-success">
                                        <h3 class="card-title">Lista de unidades de medida</h3>

                                    </div>
                                    <!-- Fin Caja superior -->

                                    <br>


                                    <!--Inicio del card body-->
                                    <div class="card-body p-0">
                                        <table id="tablaMaestra_Umedida" class="table table-striped" style="width:100%">
                                            <thead>

                                                <tr>
                                                    <th>id</th>
                                                    <th>Descripción</th>
                                                    <th style="text-align: center;">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>



                                    <!-- Modal -->
                                    <div id="modalRegistroUmedida" class="modal fade" role="dialog">
                                        <div class="modal-dialog  modal-md">

                                            <!-- Modal content-->
                                            <div class="modal-content">

                                                <div class="modal-body">

                                                    <div class="card card-success">
                                                        <!-- Incio Caja superior -->
                                                        <div class="card-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                            <h3 id="etiquetaUmedida" class="card-title">Registro de
                                                                unidad de medida</h3>

                                                        </div>
                                                        <!-- Fin Caja superior -->

                                                        <!--Inicio del card body-->
                                                        <div class="card-body p-0">
                                                            <form id="FormUmedida" method="POST">
                                                                <!--Inicio del card body-->
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div style="text-align:left">
                                                                                <i><small> Todos campos marcados con
                                                                                        <label
                                                                                            style="color: red;">asterisco
                                                                                            (*)</label>
                                                                                        son obligatorios.</small></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">

                                                                        <div class="col-md-6" style="display: none;">
                                                                            <div class="form-group">

                                                                                <label>id</label>
                                                                                <input id="idUmedida" type="text"
                                                                                    class="form-control"
                                                                                    readonly="readonly">

                                                                            </div>
                                                                        </div>



                                                                        <div class="col-md-12"
                                                                            style="align-items: center;">

                                                                            <div class="form-group">
                                                                                <label>Descripción</label>
                                                                                <label style="color: red;">*</label>
                                                                                <input id="descripcionUmedida"
                                                                                    name="descripcionUmedida" type="text"
                                                                                    class="form-control"
                                                                                    placeholder="Ingrese la descripción">
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </form>

                                                        </div>
                                                        <!--Fin del card body-->

                                                        <!--Inicio del footer del contenido-->
                                                        <div class="text-center card-footer">


                                                            <button
                                                                style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto; width:100%"
                                                                type="submit" id="btnRegistroUmedida"
                                                                class="btn btn-success col-3">Registrar</button>

                                                            <button type="button" class="btn btn-success col-3"
                                                                data-dismiss="modal"
                                                                style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; ">Cerrar</button>


                                                        </div>
                                                        <!--Fin del footer del contenido-->

                                                    </div> <!-- Fin Contenido Total -->

                                                </div>

                                            </div>
                                        </div>

                                    </div>



                                </div>



                                <!-- 
                                **********************************
                                ***********Raza*******************
                                **********************************
                                -->



                                <div class="tab-pane " id="raza">


                                    <!-- Incio Caja superior -->
                                    <div class="card-header bg-success">
                                        <h3 class="card-title">Lista de razas</h3>

                                    </div>
                                    <!-- Fin Caja superior -->

                                    <br>


                                    <!--Inicio del card body-->
                                    <div class="card-body p-0">
                                        <table id="tablaMaestra_Raza" class="table table-striped" style="width:100%">
                                            <thead>

                                                <tr>
                                                    <th>id</th>
                                                    <th>Descripción</th>
                                                    <th style="text-align: center;">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>



                                    <!-- Modal -->
                                    <div id="modalRegistroRaza" class="modal fade" role="dialog">
                                        <div class="modal-dialog  modal-md">

                                            <!-- Modal content-->
                                            <div class="modal-content">

                                                <div class="modal-body">

                                                    <div class="card card-success">
                                                        <!-- Incio Caja superior -->
                                                        <div class="card-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                            <h3 id="etiquetaRaza" class="card-title">Registro de
                                                                raza</h3>

                                                        </div>
                                                        <!-- Fin Caja superior -->

                                                        <!--Inicio del card body-->
                                                        <div class="card-body p-0">
                                                            <form id="FormRaza" method="POST">
                                                                <!--Inicio del card body-->
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div style="text-align:left">
                                                                                <i><small> Todos campos marcados con
                                                                                        <label
                                                                                            style="color: red;">asterisco
                                                                                            (*)</label>
                                                                                        son obligatorios.</small></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">

                                                                        <div class="col-md-6" style="display: none;">
                                                                            <div class="form-group">

                                                                                <label>id</label>
                                                                                <input id="idRaza" type="text"
                                                                                    class="form-control"
                                                                                    readonly="readonly">

                                                                            </div>
                                                                        </div>



                                                                        <div class="col-md-12"
                                                                            style="align-items: center;">

                                                                            <div class="form-group">
                                                                                <label>Descripción</label>
                                                                                <label style="color: red;">*</label>
                                                                                <input id="descripcionRaza"
                                                                                    name="descripcionRaza" type="text"
                                                                                    class="form-control"
                                                                                    placeholder="Ingrese la descripción">
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </form>

                                                        </div>
                                                        <!--Fin del card body-->

                                                        <!--Inicio del footer del contenido-->
                                                        <div class="text-center card-footer">


                                                            <button
                                                                style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto; width:100%"
                                                                type="submit" id="btnRegistroRaza"
                                                                class="btn btn-success col-3">Registrar</button>

                                                            <button type="button" class="btn btn-success col-3"
                                                                data-dismiss="modal"
                                                                style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; ">Cerrar</button>


                                                        </div>
                                                        <!--Fin del footer del contenido-->

                                                    </div> <!-- Fin Contenido Total -->

                                                </div>

                                            </div>
                                        </div>

                                    </div>



                                </div>


                                
                                <!-- 
                                **********************************
                                ***********Especie*******************
                                **********************************
                                -->



                                <div class="tab-pane " id="especie">


                                    <!-- Incio Caja superior -->
                                    <div class="card-header bg-success">
                                        <h3 class="card-title">Lista de especies</h3>

                                    </div>
                                    <!-- Fin Caja superior -->

                                    <br>


                                    <!--Inicio del card body-->
                                    <div class="card-body p-0">
                                        <table id="tablaMaestra_Especie" class="table table-striped" style="width:100%">
                                            <thead>

                                                <tr>
                                                    <th>id</th>
                                                    <th>Descripción</th>
                                                    <th style="text-align: center;">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>



                                    <!-- Modal -->
                                    <div id="modalRegistroEspecie" class="modal fade" role="dialog">
                                        <div class="modal-dialog  modal-md">

                                            <!-- Modal content-->
                                            <div class="modal-content">

                                                <div class="modal-body">

                                                    <div class="card card-success">
                                                        <!-- Incio Caja superior -->
                                                        <div class="card-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                            <h3 id="etiquetaEspecie" class="card-title">Registro de
                                                                especie</h3>

                                                        </div>
                                                        <!-- Fin Caja superior -->

                                                        <!--Inicio del card body-->
                                                        <div class="card-body p-0">
                                                            <form id="FormEspecie" method="POST">
                                                                <!--Inicio del card body-->
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div style="text-align:left">
                                                                                <i><small> Todos campos marcados con
                                                                                        <label
                                                                                            style="color: red;">asterisco
                                                                                            (*)</label>
                                                                                        son obligatorios.</small></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">

                                                                        <div class="col-md-6" style="display: none;">
                                                                            <div class="form-group">

                                                                                <label>id</label>
                                                                                <input id="idEspecie" type="text"
                                                                                    class="form-control"
                                                                                    readonly="readonly">

                                                                            </div>
                                                                        </div>



                                                                        <div class="col-md-12"
                                                                            style="align-items: center;">

                                                                            <div class="form-group">
                                                                                <label>Descripción</label>
                                                                                <label style="color: red;">*</label>
                                                                                <input id="descripcionEspecie"
                                                                                    name="descripcionEspecie" type="text"
                                                                                    class="form-control"
                                                                                    placeholder="Ingrese la descripción">
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </form>

                                                        </div>
                                                        <!--Fin del card body-->

                                                        <!--Inicio del footer del contenido-->
                                                        <div class="text-center card-footer">


                                                            <button
                                                                style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto; width:100%"
                                                                type="submit" id="btnRegistroEspecie"
                                                                class="btn btn-success col-3">Registrar</button>

                                                            <button type="button" class="btn btn-success col-3"
                                                                data-dismiss="modal"
                                                                style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; ">Cerrar</button>


                                                        </div>
                                                        <!--Fin del footer del contenido-->

                                                    </div> <!-- Fin Contenido Total -->

                                                </div>

                                            </div>
                                        </div>

                                    </div>



                                </div>



                            </div>



                        </div>


                    </div>
                </div>
            </div>
        </div>

    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->