<!-- Inicio Content Wrapper. Contains page content -->
<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
				<h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-management-50.png" > Usuarios</h1>
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tipo de documento</label>
                                <select name="tipoDocumento" class="form-control">

                                    <option value="<?php echo ($clave['tipoDocumento']) ?>">
                                        <?php 

									switch ($clave['tipoDocumento']) {
										case 1 :
										echo "Cédula de ciudadanía";
										
										echo '<option value="2">Cédula de extranjería</option>';
										echo  '<option value="3">Pasaporte</option>';
										echo '<option value="4">Tarjeta de identidad</option>';
										echo  '<option value="5">Registro civil</option>';
										break;
										case 2:
										echo "Cédula de extranjería";
									
										echo '<option value="1">Cédula de ciudadanía</option>';
										echo  '<option value="3">Pasaporte</option>';
										echo '<option value="4">Tarjeta de identidad</option>';
										echo  '<option value="5">Registro civil</option>';
										break;
										case 3:
										echo "Pasaporte";
									
										echo '<option value="1">Cédula de ciudadanía</option>';
										echo  '<option value="2">Cédula de extranjería</option>';
										echo '<option value="4">Tarjeta de identidad</option>';
										echo  '<option value="5">Registro civil</option>';
										break;
										case 4:
										echo "Tarjeta de identidad";
										
										echo '<option value="1">Cédula de ciudadanía</option>';
										echo  '<option value="2">Cédula de extranjería</option>';
										echo '<option value="3">Pasaporte</option>';
										echo  '<option value="5">Registro civil</option>';
										break;
										case 5:
										echo "Registro civil";
									
										echo '<option value="1">Cédula de ciudadanía</option>';
										echo  '<option value="2">Cédula de extranjería</option>';
										echo '<option value="3">Pasaporte</option>';
										echo  '<option value="4">Tarjeta de identidad</option>';
										break;
										}
									
										?>
                                    </option>

                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Documento</label>
                                <input name="documento" type="text" class="form-control "
                                    placeholder="Ingrese el documento" value="<?php echo $clave['documento']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre completo</label>
                                <input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre"
                                    value="<?php echo $clave['nombre']; ?>">
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Teléfono</label>
                                <input name="telefono" type="text" class="form-control"
                                    placeholder="Ingrese el teléfono" value="<?php echo $clave['telefono']; ?>">
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Celular</label>
                                <input name="celular" type="text" class="form-control" placeholder="Ingrese el celular"
                                    value="<?php echo $clave['celular']; ?>">
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Dirección</label>
                                <input name="direccion" type="text" class="form-control"
                                    placeholder="Ingrese la dirección" value="<?php echo $clave['direccion']; ?>">
                            </div>

                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Correo</label>
                                <input name="correo" type="email" class="form-control" placeholder="Ingrese el correo"
                                    value="<?php echo $clave['correo']; ?>">
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre de usuario</label>
                                <input name="username" type="text" class="form-control "
                                    placeholder="Ingrese el nombre de usuario"
                                    value="<?php echo $clave['username']; ?>">
                            </div>

                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Rol</label>
                                <select name="rol" class="form-control">

                                    <option value="<?php echo ($clave['rol'])?>">
                                        <?php 
											switch ($clave['rol'])
										 {
											case 1 :										
	
											echo '<option value="2">Empleado</option>';
											
											break;
											case 2:
											echo "Empleado";
										}

										?>
                                    </option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Estado</label>
                                <select name="estado" class="form-control">
                                    <option value="<?php echo ($clave['estado'])?>">
                                        <?php 
											switch ($clave['estado'])
										 {
											case 1 :
											echo "Activo";
	
											echo '<option value="2">Inactivo</option>';
											
											break;
											case 2:
											echo "Inactivo";
	
											echo '<option value="1">Activo</option>';
										}

										?>
                                    </option>

                                </select>
                            </div>
                        </div>
                    </div>







                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->
                    <div class="card-footer">

                        <button type="submit" id="botonActualizarUsuario"
                            class="btn btn-success col-2">Actualizar</button>

							<a href="<?php echo base_url();?>usuario/listado" class="btn btn-success col-2">Atrás</a>
				
                    </div>
                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
