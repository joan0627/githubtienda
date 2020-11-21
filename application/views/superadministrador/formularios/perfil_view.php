<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url(); ?>assets/img/iconos/icons8-bloquear-50.png"> Seguridad</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Configuración</a></li>
                        <li class="breadcrumb-item active">Seguridad</li>
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

                                <li class="nav-item tabcolor"><a class="  nav-link active " href="#tabpreguntaseguridad"
                                        data-toggle="tab">Pregunta de seguridad</a>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="#cambiocontrasena" data-toggle="tab">Cambiar
                                        contraseña</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane " id="tabpreguntaseguridad">
                                    <form id="form-pregunta"action="" method="post" class="form-horizontal">


                                        <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Contraseña actual</label> <label style="color: red;"> *</label>
                                                 <input name="contrasenaactualpre"  id="contrasenaactualpre" type="password" autocomplete="off" class="form-control"placeholder="Ingrese su contraseña actual">
                                            </div>

                                        </div>

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label>Pregunta de seguridad</label> <label style="color: red;">*</label>
                                                   
                                                    <select name="preguntaSeguridad" id="preguntaSeguridad"
                                                        class="form-control">                                  
                                                        <?php if ($idPreguntaSeguridad != ""): ?>
                                                            <?php foreach ($preguntas as $clave => $valor): ?>
                                                                 <?php if ($idPreguntaSeguridad == $valor->idPreguntaSeguridad): ?>
                                                                      <option hidden value=" <?php echo $valor->idPreguntaSeguridad; ?>" selected><?php echo $valor->pregunta; ?></option>
                                                                        <?php foreach ($preguntas as $clave => $valor): ?>
                                                                             <option value=" <?php echo $valor->idPreguntaSeguridad; ?>"><?php echo $valor->pregunta; ?></option>
                                                                         <?php endforeach;?>
                                                                 <?php endif;?>
                                                            <?php endforeach;?>

                                                        <?php else:

                                                            foreach ($preguntas as $clave => $valor): ?>
                                                                    <option value="" selected hidden>-Seleccione una pregunta de seguridad-</option>;
                                                                    <option value=" <?php echo $valor->idPreguntaSeguridad; ?>"><?php echo $valor->pregunta; ?></option>
                                                            <?php endforeach;?>
                                                        <?php endif?>
                                                    </select>
                                                    <?php echo form_error('preguntaSeguridad', '<p class="text-danger">', '</p>'); ?>
                                                </div>

                                            </div>
                                 


                                        </div>

                                     <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label>Respuesta</label> <label style="color: red;">*</label>
                                                    <input name="respuesta" id="respuesta" type="text" class="form-control "
                                                        placeholder="Ingrese la respuesta a su pregunta de seguridad"
                                                        value="">
                                                        <?php echo form_error('respuesta', '<p class="text-danger">', '</p>'); ?>

                                                </div>

                                            </div>
                                        </div>


                                        <div class="text-center card-footer">

                                            <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;"
                                                type="submit" id="botonactualizarPregunta" class="btn btn-success col-2"><i
                                                    class="fas fa-save"></i>
                                                Actualizar</button>
                                            <a style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;"
                                                href="<?php echo base_url(); ?>inicio" class="btn btn-success col-2"><i
                                                    class="fas fa-window-close"></i> Cancelar</a>
                                        </div>

                                  
                                     </form>


                                </div>
                                <!-- /.tab-pane -->


                                <div class="tab-pane" id="cambiocontrasena">
                                <form id="form-contrasena" action="" method="post" class="form-horizontal">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Contraseña actual</label> <label style="color: red;"> *</label>
                                                <input name="contrasenaactual"  id="contrasenaactual" type="password" autocomplete="off" class="form-control"
                                                    placeholder="Ingrese su contraseña actual">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Nueva contraseña</label> <label style="color: red;"> *</label>
                                                <input name="nuevacontrasena" id="nuevacontrasena" type="password" autocomplete="off" class="form-control"
                                                    placeholder="Ingrese su nueva contraseña">
                                            </div>

                                        </div>


                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Confirmar nueva contraseña</label> <label style="color: red;">
                                                    *</label>
                                                <input name="confirmcontrasena" type="password" autocomplete="off" class="form-control"
                                                    placeholder="Confirme su contraseña ">
                                            </div>

                                        </div>





                                    </div>


                                    <div class="text-center card-footer">

                                        <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;"
                                            type="submit" id="botonactualizarContrasena" class="btn btn-success col-2"><i
                                                class="fas fa-save"></i>
                                            Actualizar</button>
                                        <a style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;"
                                            href="<?php echo base_url(); ?>inicio" class="btn btn-success col-2"><i
                                                class="fas fa-window-close"></i> Cancelar</a>
                                    </div>

                                </form>

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