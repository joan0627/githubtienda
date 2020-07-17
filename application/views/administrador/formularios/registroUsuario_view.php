<!-- Inicio Content Wrapper. Contains page content -->

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
                        <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
                        <li class="breadcrumb-item active">Registro de usuarios</li>
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
                <h3 class="card-title">Registro de usuarios </h3>


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
									placeholder="Ingrese el documento "	>
									<?php echo form_error('documento','<p class="text-danger">','</p>'); ?>


									

							</div>
				
						
							
						</div>

						
					</div>
				

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre completo</label> <label style="color: red;"> *</label>
								<input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre" value="<?php echo $nombre;?>">
								<?php echo form_error('nombre','<p class="text-danger">','</p>');?>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Teléfono</label> 
								<input name="telefono" type="text" class="form-control" placeholder="Ingrese el teléfono">
							
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Celular</label> <label style="color: red;"> *</label>
								<input name="celular" type="text" class="form-control" placeholder="Ingrese el celular">
								<?php echo form_error('celular','<p class="text-danger">','</p>');?>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Dirección</label>
								<input name="direccion" type="text" class="form-control" placeholder="Ingrese la dirección">
							
                            </div>

                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Correo</label>
								<input name="correo" type="email" class="form-control" placeholder="Ingrese el correo" >

                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre de usuario</label> <label style="color: red;"> *</label>
                                <input name="username" type="text" class="form-control "
									placeholder="Ingrese el nombre de usuario">
									<?php echo form_error('username','<p class="text-danger">','</p>');?>
                            </div>

                        </div>


                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Contraseña</label> <label style="color: red;"> *</label>
                                <input name="contrasena" type="password" class="form-control" 
									placeholder="Ingrese la contraseña" >
									<?php echo form_error('contrasena','<p class="text-danger">','</p>');?>
                            </div>

                        </div>


                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Confirmar contraseña</label> <label style="color: red;"> *</label>
                                <input name="confirmarcontrasena" type="password" class="form-control" id="nombre"
									placeholder="Confirme la contraseña" >

                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Rol</label> <label style="color: red;"> *</label>
                                <select name="rol" class="form-control">
                                    <option hidden selected>-Seleccione el tipo de rol-</option>
                                    <option value="2">Empleado</option>
                                </select>

                            </div>
                        </div>
                    </div>

                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->
                    <div class="card-footer">

                        <button type="submit" id="botonRegistroUsuario" class="btn btn-success col-2">Registrar</button>
						<a href="listado" class="btn btn-success col-2">Atrás</a>
                    </div>
                    <!--Fin del footer del contenido-->

					

            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
