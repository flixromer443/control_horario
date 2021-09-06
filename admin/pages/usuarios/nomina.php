<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>
<?php 
    
?>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
   <!-- daterange picker -->
   <link rel="stylesheet" href="../../../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../../../plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../../../plugins/dropzone/min/dropzone.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->','.$row['place'].
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown"><i class="fa-solid fa-trash"></i>
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Empresa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/advanced.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Turnos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Usuarios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/data.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nomina de empleados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Datos personales</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Informaci&oacute;n laboral</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Empleados</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Empleados</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nomina de empleados</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre completo</th>
                    <th>N° de documento</th>
                    <th>Area</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $link=mysqli_connect("db","root","root","gestion_empleados");
                    $sql="select u.id,pd.firstnames,pd.surnames,pd.document,u.area_id,u.state_id from users as u inner join personal_data as pd on u.personal_data_id=pd.id;";

                
                  if($stmt = mysqli_prepare($link, $sql)){
                    // Bind variables to the prepared statement as parameters
                    
                                  
                    // Set parameters
                    
                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        $result = mysqli_stmt_get_result($stmt);
                
                            /* Fetch result row as an associative array. Since the result set
                            contains only one row, we don't need to use while loop */
                           while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                            echo '<tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['surnames'].' '.$row['firstnames'].'</td>
                            <td>'.$row['document'].'</td>';
                            if($row['area_id']==0){
                              echo '<td> Sin asignar </td>';
                            }
                            if($row['state_id']==1){
                              echo '<td> <button class="btn btn-secondary" disabled>INACTIVO</button> </td>';
                            }
                            else if($row['state_id']==2){
                              echo '<td> <button class="btn btn-success" disabled>EN PLANTA</button> </td>';
                            }
                            else if($row['state_id']==3){
                              echo '<td> <button class="btn btn-danger" disabled>DE FRANCO</button> </td>';
                            }
                            else if($row['state_id']==4){
                              echo '<td> <button class="btn btn-warning" disabled>DE LICENCIA</button> </td>';
                            }
                            

                            echo '<td>
                          <form action="../../functions/usuarios/insert_user.php" method="POST">

                          <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#modal-danger'.$row['id'].'">
                          <i class="fa fa-trash"></i>
                        </button>
                              <div class="modal fade" id="modal-danger'.$row['id'].'">
                              <div class="modal-dialog">
                                <div class="modal-content bg-danger">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Eliminar turno</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Deseas eliminar permanentemente a "'.$row['surnames']." ".$row['firstnames'].'"?</p>
                                  </div>
                                  <div class="modal-footer justify-content-between">';?>
                                    <button type="button" class="btn btn-outline-ligth" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" name="delete" value="delete" class="btn btn-outline-light" >Eliminar</button> 
                                    <?php
                                  
                                    echo '</div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>';
                            echo'<a href="ficha.php?id='.$row['id'].'"><button class="btn btn-primary" type="button">
                            <i class="fa fa-eye"></i>
                        </button></a>'; 











                              echo '<input type="hidden" name="id" value='.$row['id'].'>
                          </form>                          
                          </td>';



                            
                            
                          echo '</tr>';
                           }
                           //IMPORTANTE
                           //consulta para insert
                           //insert into usuarios(nombre_completo,id_informacion_laboral,id_datos_personales) values('Felix Eduardo Romero',uuid(),uuid());

                    } else{
                        echo "Oops! Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
                    }
                    
                }
                mysqli_stmt_close($stmt);
                
                // Close connection
                mysqli_close($link);
                
                    
                  ?>
                
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <form action="../../functions/insert_user.php" id="quickForm" method="POST">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Registrar usuario</h3>
              </div>
              <div class="card-body p-0">
                
                <div class="bs-stepper">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#logins-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Datos personales</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Domicilio</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information-part2">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Contacto</span>
                      </button>
                    </div>
                  </div>
                 
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                      <div class="form-group">
                          <label>Nombre/s:</label>
                          <input type="text" name="firstnames" id="firstnames" class="form-control input"/>
                      </div>
                      <div class="form-group">
                          <label>Apellido/s:</label>
                          <input type="text" name="surnames" id="surnames" class="form-control input"/>
                      </div>
                      <div class="form-group">
                          <label>N° de documento</label>
                          <input type="number" maxlength="8" id="document" name="document"  class="form-control input"/>
                      </div>
                          <!-- select -->
                          <div class="form-group">
                            <label>Tipo</label>
                            <select name="documents_type_id" id="documents_type_id" class="custom-select" >
                            <?php
                                $link=mysqli_connect("db","root","root","gestion_empleados");
                                $sql="select * from documents_type";
 
                              if($stmt = mysqli_prepare($link, $sql)){
                                // Bind variables to the prepared statement as parameters
                                
                                              
                                // Set parameters
                                
                                // Attempt to execute the prepared statement
                                if(mysqli_stmt_execute($stmt)){
                                    $result = mysqli_stmt_get_result($stmt);
                            
                                        /* Fetch result row as an associative array. Since the result set
                                        contains only one row, we don't need to use while loop */
                                      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                          echo '<option value='.$row['id'].'>'.$row['type'].'</option>';

                                      
                                      }
                                      //IMPORTANTE
                                      //consulta para insert
                                      //insert into usuarios(nombre_completo,id_informacion_laboral,id_datos_personales) values('Felix Eduardo Romero',uuid(),uuid());

                                } else{
                                    echo "Oops! Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
                                }
                                
                            }
                            mysqli_stmt_close($stmt);
                            
                            // Close connection
                            mysqli_close($link);
                            
                                
                              ?>
                      
                            </select>
                          </div>
                          <div class="form-group">
                          <label>Sexo</label>
                          <select name="sex" id="sex" class="custom-select">
                            <option value="1">Femenino</option>
                            <option value="2">Masculino</option>

                          </select>

                          </div>
                        <div class="form-group">
                        <label>Fecha de nacimiento:</label>
                        <input type="date" name="date_of_birth" id="date_of_birth"  class="form-control input"/>
                        </div>

                        <div class="form-group">
                            <label>lugar de nacimiento</label>
                            <select class="custom-select" name="place_of_birth" id="place_of_birth" onchange="return findPostalCodes();">
                            <?php
                                $link=mysqli_connect("db","root","root","gestion_empleados");
                                $sql="select * from provinces order by province";
 
                              if($stmt = mysqli_prepare($link, $sql)){
                                // Bind variables to the prepared statement as parameters
                                
                                              
                                // Set parameters
                                
                                // Attempt to execute the prepared statement
                                if(mysqli_stmt_execute($stmt)){
                                    $result = mysqli_stmt_get_result($stmt);
                            
                                        /* Fetch result row as an associative array. Since the result set
                                        contains only one row, we don't need to use while loop */
                                      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                          echo '<option value='.$row['id'].'>'.$row['province'].'</option>';

                                      
                                      }
                                      //IMPORTANTE
                                      //consulta para insert
                                      //insert into usuarios(nombre_completo,id_informacion_laboral,id_datos_personales) values('Felix Eduardo Romero',uuid(),uuid());

                                } else{
                                    echo "Oops! Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
                                }
                                
                            }
                            mysqli_stmt_close($stmt);
                            
                            // Close connection
                            mysqli_close($link);
                            
                                
                              ?>
                      
                            </select>
                        </div>
                        <!-- /.input group -->

                        

                            <script>
                              //traer codigos postales segun provincia
                              function findPostalCodes(){
                               console.log("funcionando");
                               $.ajax("http://localhost:8000/dashboard/functions/find_postal_codes.php",{
                                type:'POST',
                                dataType:'JSON',
                                data:{
                                  'address_location':$("#address_location").val(),
                                },success:function(res){
                                  if(res.length>1){
                                    $('#postal_codes').html('<label>Codigo postal</label><select class="custom-select" name="address_postal_code" id="address_postal_code">'+res+'</select>');
                                  }
                                  else{
                                    $('#postal_codes').html('<label>Codigo postal</label><select class="custom-select" name="address_postal_code" id="address_postal_code"><option value='+res+'>CP'+res+'</option></select>');
                                  }
                                  
                                }
                                
                              })
                              }
                              function findPlacesByPostalCodes(){
                              if($('#address_postal_code').val()!=null){
                                $.ajax("http://localhost:8000/dashboard/functions/find_place_by_postal_code.php",{
                                type:'POST',
                                dataType:'JSON',
                                data:{
                                  'postal_code':$("#postal_code").val(),
                                },success:function(res){
                                  if(res.length>3){
                                    $('#places').html('<label>Localidad</label><input class="form-control input" value='+res+' disabled/>');
                                  }
                                  else{
                                    $('#places').html("");
                                  }
                                  
                                }
                                
                              })
                              }
                              }
                              
                              
                              
                            </script>



                        <button class="btn btn-primary"  type="button" onclick="stepper.next()">Siguiente</button>
                      </div>
                      
                    </div>
                    
                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                    <div class="form-group">
                            <label>Provincia</label>
                            <select class="custom-select" name="province" id="province" onchange="return findPostalCodes();">
                            <option value="1">Buenos Aires</option>
                            </select>
                        </div>
              <div class="form-group">
                <label for="municipio">Municipio</label>
                <script>
                              function showMuni(muni){
                                document.getElementById('muni').innerHTML='<label for="municipalidad">Id municipio</label><select class="custom-select" name="municipalidad" id="municipalidad" disabled ><option value='+muni+'>'+muni +'</option></select>'
                               }
                            </script>
                <select class="custom-select" name="mu" id="mu" >
                            <?php
                                $link=mysqli_connect("db","root","root","gestion_empleados");
                                $sql="select * from munis order by nombre";
 
                              if($stmt = mysqli_prepare($link, $sql)){
                                // Bind variables to the prepared statement as parameters
                                
                                              
                                // Set parameters
                                
                                // Attempt to execute the prepared statement
                                if(mysqli_stmt_execute($stmt)){
                                    $result = mysqli_stmt_get_result($stmt);
                            
                                        /* Fetch result row as an associative array. Since the result set
                                        contains only one row, we don't need to use while loop */
                                      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                          echo '<option value='.$row['id'].' onclick="showMuni('.$row['id'].')">'.$row['nombre'].'</option>';

                                      
                                      }
                                      //IMPORTANTE
                                      //consulta para insert
                                      //insert into usuarios(nombre_completo,id_informacion_laboral,id_datos_personales) values('Felix Eduardo Romero',uuid(),uuid());

                                } else{
                                    echo "Oops! Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
                                }
                                
                            }
                            mysqli_stmt_close($stmt);
                            
                            // Close connection
                            mysqli_close($link);
                            
                                
                              ?>
                      
                            </select>
                            
              </div>
              <div id="muni" class="form-group">
              </div>
              <div class="form-group">
                <label for="localidad">Localidad</label>
              <select class="custom-select" name="localidad" id="localidad" >
                            <?php
                                $link=mysqli_connect("db","root","root","gestion_empleados");
                                $sql="select * from postal_codes order by place";
 
                              if($stmt = mysqli_prepare($link, $sql)){
                                // Bind variables to the prepared statement as parameters
                                
                                              
                                // Set parameters
                                
                                // Attempt to execute the prepared statement
                                if(mysqli_stmt_execute($stmt)){
                                    $result = mysqli_stmt_get_result($stmt);
                            
                                        /* Fetch result row as an associative array. Since the result set
                                        contains only one row, we don't need to use while loop */
                                      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                          echo '<option value="'.trim($row['place']).'" onclick="showPostalCode('.$row['postal_code'].')">'.$row['place'].'</option>';

                                      
                                      }
                                      //IMPORTANTE
                                      //consulta para insert
                                      //insert into usuarios(nombre_completo,id_informacion_laboral,id_datos_personales) values('Felix Eduardo Romero',uuid(),uuid());

                                } else{
                                    echo "Oops! Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
                                }
                                
                            }
                            mysqli_stmt_close($stmt);
                            
                            // Close connection
                            mysqli_close($link);
                            
                                
                              ?>
                      
                            </select>

              </div>
                <script>
                  function showPostalCode(cp){
                    document.getElementById('cp').innerHTML='<label for="postal">Codigo postal</label><select class="custom-select" name="postal" id="postal" disabled><option value='+cp+'>CP'+cp +'</option></select>'
                  }
                  
                </script>
                        <div id="cp" class="form-group">

                        </div>
                    <div class="form-group">
                        <label>Calle:</label>
                          <input type="text" name="address_street" id="address_street"onclick="return findPlacesByPostalCodes()"  class="form-control input"/>
                      </div>
                      <div class="form-group">
                          <label>Numero:</label>
                          <input type="number" name="address_number" id="address_number"  class="form-control input"/>
                      </div>    
                      

                      <br>
                      <button class="btn btn-primary"  type="button" onclick="stepper.previous()">Anterior</button>
                      <button class="btn btn-primary"   type="button" onclick="stepper.next()">Siguiente</button>
                      
                      
                    </div>
                   
                    <div id="information-part2" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                    <div class="form-group">
                        <label>Telefono celular:</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                          <span class="input-group-text">11</span>
                      </div>
                      <input type="hidden" name="prefijo" id="prefijo" value="11">
                      <input type="number" name="cell_phone" id="cell_phone"class="form-control" placeholder="**** ****">
                    </div>
                    <div class="form-group">
                            <label>Correo electronico:</label>
                          
                          <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" name="email" id="email" class="form-control" placeholder="***@gmail.com">
                       
                      </div>
                  

                        <div class="row">
                            <div class="col-sm-3">
                              <button class="btn btn-primary" type="button" onclick="stepper.previous()">Anterior</button>
                              <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                            <div class="col-sm-6">
                              <div  id="ierror1">

                              </div>
                              <div  id="ierror2">

                              </div>
                            </div>
                        </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more examples and information about the plugin.
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        </form>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer clhtmlass="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Select2 -->
<script src="../../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../../plugins/moment/moment.min.js"></script>
<script src="../../../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- jquery-validation -->
<script src="../../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- dropzonejs -->
<script src="../../../plugins/dropzone/min/dropzone.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../plugins/jszip/jszip.min.js"></script>
<script src="../../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker2').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker3').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker4').datetimepicker({
      format: 'HH:mm'
    })
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  
  // DropzoneJS Demo Code End

  
