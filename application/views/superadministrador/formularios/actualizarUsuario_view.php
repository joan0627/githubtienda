<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url(); ?>assets/img/iconos/icons8-management-50.png"> Usuarios</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
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
                <h3 class="card-title">Actualización de usuario</h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" method="POST">
                <!--Inicio del card body-->
                <div class="card-body ">
                <div class="row">
                        <div style="text-align:left">
                            <i><small> Todos los campos marcados con <label style="color: red;">asterisco (*)</label>
                                    son obligatorios.</small></i>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Id</label>
                                <input readonly="readonly" name="id" type="text" class="form-control"
                                    placeholder="Ninguno" value="<?php echo $clave['idUsuario']; ?>">
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre completo</label> <label style="color: red;"> *</label>

                              
                                <?php if($clave['idUsuario'] == 67 || $clave['idUsuario']==$this->session->userdata("idUsuario")) {?>
                                
                                <input hidden name="nombre" type="text" class="form-control"value="<?php echo $clave['nombre']; ?>">
                                <input readOnly="readOnly" name="nombre2" type="text" class="form-control"value="<?php echo $clave['nombre']; ?>">
                                <?php echo form_error('nombre', '<p class="text-danger">', '</p>'); ?>


                                <?php }
                                else
                                {?>

                                <input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre"
                                    value="<?php echo $clave['nombre']; ?>">
                                    <?php echo form_error('nombre', '<p class="text-danger">', '</p>'); ?>
                                <?php }?>
                            </div>

                        </div>

                    </div>



                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Celular</label> <label style="color: red;"> *</label>
                                <input name="celular" type="text" class="form-control" placeholder="Ingrese el celular"
                                    value="<?php echo $clave['celular']; ?>">
                                    <?php echo form_error('celular', '<p class="text-danger">', '</p>'); ?>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre de usuario</label>
                                <input readOnly="readOnly" name="username" type="text" class="form-control "
                                    placeholder="Ingrese el nombre de usuario"
                                    value="<?php echo $clave['nombreUsuario']; ?>">
                            </div>

                        </div>

                    </div>
                    <div class="row">


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Rol</label>


                                <?php if($clave['idUsuario'] == 67 || $clave['idUsuario']==$this->session->userdata("idUsuario")) {?>
                                
                                <input hidden name="rol" type="text" class="form-control"value="<?php echo $clave['idRol']; ?>">
                                <input disabled name="rol2" type="text" class="form-control"value="<?php echo $clave['descripcion']; ?>">

                                <?php }
                                else
                                {?>
                                 <select name="rol" class="form-control">

                                    <option value="<?php echo ($clave['idRol']) ?>">
                                        <?php
                                        switch ($clave['idRol']) {
                                            case 1:
                                                echo "Administrador";

                                                echo '<option value="2">Empleado</option>';

                                                break;
                                            case 2:
                                                echo "Empleado";

                                                echo '<option value="1">Administrador</option>';
                                        }

                                        ?>
                                    </option>

                                </select>

                                <?php }?>
                               
                            </div>
                        </div>


                    </div>
                </div>







                <!--Fin del card body-->

                <!--Inicio del footer del contenido-->
                <div class="text-center card-footer">

                    <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;" type="submit"
                        id="botonRegistroUsuario" class="btn btn-success col-2"><i class="fas fa-save"></i>
                        Actualizar</button>
                    <a style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;"
                        href="<?php echo base_url(); ?>usuario" class="btn btn-success col-2"><i
                            class="fas fa-arrow-left"></i> Atrás</a>
                </div>
                <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->