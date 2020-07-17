<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
				<h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-people-50.png" > Clientes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Clientes</a></li>
                        <li class="breadcrumb-item active">Actualizar</li>
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
                <h3 class="card-title">Actualizar cliente</h3>


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

                                    <option hidden selected >Cédula de ciudadanía</option>
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
                                    placeholder="Ingrese el documento " value="1001661421" >
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre completo</label> <label style="color: red;"> *</label>
                                <input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre" value="Carlos Sánchez">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Teléfono</label>
                                <input name="telefono" type="text" class="form-control"
                                    placeholder="Ingrese el teléfono" value="454512512">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label> <label style="color: red;"> *</label>
                                <input name="celular" type="text" class="form-control" placeholder="Ingrese el celular" value="3017474883">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dirección</label>
                                <input name="direccion" type="text" class="form-control"
                                    placeholder="Ingrese la dirección" value="carrera #80">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo</label>
                                <input name="correo" type="email" class="form-control" placeholder="Ingrese el correo" value="Carlos124@gmail.com" >
                            </div>

						</div>

					</div>
					
					<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 150px">Tipo de mascota</th>
                                <th>Nombre de la mascota</th>
                                <th>Raza</th>
								<th class="text-center">Acciones</th>
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
                               
								<td class="project-actions text-center ">
								<a class="btn btn-primary btn-sm" href="<?php echo base_url();?>mascota/verDetalle">
									<i class="fas fa-eye"></i>
									</i>
									Ver
								</a>



								<a class="btn btn-info btn-sm" href="<?php echo base_url();?>mascota/actualizar">
						
									<i class="fas fa-pencil-alt">
									</i>
									Editar
								</a>


								<a class="btn btn-danger btn-sm"  href="#"    
								onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')"
								>
									<i class="fas fa-trash">
									</i>
									Borrar
								</a>
							</td>
                            </tr>
                            <tr>
                                <td>Gato</td>
                                <td>Muñeca</td>
                                <td>
                                    <div class="">Angora
                                    
                                    </div>
                                </td>
                            
								<td class="project-actions text-center " style="width: 30%">
								<a class="btn btn-primary btn-sm" href="<?php echo base_url();?>cliente/verDetalle">
									<i class="fas fa-eye"></i>
									</i>
									Ver
								</a>



								


								
							</td>
                            </tr>

                        </tbody>
                    </table>


                    <!--Fin del card body-->

					<!--Inicio del footer del contenido-->
					
					
                    <div class="card-footer">


					<button id="botonActualizarCliente" class="btn btn-success col-2">Actualizar</button> 
						<a href="listaclientesu" id="botonAtras" class="btn btn-success col-2">Atrás</a>

                    </div>
                    
					

                   
                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
