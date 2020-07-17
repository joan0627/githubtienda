<footer class="main-footer">
	<div class="float-right d-none d-sm-block">
		<b>Versión</b> 1.0
	</div>
	<strong>Copyright &copy; 2020.</strong> Todos los derechos reservados.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="<?php echo base_url();?>assets/plugins/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/plugins/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)

</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/plugins/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>assets/plugins/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/plugins/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url();?>assets/plugins/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/plugins/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/plugins/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script
	src="<?php echo base_url();?>assets/plugins/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
</script>
<!-- Summernote -->
<script src="<?php echo base_url();?>assets/plugins/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>assets/plugins/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
</script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/js/demo.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url();?>assets/plugins/plugins/select2/js/select2.full.min.js"></script>


<!-- fullCalendar 2.2.5 -->
<script src="<?php echo base_url();?>assets/plugins/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/plugins/fullcalendar/main.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/plugins/fullcalendar-interaction/main.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/plugins/fullcalendar-bootstrap/main.min.js"></script>




<!--Código de jquery para habilitar el botón de registro de usuario al darle check a la política de privacidad-->

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  })
</script>



<script>
	/* 
	Codigo para habilitar boton cuando se haga check en un checkbox
	$(document).ready(function () {

		$(':input[id="botonRegistroUsuario"]').prop('disabled', true);

		//Código jquery para detectar cuándo se activa el checkbox
		$("#check").change(function () {
			//Si el checkbox está seleccionado
			if ($(this).is(":checked")) {
				$(':input[id="botonRegistroUsuario"]').prop('disabled', false);
			} else {
				$(':input[id="botonRegistroUsuario"]').prop('disabled', true);
			}
		});


	});
/*
</script>


</body>

</html>
