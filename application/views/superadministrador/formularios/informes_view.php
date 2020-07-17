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
                                <li class="nav-item"><a class="nav-link" href="#ventas" data-toggle="tab">Ventas</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#clientes" data-toggle="tab">Clientes</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#productos"
                                        data-toggle="tab">Productos</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">


                                <div class=" active tab-pane " id="compras">
                                    <form class="form-horizontal">

                                        <div class="row">

                                            <p>Seleccione el rango de fecha en la que desea ver el informe de las
                                                compras al proveedor.</p>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">

                                                    <label>Desde</label><label style="color: red;">*</label>
                                                    <input name="desde" type="date" class="form-control ">

                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="form-group">

                                                    <label>Hasta</label><label style="color: red;">*</label>
                                                    <input name="hasta" type="date" class="form-control ">

                                                </div>

                                            </div>
                                            <div class="col-md-4  p-4">
                                                <div class="form-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button"><i
                                                                class="fas fa-search"></i> Buscar</button>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>



                                    </form>



								</div>
								
								<div class=" tab-pane " id="ventas">
                                    <form class="form-horizontal">

                                        <div class="row">

                                            <p>Seleccione el rango de fecha en la que desea ver el informe de las
                                                ventas.</p>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">

                                                    <label>Desde</label><label style="color: red;">*</label>
                                                    <input name="desde" type="date" class="form-control ">

                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="form-group">

                                                    <label>Hasta</label><label style="color: red;">*</label>
                                                    <input name="hasta" type="date" class="form-control ">

                                                </div>

                                            </div>
                                            <div class="col-md-4  p-4">
                                                <div class="form-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button"><i
                                                                class="fas fa-search"></i> Buscar</button>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>



                                    </form>



                                </div>






                                <div class=" tab-pane " id="clientes">
                                    <form class="form-horizontal">

                                        <div class="row">

                                            <p>Seleccione el rango de fecha en la que desea ver el informe de los
                                                clientes más frecuentes.</p>



                                        </div>

                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">

                                                    <label>Desde</label><label style="color: red;">*</label>
                                                    <input name="desde" type="date" class="form-control ">

                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="form-group">

                                                    <label>Hasta</label><label style="color: red;">*</label>
                                                    <input name="hasta" type="date" class="form-control ">

                                                </div>

                                            </div>
                                            <div class="col-md-4  p-4">
                                                <div class="form-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button"><i
                                                                class="fas fa-search"></i> Buscar</button>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>



                                    </form>



                                </div>
                                <!-- /.tab-pane -->


                                <div class="tab-pane" id="productos">
                                    <form class="form-horizontal">

                                        <div class="row">

                                            <p>Seleccione el rango de fecha en la que desea ver el informe de los
                                                productos más vendidos.</p>



                                        </div>

                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">

                                                    <label>Listar</label> <label style="color: red;">
                                                        *</label>
                                                    <select name="listarPor" class="form-control">
                                                        <option hidden selected>-Seleccione una opción-
                                                        </option>
                                                        <option value="1">Más vendidos</option>
                                                        <option value="2">Menos vendidos</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">

                                                    <label>Desde</label><label style="color: red;">*</label>
                                                    <input name="desde" type="date" class="form-control ">

                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="form-group">

                                                    <label>Hasta</label><label style="color: red;">*</label>
                                                    <input name="hasta" type="date" class="form-control ">

                                                </div>

                                            </div>



                                        </div>


                                    </form>


                                    <div class="row">
                                        <div class="col">

                                            <span class="input-group-btn">
                                                <button class="btn btn-success" type="button"><i
                                                        class="fas fa-search"></i> Buscar</button>
                                            </span>
                                        </div>

                                    </div>
                                </div>




                                <!-- /.tab-pane -->

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
