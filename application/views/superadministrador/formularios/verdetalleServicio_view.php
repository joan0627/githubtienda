<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-barbershop-50.png">Servicios</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Servicios</a></li>
                        <li class="breadcrumb-item active">Detalle del servicio</li>
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
                <h3 class="card-title">Ver detalle del Servicio </h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" method="POST">
                <!--Inicio del card body-->

                <div class="card-body ">
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Código</label> 
                                <input name="codigo" type="text" class="form-control"
                                    value="P1203" readOnly="readonly">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre</label> 
                                <input name="nombre" type="text" class="form-control"
                                    value="Peluqueria Canina" readOnly="readonly">

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">


                                <div class="form-group">
                                    <label>Responsable</label> 
                                    <input name="nombre" type="text" class="form-control"
                                    value="Fredy" readOnly="readonly">
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Descripción</label> 
                                <textarea class="form-control" rows="3"
                                    value=" " readOnly="readonly">Corte y cepillado de canino con shampoo especial antipulgas y loción protectora</textarea>
                            </div>
                        </div>


                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <div class="form-group">
                                    <label>Recomendaciones previas</label>
                                    <textarea class="form-control" rows="3"
                                        value="" readOnly="readonly">Traer el carnet de citas</textarea>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Recomendaciones posteriores</label>
                                <textarea class="form-control" rows="3"
								value="" readOnly="readonly">No bañar en 45 dias habiles despues del tratamiento con shampoo especializado</textarea>
                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
						<label>Precio </label> 
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-dollar-sign"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" value="25.000" readOnly="readonly">
                                
                            </div>
                        </div>

                    </div>

                    <div class="row">
                   

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Vista previa de la imagen</label>
                                <div class="timeline-body">
                                    <img src="http://placehold.it/250x200" alt="...">

                                </div>
                            </div>
                        </div>

                    </div>


                    <!--Inicio del footer del contenido-->
                    <!--Inicio del footer del contenido-->
                    <div class="card-footer">

                        <a href="listaserviciosu" class="btn btn-success col-2">Atrás</a>
                    </div>
                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->

    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
