<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> <img src="<?php echo base_url();?>assets/img/iconos/icons8-business-report-30.png"> Informes
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Informes</a></li>
                        <li class="breadcrumb-item active">Listar informes</li>
                    </ol>
                </div>
            </div>
        </div><!-- FIN/.container-fluid -->
    </section>

    <!-- Incio seccion contenido -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">

                                <li class="nav-item "><a class="nav-link active" href="#compras"
                                        data-toggle="tab">Compras</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#ventas" data-toggle="tab">Ventas de productos</a>
                                </li>
                                <li class="nav-item "><a class="nav-link" href="#ventas_servicio"
                                        data-toggle="tab">Ventas de servicios</a>
                                </li>
                               
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">


                                <div class=" active tab-pane " id="compras">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Año</label>
                                              
                                                <?php
                                                    echo "<select  class='form-control' id='ano' name='ano'>";
                                                        for($i=2019;$i<=date("Y");$i++)
                                                        {   echo "<option selected hidden value='".date("Y")."'>".date("Y")."</option>";                                               
                                                            echo "<option value='".$i."'>".$i."</option>";
                                                        }
                                                    echo "</select>";
                                                    ?>
                                                
                                
                                            </div>

                                        </div>

                                        <div id="contenedor_grafico">
                                         <canvas id="myChart"></canvas>
                                        </div>


                                   



								</div>
								
								<div class=" tab-pane " id="ventas">
                                    <form class="form-horizontal">

                                       
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Año</label>
                                              
                                                <?php
                                                    echo "<select  class='form-control' id='anoVenta' name='anoVenta'>";
                                                        for($i=2019;$i<=date("Y");$i++)
                                                        {   echo "<option selected hidden value='".date("Y")."'>".date("Y")."</option>";                                               
                                                            echo "<option value='".$i."'>".$i."</option>";
                                                        }
                                                    echo "</select>";
                                                    ?>
                                                
                                
                                            </div>

                                        </div>

                                        <div id="contenedor_grafico_venta">
                                         <canvas id="myChart_venta"></canvas>
                                        </div>



                                    </form>

                                </div>



                                <div class=" tab-pane " id="ventas_servicio">
                                    <form class="form-horizontal">

                                       
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Año</label>
                                              
                                                <?php
                                                    echo "<select  class='form-control' id='anoVentaS' name='anoVentaS'>";
                                                        for($i=2019;$i<=date("Y");$i++)
                                                        {   echo "<option selected hidden value='".date("Y")."'>".date("Y")."</option>";                                               
                                                            echo "<option value='".$i."'>".$i."</option>";
                                                        }
                                                    echo "</select>";
                                                    ?>
                                                
                                
                                            </div>

                                        </div>

                                        <div id="contenedor_grafico_ventaS">
                                         <canvas id="myChart_ventaS"></canvas>
                                        </div>



                                    </form>

                                </div>


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
