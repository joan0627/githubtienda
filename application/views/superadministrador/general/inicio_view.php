<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-dog-house-50.png"> Inicio</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Principal</li>
                    </ol>
                </div>
            </div>
        </div><!-- FIN/.container-fluid -->
    </section>

    <!-- Incio seccion contenido -->
    <section class="content">

        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3 id="numUsuariosI"></h3>

                            <p>Usuarios</p>
                            <span id="UDeshabilitados">Usuarios deshabilitados: </span>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="<?php echo base_url();?>usuario" class="small-box-footer">Más <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 id="numProductos"></h3>

                            <p>Productos</p>
                            <span id="productoshoy">Nuevos productos: </span>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pricetags"></i>

                        </div>
                        <a href="<?php echo base_url();?>producto" class="small-box-footer">Más <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3 id="citasMes"></h3>

                            <p id="mesletra">Citas de: </p>
                            <span id="totalcitas">Total de citas: </span>
                        </div>
                        <div class="icon">
                            <i class="ion ion-calendar"></i>

                        </div>
                        <a href="<?php echo base_url();?>agenda/historialcitas" class="small-box-footer">Más <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3 id="valorTotalventa"></h3>

                            <p>Total de ventas </p>
                            <span id="totalventas">Numero de ventas: </span>

                        </div>
                        <div class="icon">
                            <i class="ion ion-cash"></i>
                        </div>
                        <a href="<?php echo base_url();?>venta/ventaproductos" class="small-box-footer">Más <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->

                
                <div class="col-lg-6 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->

                    <!-- /Inicio reporte ventas productos -->
                    
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Ventas de productos</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>

                            </div>
                        </div>
                        <div class="card-body">

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

                        </div>

                    </div>
                    <!-- /Fin reporte ventas productos -->

                    









                </div>
                <div class="col-lg-6">
                <!-- /Inicio reporte ventas servicios -->
                <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Ventas de servicios</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>

                            </div>
                        </div>


                        <div class="card-body">

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

                        </div>
                        <!-- /Fin reporte ventas servicios -->
                    </div>
                </div>
    
            </div><!-- /.container-fluid -->
    </section>
</div>
<?php if ($this->session->flashdata('authiniciosesion') != '' ) { ?>
<script>
$.toaster({
    settings: {
        'timeout': 6500,
    }
});
$.toaster({
    message: '<?php echo $this->session->flashdata('authiniciosesion') ?>',
    title: 'Bienvenido(a)',
    priority: 'success',

});
</script>

<?php 
$this->session->set_flashdata('authiniciosesion', '');
} ?>



<?php if ($this->session->flashdata('contrasena')) { ?>
<script>
$.toaster({
    settings: {
        'timeout': 5500,


    }
});
$.toaster({
    message: '<?php echo $this->session->flashdata('contrasena') ?>',
    title: 'Proceso completado',
    priority: 'success',

});
</script>

<?php } ?>

<?php if ($this->session->flashdata('preguntaupdate')) { ?>
<script>
$.toaster({
    settings: {
        'timeout': 5500,


    }
});
$.toaster({
    message: '<?php echo $this->session->flashdata('preguntaupdate') ?>',
    title: 'Proceso completado',
    priority: 'success',

});
</script>
<?php } ?>

<?php if ($this->session->flashdata('contrasenanew')) { ?>
<script>
$.toaster({
    settings: {
        'timeout': 5500,


    }
});
$.toaster({
    message: '<?php echo $this->session->flashdata('contrasenanew') ?>',
    title: 'Proceso completado',
    priority: 'success',

});
</script>
<?php } ?>