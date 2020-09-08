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
                        <li class="breadcrumb-item"><a href="#">Producto</a></li>
                        <li class="breadcrumb-item active">Detalle</li>
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
                <h3 class="card-title">Detalle del producto </h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" method="POST">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Codigo</label>
                                <input name="codigo" type="text" class="form-control " placeholder="Ingrese el codigo" 
                                value="<?php echo $clave['idProducto']; ?>" readonly="readonly">
                            </div>
						</div>
						
						<div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre</label>
                                <input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre" 
                                value="<?php echo $clave['nombreProducto']; ?>"  readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea class="form-control" rows="2"
                                    placeholder="Campo vacio ..." name="descripcion"  readonly="readonly"><?php echo $clave['descripcionProducto'];?>
                                </textarea>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
							<label>Categoria</label>
                            <input name="categoria" type="text" class="form-control" placeholder="Ingrese el nombre" 
                                value="<?php echo $clave['descripcion']; ?>"  readonly="readonly">
                            </div>
						</div>
						
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                           <div class="form-group">
						   <label>Marca</label>
                           <input name="marca" type="text" class="form-control" placeholder="Ingrese el nombre" 
                                value="<?php echo $clave['descripcionMarca']; ?>"  readonly="readonly">
                            </div>

                        </div> 

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Presentación</label>
                                <input name="presentacion" type="text" class="form-control"
                                    placeholder="Ingrese la existencia" value="<?php echo $clave['descripcionPresentacion']; ?>"readonly="readonly" >
                            </div>
						</div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Valor de medida</label>
                                <input name="valorDeMedida" type="text" class="form-control"
                                    placeholder="Ingrese el valor de medida" value="<?php echo $clave['valorMedida']; ?>"  readonly="readonly">
                            </div>
						</div>

                        <div class="col-md-6">
                            <div class="form-group">
							<label>Unidad de medida</label>
                            <input name="unidadDeMedida" type="text" class="form-control"
                                    placeholder="Ingrese el valor de medida" value="<?php echo $clave['descripcionUnidadmedida']; ?>"  readonly="readonly">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Existencia</label>
                                <input name="existencia" type="text" class="form-control"
                                    placeholder="Ingrese la existencia" value="<?php echo $clave['existencia']; ?>"   readonly="readonly" >
                            </div>
						</div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tipo de especie</label>
                                <input name="tipoespecie" type="text" class="form-control"
                                    placeholder="Ingrese la existencia" value="<?php echo $clave['idEspecieProducto']; ?>"   readonly="readonly" >
                            </div>
						</div>

                    
                    </div>
                    

                    <div class="row"  >
                        <div class="col-md-6">
                            <div class="form-group" >

                                <label>Indicaciones</label>
                                <textarea class="form-control" rows="3"
                                readonly="readonly" placeholder="Especifique las indicaciones de la vacuna" name="indicaciones"
                                    ><?php echo $clave['indicaciones']; ?></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>Contraindicaciones</label>
                            <textarea class="form-control" rows="3"
                            readonly="readonly" placeholder="Especifique las contraindicaciones de la vacuna" name="contraIndicaciones"
                                ><?php echo $clave['contradindicaciones']; ?></textarea>
                        </div>

                    </div>

                    
					<div class="row" >

                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Edad</label>
                                <input class="form-control" rows="3"
                                readonly="readonly" placeholder="Ingrese el tiempo recomendado" name="edad" value="<?php echo $clave['edadAplicacion']; ?>"></input>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>Precio de venta</label>
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-dollar-sign"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Ingrese el precio de la vacuna" 
                                name="precioVenta"  readonly="readonly" value="<?php echo $clave['precio']; ?>">
                            </div>
                        </div>


                    </div>
					<hr>
					
    
                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->
                    <div class="text-center card-footer">

                        <a style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; " 
                        href="<?php echo base_url(); ?>producto"
                            id="botonAtras" class="btn btn-success col-2">Atrás</a>

                    </div>
                            

                                        <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
