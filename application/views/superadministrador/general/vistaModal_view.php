<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">


    <!-- Incio seccion contenido -->
    <section class="content">





        <!-- Modal -->
        <div class="modal fade" id="modalcontrasena" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cambio de contraseña</h4>
                    </div>
                    <div class="modal-body">

                        <form role="form" action="<?php echo base_url();?>inicio/cambiocontrasena" method="post">
                            <div class="row">

                                <div class="col-md-6">
                                

                                    <div class="form-group">
                                        <label>Contraseña actual</label> <label style="color: red;"> *</label>
                                        <input type="hidden" name="idUsuario" value="<?= $idUsuario; ?>">
                                        <input type="hidden" name="nombre" value="<?= $nombre; ?>">
                                        <input type="hidden" name="nombreUsuario" value="<?= $nombreUsuario; ?>">
                                        <input name="contrasenaactual" type="password" class="form-control"
                                            placeholder="Ingrese su contraseña actual">
                                            <?php echo form_error('contrasenaactual', '<p class="text-danger">', '</p>'); ?>

                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Nueva contraseña</label> <label style="color: red;"> *</label>
                                        <input name="nuevacontrasena" type="password" class="form-control"
                                            placeholder="Ingrese su nueva contraseña">
                                            <?php echo form_error('nuevacontrasena', '<p class="text-danger">', '</p>'); ?>

                                    </div>

                                </div>


                            </div>
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Confirmar nueva contraseña</label> <label style="color: red;">*</label>
                                        <input name="confirmcontrasena" type="password" class="form-control"
                                            placeholder="Confirme su contraseña ">
                                            <?php echo form_error('confirmcontrasena', '<p class="text-danger">', '</p>'); ?>

                                    </div>


                                </div>



                            </div>
                       
                    </div>
                    <div class="text-center ">
                        <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;" type="submit" class="btn btn-success"><i class="fas fa-save"></i> Actualizar</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->



<?php if ($this->session->flashdata('contrasenaerror')) { ?>
<script>
$.toaster({
    settings: {
        'timeout': 5500,

    }
});
$.toaster({
    message: '<?php echo $this->session->flashdata('contrasenaerror') ?>',
    title: 'Error',
    priority: 'danger',

});;

</script>

<?php } ?>