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
                        <a href="<?php echo base_url();?>usuario" class="small-box-footer">Más <i class="fas fa-arrow-circle-right"></i></a>
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
                        <a href="<?php echo base_url();?>producto" class="small-box-footer">Más <i class="fas fa-arrow-circle-right"></i></a>
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
                        <a href="<?php echo base_url();?>agenda/historialcitas" class="small-box-footer">Más <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3 id="valorTotalventa"></h3>

                            <p id="ventasmes">Ventas de: </p>
                            <span id="totalventas">Total de ventas: </span>

                        </div>
                        <div class="icon">
                            <i class="ion ion-cash"></i>
                        </div>
                        <a href="#" class="small-box-footer">Más <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->

                    <!-- BAR CHART -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Reporte de ventas</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="barChart"
                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->






                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">







                </section>
                <!-- right col -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
    </section>
</div>
<?php if ($this->session->flashdata('authiniciosesion')) { ?>
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

<?php } ?>



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







  