</script>
<script>
  //validation
  
  $(function () {
  
  $.validator.setDefaults({
    submitHandler: function () {
     
      let muni=$('#municipalidad').val()
      let cp=$('#localidad').val()
      let errors=false
      if(!muni){
        errors=true
        document.getElementById('ierror1').innerHTML='<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Error</strong>, debe seleccionar un municipio<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
      }
      if(!cp){
        errors=true
        document.getElementById('ierror2').innerHTML='<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Error</strong>, debe seleccionar una localidad<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
      }
      if(!errors){
        $.ajax("http://localhost:8000/dashboard/admin/functions/usuarios/insert_user.php",{
        type:'POST',
        dataType:'JSON',
        data:{
          'firstnames':$("#firstnames").val(),
          'surnames':$("#surnames").val(),
          'document':$("#document").val(),
          'documents_type_id':$("#documents_type_id").val(),
          'sex':$('#sex').val(),
          'date_of_birth':$("#date_of_birth").val(),
          'place_of_birth':$("#place_of_birth").val(),
          'municipio':muni,
          'cp':cp,
          'address_street':$("#address_street").val(),
          'address_number':$("#address_number").val(),
          'address_postal_code':$("#address_postal_code").val(),
          'prefijo':$("#prefijo").val(),
          'cell_phone':$("#cell_phone").val(),
          'email':$("#email").val(),
          
          'create':'create'
        }
      }).then(function(res){
        console.log(res);
        if(res==1){
          document.getElementById('ierror1').innerHTML='<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Error</strong>, los datos ingresados ya existen en la base de datos<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
        }else{
          document.getElementById('ierror1').innerHTML='<div class="alert alert-success alert-dismissible fade show" role="alert">El formulario ha sido enviado con exito <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
          setTimeout(function(){location.reload()},3000)
        }
        
      });
      }
      
    }

  });
  $('#quickForm').validate({
    rules: {
      firstnames:{
       required:true,
       minlength:3
     },
     surnames:{
       required:true,
       minlength:3
     },
     document:{
       required:true,
       minlength:8,
       maxlength:8
     },
     address_street:{
       required:true,
     },
     address_number:{
       required:true,
     },
     cell_phone:{
       required:true,
       minlength:8,
       maxlength:8
     },
     email:{
       required:true,
       email:true
     }
    },
    messages: {
     firstnames: {
       required: "Este campo es obligatorio",
       minlength:"El nombre ingresado es muy corto"
     },
     surnames: {
       required: "Este campo es obligatorio",
       minlength:"El apellido ingresado es muy corto"
     },
     document: {
       required: "Este campo es obligatorio",
       minlength:"El n° de documento ingresado es muy corto",
       maxlength:"El n° de documento ingresado es muy largo"
     },
     address_street:{
       required:"Este campo es obligatorio"
     },
     address_number:{
       required:"Este campo es obligatorio"
     },
     cell_phone:{
       required:"Este campo es obligatorio",
       minlength:"El n° de telefono ingresado es muy corto",
       maxlength:"El n° de telefono ingresado es muy largo"
     },
     email:{
       required:"Este campo es obligatorio",
       email:"El correo electronico ingresado no es valido",
     }

     
    },
    errorElement: 'span',
   errorPlacement: function (error, element) {
     error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
   },
  highlight: function (element, errorClass, validClass) {
     $(element).addClass('is-invalid');
 },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>

