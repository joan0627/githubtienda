<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-resume-website-50.png"> Mi perfil
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Configuración</a></li>
                        <li class="breadcrumb-item active">Mi perfil</li>
                    </ol>
                </div>
            </div>
        </div><!-- FIN/.container-fluid -->
    </section>

    <!-- Incio seccion contenido -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
             

                <div class="col-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills ">

                                <li class="nav-item "><a class="nav-link active " href="#settings"
                                        data-toggle="tab">Información general</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#acercademi" data-toggle="tab">Acerca de
                                        mi</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#contrasena" data-toggle="tab">Cambiar
                                        contraseña</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane " id="settings">
                                    <form class="form-horizontal">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <label>Tipo de documento</label> <label style="color: red;">
                                                        *</label>
                                                    <select name="tipoDocumento" class="form-control">

                                                        <option hidden selected>-Seleccione el tipo de documento-
                                                        </option>
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
                                                    <?php echo form_error('documento','<p class="text-danger">','</p>'); ?>




                                                </div>



                                            </div>


                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label>Nombre completo</label> <label style="color: red;"> *</label>
                                                    <input name="nombre" type="text" class="form-control"
                                                        placeholder="Ingrese el nombre" value="">

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
                                                    <input name="celular" type="text" class="form-control"
                                                        placeholder="Ingrese el celular">
                                                    <?php echo form_error('celular','<p class="text-danger">','</p>');?>
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
                                                    <input name="correo" type="email" class="form-control"
                                                        placeholder="Ingrese el correo">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label>Nombre de usuario</label> <label style="color: red;">
                                                        *</label>
                                                    <input name="username" type="text" class="form-control "
                                                        placeholder="Ingrese el nombre de usuario">
                                                    <?php echo form_error('username','<p class="text-danger">','</p>');?>
                                                </div>

                                            </div>


                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label>Pregunta de seguridad</label>
                                                    <select name="tipoDocumento" class="form-control">

                                                        <option hidden selected>-Seleccione la pregunta de seguridad-
                                                        </option>
                                                        <option value="1">¿Cuál es tu comida favorita?</option>
                                                        <option value="2">¿Cómo se llamaba tu primera mascota?</option>
                                                        <option value="3">¿En qué ciudad nació tu madre?</option>
                                                        <option value="4">¿En qué ciudad nació tu madre?</option>
                                                        <option value="5">¿Con qué soñaba trabajar de pequeño?</option>
                                                    </select>

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label>Respuesta</label> <label style="color: red;">
                                                        *</label>
                                                    <input name="username" type="text" class="form-control "
                                                        placeholder="Ingrese la respuesta a su pregunta de seguridad">

                                                </div>

                                            </div>


                                        </div>


                                        <button type="submit" class="btn btn-success col-2">Actualizar</button>

                                    </form>



                                </div>
                                <!-- /.tab-pane -->


                                <div class="tab-pane" id="acercademi">
                                    <div class="form-group">
                                        <label>Descripción</label> <label style="color: red;"> *</label>
                                        <textarea class="form-control" rows="3"
                                            placeholder="Escribe algo acerca de ti ..."></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Subir tu foto para el Home</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Escoger un
                                                    archivo</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Cargar</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Vista previa de la foto</label>
                                                <div class="timeline-body">
                                                    <img src="http://placehold.it/520x612" alt="...">

                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                    <button type="submit" class="btn btn-success col-2">Actualizar</button>
                                </div>

                                <div class="tab-pane" id="contrasena">
                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Contraseña actual</label> <label style="color: red;"> *</label>
                                                <input name="contrasenaactual" type="password" class="form-control"
                                                    placeholder="Ingrese su contraseña actual">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Nueva contraseña</label> <label style="color: red;"> *</label>
                                                <input name="nuevacontrasena" type="password" class="form-control"
                                                    placeholder="Ingrese su nueva contraseña">
                                            </div>

                                        </div>


                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Confirmar nueva contraseña</label> <label style="color: red;">
                                                    *</label>
                                                <input name="confirmcontrasena" type="password" class="form-control"
                                                    placeholder="Confirme su contraseña ">
                                            </div>

                                        </div>





                                    </div>
                                    <button type="submit" class="btn btn-success col-2">Actualizar</button>
                                </div>


                                <!-- /.tab-pane -->

                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->

                </div>
            </div>

    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
