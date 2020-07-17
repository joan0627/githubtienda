<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-schedule-50.png"> Agenda</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Agenda</a></li>
                        <li class="breadcrumb-item active">Calendario</li>
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
                <h3 class="card-title">Calendario</h3>


            </div> <!-- Fin Caja superior -->


            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                
                      
	
                     
                            <div class="card card-primary">
                                <div class="card-body p-0">
                                    <!-- THE CALENDAR -->
                                    <div id="calendar">

                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                      
                       
                    
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>

        </div><!-- Fin content-wrapper -->



        <!-- jQuery -->
        <script src="<?php echo base_url();?>assets/plugins/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo base_url();?>assets/plugins/plugins/jquery-ui/jquery-ui.min.js"></script>


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
        <script
            src="<?php echo base_url();?>assets/plugins/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
        </script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url();?>assets/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url();?>assets/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url();?>assets/js/demo.js"></script>



        <!-- fullCalendar 2.2.5 -->
        <script src="<?php echo base_url();?>assets/plugins/plugins/moment/moment.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/plugins/fullcalendar/main.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/plugins/fullcalendar-daygrid/main.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/plugins/fullcalendar-timegrid/main.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/plugins/fullcalendar-interaction/main.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/plugins/fullcalendar-bootstrap/main.min.js"></script>


        <!-- Page specific script -->
        <script>
        $(function() {





            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date()
            var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear()

            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendarInteraction.Draggable;

            //var containerEl = document.getElementById('external-events');
            var checkbox = document.getElementById('drop-remove');
            var calendarEl = document.getElementById('calendar');

            // initialize the external events
            // -----------------------------------------------------------------



            var calendar = new Calendar(calendarEl, {
                plugins: ['bootstrap', 'interaction', 'dayGrid', 'timeGrid'],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                'themeSystem': 'bootstrap',
                //Random default events
                events: [
                    //AQUI VAN LOS EVENTOS DENTRO DEL CALENDARIO SACAR LA ESTRUCTURA DESDE LA PLANTILLA
                ],
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar !!!
                drop: function(info) {
                    // is the "remove after drop" checkbox checked?
                    if (checkbox.checked) {
                        // if so, remove the element from the "Draggable Events" list
                        info.draggedEl.parentNode.removeChild(info.draggedEl);
                    }
                }
            });

            calendar.render();
            // $('#calendar').fullCalendar()

            /* ADDING EVENTS */
            var currColor = '#3c8dbc' //Red by default
            //Color chooser button
            var colorChooser = $('#color-chooser-btn')
            $('#color-chooser > li > a').click(function(e) {
                e.preventDefault()
                //Save color
                currColor = $(this).css('color')
                //Add color effect to button
                $('#add-new-event').css({
                    'background-color': currColor,
                    'border-color': currColor
                })
            })
            $('#add-new-event').click(function(e) {
                e.preventDefault()
                //Get value and make sure it is not null
                var val = $('#new-event').val()
                if (val.length == 0) {
                    return
                }

                //Create events
                var event = $('<div />')
                event.css({
                    'background-color': currColor,
                    'border-color': currColor,
                    'color': '#fff'
                }).addClass('external-event')
                event.html(val)
                $('#external-events').prepend(event)

                //Add draggable funtionality
                ini_events(event)

                //Remove event from text input
                $('#new-event').val('')
            })
        })
        </script>
        </body>

        </html>
