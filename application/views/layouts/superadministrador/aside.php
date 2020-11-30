  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-green elevation-4 ">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
          <img src="<?php echo base_url();?>assets/img/logo5.png" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span  class="brand-text font-weight-light">IntraRuk Gestión</span>
      </a>




      <!-- Sidebar -->
      <div class="sidebar  ">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">

                  <img src="<?php echo base_url();?>assets/img/avatarjoan.jpg" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
				  <a href="#" class="d-block text-center" ><?php if ($nombre= $this->session->userdata("nombre")){ echo $nombre;}   ?></a>
				  <p class="text-muted text-center"><?php if ($rol= $this->session->userdata("idRol")){ if($rol==1){ echo 'Administrador';} else{echo 'Empleado';} }   ?></p>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="<?php echo base_url();?>inicio" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-dog-house-50.png" class="nav-icon">
                          <p>

                              Inicio
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?php echo base_url();?>usuario" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-management-30.png"
                              class="nav-icon">
                          <p>

                              Usuarios
                          </p>
                      </a>
                  </li>


                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-people-30.png" class="nav-icon">
                          <p>
                              Clientes
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?php echo base_url();?>cliente" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-list-50.png"
                                      class="nav-icon">
                                  <p>Lista de clientes</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo base_url();?>cliente/listadoMascota" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-order-history-50.png"
                                      class="nav-icon">
                                  <p>Historial de mascotas </p>
                              </a>
                          </li>

                      </ul>
                  </li>






                  <li class="nav-item">
                      <a href="<?php echo base_url();?>producto" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-price-tag-50.png" class="nav-icon">
                          <p>
                              Productos
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="<?php echo base_url();?>servicio" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-barbershop-50.png" class="nav-icon">
                          <p>
                            Servicios
                          </p>
                      </a>
                  </li>


                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-bookmark-50.png" class="nav-icon">
                          <p>
                              Agenda
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?php echo base_url();?>agenda/calendario" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-calendar-50.png"
                                      class="nav-icon">
                                  <p>Calendario</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo base_url();?>agenda/historialcitasu" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-order-history-50.png"
                                      class="nav-icon">
                                  <p>Historial de citas</p>
                              </a>
						  </li>
						  
						 

                      </ul>
                  </li>







                  <li class="nav-item">
                      <a href="<?php echo base_url();?>compra" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-delivery-30.png" class="nav-icon">
                          <p>
                              Compras
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?php echo base_url();?>proveedor" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-supplier-30.png" class="nav-icon">
                          <p>
                              Proveedores
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?php echo base_url();?>venta" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-shop-30.png" class="nav-icon">
                          <p>
                              Ventas
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?php echo base_url();?>informe/generarinformesu" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-business-report-30.png"
                              class="nav-icon">
                          <p>
                              Informes
                          </p>
                      </a>
                  </li>

                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-job-30.png" class="nav-icon">
                          <p>
                              Configuración
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">

                          <li class="nav-item">
                              <a href="<?php echo base_url();?>configuracion/seguridad" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-bloquear-50.png"
                                      class="nav-icon">
                                  <p>Seguridad</p>
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="<?php echo base_url();?>configuracion/informacion" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-edit-property-50.png"
                                      class="nav-icon">
                                  <p>Datos e Información</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo base_url();?>configuracion/home" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-home-office-50.png"
                                      class="nav-icon">
                                  <p>Home</p>
                              </a>
						  </li>
						  
						  <li class="nav-item">
                              <a href="<?php echo base_url();?>agenda/disponibilidad" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-planner-50.png"
                                      class="nav-icon">
                                  <p>Disponibilidad</p>
                              </a>
                          </li>



                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="listado" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-decision-30.png" class="nav-icon">
                          <p>
                              Ayuda
                          </p>
                      </a>
                  </li>

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
