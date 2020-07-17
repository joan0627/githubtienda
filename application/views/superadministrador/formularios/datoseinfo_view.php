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
                                <li class="nav-item "><a class="nav-link " href="#rol" data-toggle="tab">Rol de usuario
                                    </a>
                                </li>

                                <li class="nav-item "><a class="nav-link " href="#tipodocumento" data-toggle="tab">Tipo
                                        documento</a>
                                </li>


                                <li class="nav-item"><a class="nav-link" href="#categoria"
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

                        <div class="card-body ">
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

                                <div class=" tab-pane " id="rol">

                                    <!-- Content Header (Page header) -->
                                    <section class="content-header">


                                        <div class="row mb-1">

                                            <div class="col-auto mr-auto col-md-5">

                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Estoy buscando...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button"><i
                                                                class="fas fa-search"></i></button>
                                                    </span>
                                                </div>


                                            </div>

                                            <div class="col-auto">

                                                <button href="#registrorol" data-toggle="tab" class="btn btn-success"><i
                                                        class="fas fa-plus-circle"></i> Crear</button>
                                            </div>


                                        </div>

                                    </section>



                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Lista de roles de usuario</h3>


                                        </div>
                                        <!-- Fin Caja superior -->



                                        <!--Inicio del card body-->
                                        <div class="card-body p-0">
                                            <table class="table table-striped projects">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Código
                                                        </th>

                                                        <th>
                                                            Descripción
                                                        </th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>


                                                        <td>001</td>
                                                        <td>Administrador</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>002</td>
                                                        <td>Empleado</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->

                                </div>

                                <div class=" tab-pane" id="registrorol">


                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Registro de rol</h3>


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
                                                                <input name="codigo" type="text" class="form-control "
                                                                    placeholder="001 " textOnly="textonly">
                                                            </div>
                                                        </div>



                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label>Descripción</label> <label style="color: red;">
                                                                    *</label>
                                                                <input name="nombre" type="text" class="form-control"
                                                                    placeholder="Ingrese la descripción">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <!--Fin del card body-->

                                                    <!--Inicio del footer del contenido-->
                                                    <div class="card-footer">


                                                        <button type="submit" id="botonRegistroProveedor"
                                                            class="btn btn-success col-2">Registrar</button>
                                                        <a href="listaproveedoresu" id="botonAtras"
                                                            class="btn btn-success col-2">Atrás</a>

                                                    </div>

                                                    <!--Fin del footer del contenido-->
                                                </div>


                                            </form>

                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->

                                </div>



                                <div class=" tab-pane " id="tipodocumento">

                                    <!-- Content Header (Page header) -->
                                    <section class="content-header">


                                        <div class="row mb-1">

                                            <div class="col-auto mr-auto col-md-5">

                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Estoy buscando...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button"><i
                                                                class="fas fa-search"></i></button>
                                                    </span>
                                                </div>


                                            </div>

                                            <div class="col-auto">

                                                <button href="#registrotipodocumento" data-toggle="tab"
                                                    class="btn btn-success"><i class="fas fa-plus-circle"></i>
                                                    Crear</button>
                                            </div>


                                        </div>

                                    </section>



                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Lista de tipos de documento</h3>


                                        </div>
                                        <!-- Fin Caja superior -->



                                        <!--Inicio del card body-->
                                        <div class="card-body p-0">
                                            <table class="table table-striped projects">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Código
                                                        </th>

                                                        <th>
                                                            Descripción
                                                        </th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>


                                                        <td>TD001</td>
                                                        <td>Cédula de ciudadanía</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>TD002</td>
                                                        <td>Cédula de extranjería</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>TD003</td>
                                                        <td>Pasaporte</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>TD004</td>
                                                        <td>Tarjeta de identidad</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>







                                                </tbody>
                                            </table>
                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->





                                </div>

                                <div class=" tab-pane" id="registrotipodocumento">


                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Registro de tipo de documento</h3>


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
                                                                <input name="codigo" type="text" class="form-control "
                                                                    placeholder="001 " textOnly="textonly">
                                                            </div>
                                                        </div>



                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label>Descripción</label> <label style="color: red;">
                                                                    *</label>
                                                                <input name="nombre" type="text" class="form-control"
                                                                    placeholder="Ingrese la descripción">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <!--Fin del card body-->

                                                    <!--Inicio del footer del contenido-->
                                                    <div class="card-footer">


                                                        <button type="submit" id="botonRegistroProveedor"
                                                            class="btn btn-success col-2">Registrar</button>
                                                        <a href="listaproveedoresu" id="botonAtras"
                                                            class="btn btn-success col-2">Atrás</a>

                                                    </div>

                                                    <!--Fin del footer del contenido-->
                                                </div>


                                            </form>

                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->

                                </div>


                                <div class=" tab-pane " id="categoria">

                                    <!-- Content Header (Page header) -->
                                    <section class="content-header">


                                        <div class="row mb-1">

                                            <div class="col-auto mr-auto col-md-5">

                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Estoy buscando...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button"><i
                                                                class="fas fa-search"></i></button>
                                                    </span>
                                                </div>


                                            </div>

                                            <div class="col-auto">

                                                <button href="#registrocategoria" id="botonregistrocategoria"
                                                    data-toggle="tab" class="btn btn-success "><i
                                                        class="fas fa-plus-circle"></i>
                                                    Crear</button>



                                            </div>


                                        </div>

                                    </section>



                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Lista de categorias</h3>


                                        </div>
                                        <!-- Fin Caja superior -->



                                        <!--Inicio del card body-->
                                        <div class="card-body p-0">
                                            <table class="table table-striped projects">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Código
                                                        </th>

                                                        <th>
                                                            Descripción
                                                        </th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>


                                                        <td>C001</td>
                                                        <td>Alimentos</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>C002</td>
                                                        <td>Accesorios</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>C003</td>
                                                        <td>Medicamentos</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>C004</td>
                                                        <td>Golosinas</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>







                                                </tbody>
                                            </table>
                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->

                                </div>

                                <div class=" tab-pane" id="registrocategoria">


                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Registro de categoría</h3>


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
                                                                <input name="codigo" type="text" class="form-control "
                                                                    placeholder="001 " textOnly="textonly">
                                                            </div>
                                                        </div>



                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label>Descripción</label> <label style="color: red;">
                                                                    *</label>
                                                                <input name="nombre" type="text" class="form-control"
                                                                    placeholder="Ingrese la descripción">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <!--Fin del card body-->

                                                    <!--Inicio del footer del contenido-->
                                                    <div class="card-footer">


                                                        <button type="submit" id="botonRegistroProveedor"
                                                            class="btn btn-success col-2">Registrar</button>
                                                        <a href="listaproveedoresu" id="botonAtras"
                                                            class="btn btn-success col-2">Atrás</a>

                                                    </div>

                                                    <!--Fin del footer del contenido-->
                                                </div>


                                            </form>

                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->

                                </div>




                                <div class=" tab-pane " id="marca">

                                    <!-- Content Header (Page header) -->
                                    <section class="content-header">


                                        <div class="row mb-1">

                                            <div class="col-auto mr-auto col-md-5">

                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Estoy buscando...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button"><i
                                                                class="fas fa-search"></i></button>
                                                    </span>
                                                </div>


                                            </div>

                                            <div class="col-auto">

                                                <button type="button" data-toggle="tab" data-target="#registromarca"
                                                    id="botonregistromarca" class="btn btn-success"><i
                                                        class="fas fa-plus-circle"></i>
                                                    Crear</button>
                                            </div>


                                        </div>

                                    </section>



                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Lista de marcas</h3>


                                        </div>
                                        <!-- Fin Caja superior -->



                                        <!--Inicio del card body-->
                                        <div class="card-body p-0">
                                            <table class="table table-striped projects">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Código
                                                        </th>

                                                        <th>
                                                            Descripción
                                                        </th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>


                                                        <td>M001</td>
                                                        <td>Kanú</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>M002</td>
                                                        <td>Biozoo</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>M003</td>
                                                        <td>Purina</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>M004</td>
                                                        <td>RicoCan</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>







                                                </tbody>
                                            </table>
                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->

                                </div>

                                <div class="tab-pane " id="registromarca">


                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Registro de marca</h3>


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
                                                                <input name="codigo" type="text" class="form-control "
                                                                    placeholder="001 " textOnly="textonly">
                                                            </div>
                                                        </div>



                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label>Descripción</label> <label style="color: red;">
                                                                    *</label>
                                                                <input name="nombre" type="text" class="form-control"
                                                                    placeholder="Ingrese la descripción">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <!--Fin del card body-->

                                                    <!--Inicio del footer del contenido-->
                                                    <div class="card-footer">


                                                        <button type="submit" id="botonRegistroProveedor"
                                                            class="btn btn-success col-2">Registrar</button>
                                                        <a href="listaproveedoresu" id="botonAtras"
                                                            class="btn btn-success col-2">Atrás</a>

                                                    </div>

                                                    <!--Fin del footer del contenido-->
                                                </div>


                                            </form>

                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->

                                </div>

                                <div class=" tab-pane " id="laboratorio">

                                    <!-- Content Header (Page header) -->
                                    <section class="content-header">


                                        <div class="row mb-1">

                                            <div class="col-auto mr-auto col-md-5">

                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Estoy buscando...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button"><i
                                                                class="fas fa-search"></i></button>
                                                    </span>
                                                </div>


                                            </div>

                                            <div class="col-auto">

                                                <a href="#registropresentacion" date-toggle="tab"
                                                    class="btn btn-success"><i class="fas fa-plus-circle"></i>
                                                    Crear</a>
                                            </div>


                                        </div>

                                    </section>



                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Lista de laboratorios</h3>


                                        </div>
                                        <!-- Fin Caja superior -->



                                        <!--Inicio del card body-->
                                        <div class="card-body p-0">
                                            <table class="table table-striped projects">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Código
                                                        </th>

                                                        <th>
                                                            Descripción
                                                        </th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>


                                                        <td>001</td>
                                                        <td>Biozoo</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>002</td>
                                                        <td>Virbac</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>003</td>
                                                        <td>Canigen</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>



                                                </tbody>
                                            </table>
                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->

                                </div>

                                <div class=" tab-pane " id="presentacion">

                                    <!-- Content Header (Page header) -->
                                    <section class="content-header">


                                        <div class="row mb-1">

                                            <div class="col-auto mr-auto col-md-5">

                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Estoy buscando...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button"><i
                                                                class="fas fa-search"></i></button>
                                                    </span>
                                                </div>


                                            </div>

                                            <div class="col-auto">

                                                <a href="#registropresentacion" date-toggle="tab"
                                                    class="btn btn-success"><i class="fas fa-plus-circle"></i>
                                                    Crear</a>
                                            </div>


                                        </div>

                                    </section>



                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Lista de presentaciones</h3>


                                        </div>
                                        <!-- Fin Caja superior -->



                                        <!--Inicio del card body-->
                                        <div class="card-body p-0">
                                            <table class="table table-striped projects">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Código
                                                        </th>

                                                        <th>
                                                            Descripción
                                                        </th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>


                                                        <td>P001</td>
                                                        <td>Botella</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>P002</td>
                                                        <td>Caja</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>P003</td>
                                                        <td>Frasco</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>P004</td>
                                                        <td>Bolsa</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>







                                                </tbody>
                                            </table>
                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->

                                </div>

                                <div class="tab-pane " id="registropresentacion">


                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Registro de presentación</h3>


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
                                                                <input name="codigo" type="text" class="form-control "
                                                                    placeholder="001 " textOnly="textonly">
                                                            </div>
                                                        </div>



                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label>Descripción</label> <label style="color: red;">
                                                                    *</label>
                                                                <input name="nombre" type="text" class="form-control"
                                                                    placeholder="Ingrese la descripción">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <!--Fin del card body-->

                                                    <!--Inicio del footer del contenido-->
                                                    <div class="card-footer">


                                                        <button type="submit" id="botonRegistroProveedor"
                                                            class="btn btn-success col-2">Registrar</button>
                                                        <a href="listaproveedoresu" id="botonAtras"
                                                            class="btn btn-success col-2">Atrás</a>

                                                    </div>

                                                    <!--Fin del footer del contenido-->
                                                </div>


                                            </form>

                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->

                                </div>

                                <div class=" tab-pane " id="unidadmedida">

                                    <!-- Content Header (Page header) -->
                                    <section class="content-header">


                                        <div class="row mb-1">

                                            <div class="col-auto mr-auto col-md-5">

                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Estoy buscando...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button"><i
                                                                class="fas fa-search"></i></button>
                                                    </span>
                                                </div>


                                            </div>

                                            <div class="col-auto">

                                                <a href="#registrounidadmedida" date-togggle="tab"
                                                    class="btn btn-success"><i class="fas fa-plus-circle"></i>
                                                    Crear</a>
                                            </div>


                                        </div>

                                    </section>



                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Lista de unidades de medida</h3>


                                        </div>
                                        <!-- Fin Caja superior -->



                                        <!--Inicio del card body-->
                                        <div class="card-body p-0">
                                            <table class="table table-striped projects">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Código
                                                        </th>

                                                        <th>
                                                            Descripción
                                                        </th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>


                                                        <td>U001</td>
                                                        <td>Gramos</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>U002</td>
                                                        <td>Kilogramos</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>P003</td>
                                                        <td>Frasco</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>P004</td>
                                                        <td>Bolsa</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>







                                                </tbody>
                                            </table>
                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->

                                </div>

                                <div class=" tab-pane " id="tiposervicio">

                                    <!-- Content Header (Page header) -->
                                    <section class="content-header">


                                        <div class="row mb-1">

                                            <div class="col-auto mr-auto col-md-5">

                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Estoy buscando...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button"><i
                                                                class="fas fa-search"></i></button>
                                                    </span>
                                                </div>


                                            </div>

                                            <div class="col-auto">

                                                <a href="#" class="btn btn-success"><i class="fas fa-plus-circle"></i>
                                                    Crear</a>
                                            </div>


                                        </div>

                                    </section>



                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Lista de tipos de servicios</h3>


                                        </div>
                                        <!-- Fin Caja superior -->



                                        <!--Inicio del card body-->
                                        <div class="card-body p-0">
                                            <table class="table table-striped projects">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Código
                                                        </th>

                                                        <th>
                                                            Descripción
                                                        </th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>


                                                        <td>001</td>
                                                        <td>Belleza</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>002</td>
                                                        <td>Vacunación</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>003</td>
                                                        <td>Desparasitación</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>




                                                </tbody>
                                            </table>
                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->

                                </div>

                                <div class=" tab-pane " id="raza">

                                    <!-- Content Header (Page header) -->
                                    <section class="content-header">


                                        <div class="row mb-1">

                                            <div class="col-auto mr-auto col-md-5">

                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Estoy buscando...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button"><i
                                                                class="fas fa-search"></i></button>
                                                    </span>
                                                </div>


                                            </div>

                                            <div class="col-auto">

                                                <a href="#" class="btn btn-success"><i class="fas fa-plus-circle"></i>
                                                    Crear</a>
                                            </div>


                                        </div>

                                    </section>



                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Lista de razas de mascotas</h3>


                                        </div>
                                        <!-- Fin Caja superior -->



                                        <!--Inicio del card body-->
                                        <div class="card-body p-0">
                                            <table class="table table-striped projects">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Código
                                                        </th>

                                                        <th>
                                                            Descripción
                                                        </th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>


                                                        <td>001</td>
                                                        <td>Pitbull</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>002</td>
                                                        <td>Beagle</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>003</td>
                                                        <td>Angora</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>




                                                </tbody>
                                            </table>
                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->

                                </div>


                                <div class=" tab-pane " id="tipovacuna">

                                    <!-- Content Header (Page header) -->
                                    <section class="content-header">


                                        <div class="row mb-1">

                                            <div class="col-auto mr-auto col-md-5">

                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Estoy buscando...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button"><i
                                                                class="fas fa-search"></i></button>
                                                    </span>
                                                </div>


                                            </div>

                                            <div class="col-auto">

                                                <a href="#" class="btn btn-success"><i class="fas fa-plus-circle"></i>
                                                    Crear</a>
                                            </div>


                                        </div>

                                    </section>



                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Lista de tipos de vacunas</h3>


                                        </div>
                                        <!-- Fin Caja superior -->



                                        <!--Inicio del card body-->
                                        <div class="card-body p-0">
                                            <table class="table table-striped projects">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Código
                                                        </th>

                                                        <th>
                                                            Descripción
                                                        </th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>


                                                        <td>001</td>
                                                        <td>Canina</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>002</td>
                                                        <td>Felina</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->

                                </div>

                                <div class=" tab-pane " id="tipomedicamento">

                                    <!-- Content Header (Page header) -->
                                    <section class="content-header">


                                        <div class="row mb-1">

                                            <div class="col-auto mr-auto col-md-5">

                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Estoy buscando...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button"><i
                                                                class="fas fa-search"></i></button>
                                                    </span>
                                                </div>


                                            </div>

                                            <div class="col-auto">

                                                <a href="#" class="btn btn-success"><i class="fas fa-plus-circle"></i>
                                                    Crear</a>
                                            </div>


                                        </div>

                                    </section>



                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Lista de tipos de medicamentos</h3>


                                        </div>
                                        <!-- Fin Caja superior -->



                                        <!--Inicio del card body-->
                                        <div class="card-body p-0">
                                            <table class="table table-striped projects">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Código
                                                        </th>

                                                        <th>
                                                            Descripción
                                                        </th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>


                                                        <td>001</td>
                                                        <td>Caninos</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>002</td>
                                                        <td>Felinos</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->

                                </div>

                                <div class=" tab-pane " id="estado">

                                    <!-- Content Header (Page header) -->
                                    <section class="content-header">


                                        <div class="row mb-1">

                                            <div class="col-auto mr-auto col-md-5">

                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Estoy buscando...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button"><i
                                                                class="fas fa-search"></i></button>
                                                    </span>
                                                </div>


                                            </div>

                                            <div class="col-auto">

                                                <a href="#" class="btn btn-success"><i class="fas fa-plus-circle"></i>
                                                    Crear</a>
                                            </div>


                                        </div>

                                    </section>



                                    <!-- Inicio Contenido Total -->
                                    <div class="card card-success">
                                        <!-- Incio Caja superior -->
                                        <div class="card-header">
                                            <h3 class="card-title">Lista de estados de la cita</h3>


                                        </div>
                                        <!-- Fin Caja superior -->



                                        <!--Inicio del card body-->
                                        <div class="card-body p-0">
                                            <table class="table table-striped projects">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Código
                                                        </th>

                                                        <th>
                                                            Descripción
                                                        </th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>


                                                        <td>001</td>
                                                        <td>Programada</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>

                                                    <tr>


                                                        <td>002</td>
                                                        <td>En proceso</td>



                                                        <td class="project-actions text-right ">



                                                            <a class="btn btn-info btn-sm" href="actualizarclientesu">

                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Editar
                                                            </a>


                                                            <a class="btn btn-danger btn-sm" href="#"
                                                                onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Borrar
                                                            </a>
                                                        </td>


                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <!--Fin del card body-->

                                        <!--Inicio del footer del contenido-->
                                        <div class="card-footer">


                                        </div>
                                        <!--Fin del footer del contenido-->

                                    </div> <!-- Fin Contenido Total -->

                                </div>



                            </div>
                        </div>





                    </div>
                    <!-- /.col -->

                </div>


            </div>

    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
