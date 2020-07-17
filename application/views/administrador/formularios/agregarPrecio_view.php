<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-price-tag-50.png" class="nav-icon">
                        Productos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Productos</a></li>
                        <li class="breadcrumb-item active">Agregar precio</li>
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
                <h3 class="card-title">Registro de precio </h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" method="POST">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Precio</label> <label style="color: red;"> * </label>
                                <input name="precio" type="text" class="form-control " placeholder="$2000">
                            </div>
						</div>
						
						<div class="col-md-6">

                            <div class="form-group">
                                <label>Descripción</label> <label style="color: red;"> *</label>
                                <textarea class="form-control" rows="3"
                                        placeholder="Escribe una breve descripción ..." name="descripcion"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <!--Fin del card body-->
					<!--Inicio del footer del contenido-->

								
                   
               
					<a type="submit" href="registrar" id="botonAgregarPrecio" class="btn btn-success col-2">Agregar</a>
						<a href="registrar" id="botonAtras" class="btn btn-success col-2">Atrás</a>


                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
