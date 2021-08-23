<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Advanced form elements</title>

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
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../../../index3.html" class="brand-link">
      <img src="../../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          
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
                Pagina web
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
                Sistema
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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Empresa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="areas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Areas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/advanced.html" class="nav-link active">
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
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Usuarios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="../tables/data.php" class="nav-link">
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
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="../calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../kanban.html" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Kanban Board
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/faq.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/contact-us.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v1
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../examples/login.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/register.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/forgot-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/recover-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v1</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v2
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../examples/login-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/register-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/forgot-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/recover-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v2</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="../examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Search
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../search/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Search</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../search/enhanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enhanced</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="../../iframe.html" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Tabbed IFrame Plugin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
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
            <h1>Turnos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Turnos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <!-- /.card -->
  
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Turnos vigentes</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Descripci&oacute;n</th>
                  <th>Dias</th>
                  <th>Horarios</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $link=mysqli_connect("db","root","root","gestion_empleados");
                  $sql="select t.id,t.name,d.weekdays1,d.weekdays2,s.checkin_time,s.checkout_time,s.checkin_time2,s.checkout_time2 from turns as t inner join days as d on d.id=t.days_id inner join schedules as s on s.id=t.schedule_id;";

              
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
                          <td>'.$row['name'].'</td>';
                          //dias
                          $dias=["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"];

                          $dias_semana1=explode(",",$row['weekdays1']);
                          echo '<td>';
                          foreach($dias_semana1 as $d){
                            echo $dias[$d]." /";
                          }
                          echo "</br>";
                          //dias rotativos
                          if($row['weekdays2']!="-"){
                            $dias_semana2=explode(",",$row['weekdays2']);
                            foreach($dias_semana2 as $d){
                              echo $dias[$d]." /";
                            }
                          }
                          echo '</td>';
                          echo '<td>'.$row['checkin_time'].' - '.$row['checkout_time'].'</br>';
                          //horas rotativas
                          if($row['checkin_time2']!="-"){
                            echo $row['checkin_time2'].' - '.$row['checkout_time2'];
                          }
                          echo'</td>';
                          echo '<td>
                          <form action="../../functions/empresa/insert_days.php" method="POST">

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
                                    <p>Deseas eliminar permanentemente el turno "'.$row['name'].'"?</p>
                                  </div>
                                  <div class="modal-footer justify-content-between">';?>
                                    <button type="button" class="btn btn-outline-ligth" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" name="delete"class="btn btn-outline-light" >Eliminar</button> 
                                    <?php
                                  
                                    echo '</div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>';
                            











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
        <!-- /.row -->
        <form  id="quickForm2">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Agregar turno</h3>
              </div>
              <div class="card-body p-0">
                
                <div class="bs-stepper">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#logins-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Descripcion</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Horarios</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information-part2">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Ciclo rotativo 1(opcional)</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information-part3">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">4</span>
                        <span class="bs-stepper-label">Ciclo rotativo 2(opcional)</span>
                      </button>
                    </div>
                  </div>
                 
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                      <div class="form-group">
                        <label>Nombre del turno:</label>
    
                          <input type="text" name="turn_name" id="turn_name" class="form-control input"/>
                        
                        <!-- /.input group -->
                      </div>
                      <button class="btn btn-primary"  type="button" onclick="stepper.next()">Siguiente</button>
                    </div>
                    
                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                      <div>
                        <label><h3>Ingreso</h3></label>
                        <br>
                        <label for="">Dia de ingreso</label>
                        <br>
                      
                        <br>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="lunes" name="dias" value="1">
                          <label for="lunes" >
                              lunes
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="martes" name="dias" value="2">
                          <label for="martes" >
                              martes
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="miercoles" name="dias" value="3">
                          <label for="miercoles" >
                              miercoles
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="jueves" name="dias" value="4">
                          <label for="jueves" >
                              jueves
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="viernes" name="dias"  value="5">
                          <label for="viernes">
                              viernes
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="sabado"  value="6" name="dias">
                          <label for="sabado">
                              sabado
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="domingo"  value="0" name="dias">
                          <label for="domingo">
                              domingo
                          </label>
                        </div>
                        <br><br>
                      <br>

                      <label for="">Hora de ingreso</label>
                      <br><br>
                      <table>
                        <tr>
                          <td>
                          <label for="aaa">lunes</label>

                          <div class="input-group date" id="timepicker" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc1hours" id="aaa" data-target="#timepicker"/>
                            <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">martes</label>

                          <div class="input-group date" id="timepicker2" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc1hours" id="aa" data-target="#timepicker2"/>
                            <div class="input-group-append" data-target="#timepicker2" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">miercoles</label>

                          <div class="input-group date" id="timepicker3" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc1hours" id="aa" data-target="#timepicker3"/>
                            <div class="input-group-append" data-target="#timepicker3" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">jueves</label>

                          <div class="input-group date" id="timepicker4" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc1hours" id="aa" data-target="#timepicker4"/>
                            <div class="input-group-append" data-target="#timepicker4" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">viernes</label>

                          <div class="input-group date" id="timepicker5" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc1hours" id="aa" data-target="#timepicker5"/>
                            <div class="input-group-append" data-target="#timepicker5" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">sabado</label>

                          <div class="input-group date" id="timepicker6" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc1hours" id="aa" data-target="#timepicker6"/>
                            <div class="input-group-append" data-target="#timepicker6" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">domingo</label>

                          <div class="input-group date" id="timepicker7" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc1hours" id="aa" data-target="#timepicker7"/>
                            <div class="input-group-append" data-target="#timepicker7" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                        </tr>
                      </table>

                      </br></br>
                      <label><h3>Salida</h3></label>
                      <br>

                      <label for="">Dia de salida</label>
                      <br><br>
                      <select class="custom-select" name="codlunes" id="codlunes" style="width: 100px;" >
                        <option>Lunes</option>
                        <option>Martes</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>martes</option>
                        <option>miercoles</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>miercoles</option>
                        <option>jueves</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>jueves</option>
                        <option>viernes</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>viernes</option>
                        <option>sabado</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>sabado</option>
                        <option>domingo</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>domingo</option>
                        <option>lunes</option>
                      </select>
                      
                        <br><br>
                      <label for="">Hora de salida</label>
                      <br><br>
                      <table>
                        <tr>
                          <td>
                          <label for="ct1">lunes</label>

                          <div class="input-group date" id="timepicker8" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc2hours" id="ct1" data-target="#timepicker8"/>
                            <div class="input-group-append" data-target="#timepicker8" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="ct2">martes</label>

                          <div class="input-group date" id="timepicker9" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc2hours" id="ct2" data-target="#timepicker9"/>
                            <div class="input-group-append" data-target="#timepicker9" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">miercoles</label>

                          <div class="input-group date" id="timepicker10" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc2hours" id="aa" data-target="#timepicker10"/>
                            <div class="input-group-append" data-target="#timepicker10" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">jueves</label>

                          <div class="input-group date" id="timepicker11" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc2hours" id="aa" data-target="#timepicker11"/>
                            <div class="input-group-append" data-target="#timepicker11" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">viernes</label>

                          <div class="input-group date" id="timepicker12" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc2hours" id="aa" data-target="#timepicker12"/>
                            <div class="input-group-append" data-target="#timepicker12" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">sabado</label>

                          <div class="input-group date" id="timepicker13" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc2hours" id="aa" data-target="#timepicker13"/>
                            <div class="input-group-append" data-target="#timepicker13" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">domingo</label>

                          <div class="input-group date" id="timepicker14" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc2hours" id="aa" data-target="#timepicker14"/>
                            <div class="input-group-append" data-target="#timepicker14" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                        </tr>
                      </table>

                      </br></br>
                      
                      
                    </br>
                      <button class="btn btn-primary"  type="button" onclick="stepper.previous()">Anterior</button>
                      <button class="btn btn-primary"   type="button" onclick="stepper.next()">Siguiente</button>
                    </div>
                    </div>
                    <div id="information-part2" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                    <div>
                        <label><h3>Ingreso</h3></label>
                        <br>
                        <label for="">Dia de ingreso</label>
                        <br>
                      
                        <br>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="cr2lunes" name="cr2" value="1">
                          <label for="cr2lunes" >
                              lunes
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="cr2martes" name="cr2" value="2">
                          <label for="cr2martes" >
                              martes
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="cr2miercoles" name="cr2" value="3">
                          <label for="cr2miercoles" >
                              miercoles
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="cr2jueves" name="cr2" value="4">
                          <label for="cr2jueves" >
                              jueves
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="cr2viernes" name="cr2"  value="5">
                          <label for="cr2viernes">
                              viernes
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="cr2sabado"  value="6" name="cr2">
                          <label for="cr2sabado">
                              sabado
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="cr2domingo"  value="0" name="cr2">
                          <label for="cr2domingo">
                              domingo
                          </label>
                        </div>
                        <br><br>
                      <br>

                      <label for="">Hora de ingreso</label>
                      <br><br>
                      <table>
                        <tr>
                          <td>
                          <label for="aaa">lunes</label>

                          <div class="input-group date" id="timepicker15" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc3hours" id="aaa" data-target="#timepicker15"/>
                            <div class="input-group-append" data-target="#timepicker15" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">martes</label>

                          <div class="input-group date" id="timepicker16" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc3hours" id="aa" data-target="#timepicker16"/>
                            <div class="input-group-append" data-target="#timepicker16" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">miercoles</label>

                          <div class="input-group date" id="timepicker17" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc3hours" id="aa" data-target="#timepicker17"/>
                            <div class="input-group-append" data-target="#timepicker17" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">jueves</label>

                          <div class="input-group date" id="timepicker18" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc3hours" id="aa" data-target="#timepicker18"/>
                            <div class="input-group-append" data-target="#timepicker18" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">viernes</label>

                          <div class="input-group date" id="timepicker19" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc3hours" id="aa" data-target="#timepicker19"/>
                            <div class="input-group-append" data-target="#timepicker19" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">sabado</label>

                          <div class="input-group date" id="timepicker20" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc3hours" id="aa" data-target="#timepicker20"/>
                            <div class="input-group-append" data-target="#timepicker20" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">domingo</label>

                          <div class="input-group date" id="timepicker21" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc3hours" id="aa" data-target="#timepicker21"/>
                            <div class="input-group-append" data-target="#timepicker21" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                        </tr>
                      </table>

                      </br></br>
                      <label><h3>Salida</h3></label>
                      <br>

                      <label for="">Dia de salida</label>
                      <br><br>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>Lunes</option>
                        <option>Martes</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>martes</option>
                        <option>miercoles</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>miercoles</option>
                        <option>jueves</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>jueves</option>
                        <option>viernes</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>viernes</option>
                        <option>sabado</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>sabado</option>
                        <option>domingo</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>domingo</option>
                        <option>lunes</option>
                      </select>
                      
                        <br><br>
                      <label for="">Hora de salida</label>
                      <br><br>
                      <table>
                        <tr>
                          <td>
                          <label for="aaa">lunes</label>

                          <div class="input-group date" id="timepicker22" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc4hours" id="aaa" data-target="#timepicker22"/>
                            <div class="input-group-append" data-target="#timepicker22" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">martes</label>

                          <div class="input-group date" id="timepicker23" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc4hours" id="aa" data-target="#timepicker23"/>
                            <div class="input-group-append" data-target="#timepicker23" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">miercoles</label>

                          <div class="input-group date" id="timepicker24" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc4hours" id="aa" data-target="#timepicker24"/>
                            <div class="input-group-append" data-target="#timepicker24" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">jueves</label>

                          <div class="input-group date" id="timepicker25" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc4hours" id="aa" data-target="#timepicker25"/>
                            <div class="input-group-append" data-target="#timepicker25" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">viernes</label>

                          <div class="input-group date" id="timepicker26" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc4hours" id="aa" data-target="#timepicker26"/>
                            <div class="input-group-append" data-target="#timepicker26" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">sabado</label>

                          <div class="input-group date" id="timepicker27" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc4hours" id="aa" data-target="#timepicker27"/>
                            <div class="input-group-append" data-target="#timepicker27" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">domingo</label>

                          <div class="input-group date" id="timepicker28" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc4hours" id="aa" data-target="#timepicker28"/>
                            <div class="input-group-append" data-target="#timepicker28" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                        </tr>
                      </table>

                      </br></br>
                      
                      
                    </br>
                      <button class="btn btn-primary" type="button" onclick="stepper.previous()">Anterior</button>
                      <button class="btn btn-primary"   type="button" onclick="stepper.next()">Siguiente</button>
                    </div>
                    </div>
                    <div id="information-part3" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                    <div>
                        <label><h3>Ingreso</h3></label>
                        <br>
                        <label for="">Dia de ingreso</label>
                        <br>
                      
                        <br>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="cr3lunes" name="cr3" value="1">
                          <label for="cr3lunes" >
                              lunes
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="cr3martes" name="cr3" value="2">
                          <label for="cr3martes" >
                              martes
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="cr3miercoles" name="cr3" value="3">
                          <label for="cr3miercoles" >
                              miercoles
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="cr3jueves" name="cr3" value="4">
                          <label for="cr3jueves" >
                              jueves
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="cr3viernes" name="cr3"  value="5">
                          <label for="cr3viernes">
                              viernes
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="cr3sabado"  value="6" name="cr3">
                          <label for="cr3sabado">
                              sabado
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="cr3domingo"  value="0" name="cr3">
                          <label for="cr3domingo">
                              domingo
                          </label>
                        </div>
                        <br><br>
                      <br>

                      <label for="">Hora de ingreso</label>
                      <br><br>
                      <table>
                        <tr>
                          <td>
                          <label for="aaa">lunes</label>

                          <div class="input-group date" id="timepicker29" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc5hours" id="aaa" data-target="#timepicker29"/>
                            <div class="input-group-append" data-target="#timepicker29" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">martes</label>

                          <div class="input-group date" id="timepicker30" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc5hours" id="aa" data-target="#timepicker30"/>
                            <div class="input-group-append" data-target="#timepicker30" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">miercoles</label>

                          <div class="input-group date" id="timepicker31" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc5hours" id="aa" data-target="#timepicker31"/>
                            <div class="input-group-append" data-target="#timepicker31" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">jueves</label>

                          <div class="input-group date" id="timepicker32" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc5hours" id="aa" data-target="#timepicker32"/>
                            <div class="input-group-append" data-target="#timepicker32" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">viernes</label>

                          <div class="input-group date" id="timepicker33" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc5hours" id="aa" data-target="#timepicker33"/>
                            <div class="input-group-append" data-target="#timepicker33" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">sabado</label>

                          <div class="input-group date" id="timepicker34" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc5hours" id="aa" data-target="#timepicker34"/>
                            <div class="input-group-append" data-target="#timepicker34" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">domingo</label>

                          <div class="input-group date" id="timepicker35" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc5hours" id="aa" data-target="#timepicker35"/>
                            <div class="input-group-append" data-target="#timepicker35" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                        </tr>
                      </table>

                      </br></br>
                      <label><h3>Salida</h3></label>
                      <br>

                      <label for="">Dia de salida</label>
                      <br><br>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>Lunes</option>
                        <option>Martes</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>martes</option>
                        <option>miercoles</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>miercoles</option>
                        <option>jueves</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>jueves</option>
                        <option>viernes</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>viernes</option>
                        <option>sabado</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>sabado</option>
                        <option>domingo</option>
                      </select>
                      <select class="custom-select" name="place_of_birth" id="place_of_birth" style="width: 100px;" >
                        <option>domingo</option>
                        <option>lunes</option>
                      </select>
                      
                        <br><br>
                      <label for="">Hora de salida</label>
                      <br><br>
                      <table>
                        <tr>
                          <td>
                          <label for="aaa">lunes</label>

                          <div class="input-group date" id="timepicker36" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc6hours" id="aaa" data-target="#timepicker36"/>
                            <div class="input-group-append" data-target="#timepicker36" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">martes</label>

                          <div class="input-group date" id="timepicker37" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc6hours" id="aa" data-target="#timepicker37"/>
                            <div class="input-group-append" data-target="#timepicker37" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">miercoles</label>

                          <div class="input-group date" id="timepicker38" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc6hours" id="aa" data-target="#timepicker38"/>
                            <div class="input-group-append" data-target="#timepicker38" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">jueves</label>

                          <div class="input-group date" id="timepicker39" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc6hours" id="aa" data-target="#timepicker39"/>
                            <div class="input-group-append" data-target="#timepicker39" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">viernes</label>

                          <div class="input-group date" id="timepicker40" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc6hours" id="aa" data-target="#timepicker40"/>
                            <div class="input-group-append" data-target="#timepicker40" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">sabado</label>

                          <div class="input-group date" id="timepicker41" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc6hours" id="aa" data-target="#timepicker41"/>
                            <div class="input-group-append" data-target="#timepicker41" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                          <td>
                          <label for="aa">domingo</label>

                          <div class="input-group date" id="timepicker42" data-target-input="nearest" style="width:100px">
                            <input type="text" class="form-control datetimepicker-input" name="ctc6hours" id="aa" data-target="#timepicker42"/>
                            <div class="input-group-append" data-target="#timepicker42" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                          </td>
                        </tr>
                      </table>

                      </br></br>
                      
                      
                    </br>
                      <button class="btn btn-primary" type="button" onclick="stepper.previous()">Anterior</button>
                      <button type="submit" name="create" id="create" value="create" class="btn btn-primary">Enviar</button>
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
        
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
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
<script src="../../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
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
<!-- jquery-validation -->
<script src="../../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
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
    $('#timepicker5').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker6').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker7').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker8').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker9').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker10').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker11').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker12').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker13').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker14').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker15').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker16').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker17').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker18').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker19').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker20').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker21').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker22').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker23').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker24').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker25').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker26').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker27').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker28').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker29').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker30').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker31').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker32').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker33').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker34').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker35').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker36').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker37').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker38').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker39').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker40').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker41').datetimepicker({
      format: 'HH:mm'
    })
    $('#timepicker42').datetimepicker({
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

  //validation
 
</script>
<script>
   $(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      var errors=false
      //Validacion de dias
      var checkboxes = document.getElementsByName('dias');
      var DaysSelected = [];
      for (var i=0; i<checkboxes.length; i++) {
          if (checkboxes[i].checked) {
              DaysSelected.push(checkboxes[i].value);
          }
      }
      if(DaysSelected.length<3){
        errors=true
        alert("debe selecionar al menos 3 dias");
      }
      //Validacion de ciclo rotativo2
      var checkboxes = document.getElementsByName('cr2');
      var RotativeDaysSelected2 = [];
      for (var i=0; i<checkboxes.length; i++) {
          if (checkboxes[i].checked) {
              RotativeDaysSelected2.push(checkboxes[i].value);
          }
      }

      

      if(RotativeDaysSelected2.length>0){
        if(RotativeDaysSelected2.length<3){
          errors=true
          alert("debe seleccionar al menos 3 dias rotativos")
        }
      }
      //Validacion de ciclo rotativo3
      var checkboxes = document.getElementsByName('cr3');
      var RotativeDaysSelected3 = [];
      for (var i=0; i<checkboxes.length; i++) {
          if (checkboxes[i].checked) {
              RotativeDaysSelected3.push(checkboxes[i].value);
          }
      }

      

      if(RotativeDaysSelected3.length>0){
        if(RotativeDaysSelected3.length<3){
          errors=true
          alert("debe seleccionar al menos 3 dias rotativos")
        }
      }

      //tomar horas
      var checkboxes = document.getElementsByName('ctc1hours');
      var checkinHoursCicle1 = [];
      for (var i=0; i<checkboxes.length; i++) {
            if(checkboxes[i].value!=""){
              checkinHoursCicle1.push(checkboxes[i].value);
            }
           
      }
      var checkboxes = document.getElementsByName('ctc2hours');
      var checkoutHoursCicle1 = [];
      for (var i=0; i<checkboxes.length; i++) {
            if(checkboxes[i].value!=""){
              checkoutHoursCicle1.push(checkboxes[i].value);
            }
           
      }
      //horas ciclo 2
      var checkboxes = document.getElementsByName('ctc3hours');
      var checkinHoursCicle2 = [];
      for (var i=0; i<checkboxes.length; i++) {
            if(checkboxes[i].value!=""){
              checkinHoursCicle2.push(checkboxes[i].value);
            }
           
      }
      var checkboxes = document.getElementsByName('ctc4hours');
      var checkoutHoursCicle2 = [];
      for (var i=0; i<checkboxes.length; i++) {
            if(checkboxes[i].value!=""){
              checkoutHoursCicle2.push(checkboxes[i].value);
            }
           
      }
      //horas ciclo 3
      var checkboxes = document.getElementsByName('ctc5hours');
      var checkinHoursCicle3 = [];
      for (var i=0; i<checkboxes.length; i++) {
            if(checkboxes[i].value!=""){
              checkinHoursCicle3.push(checkboxes[i].value);
            }
           
      }
      var checkboxes = document.getElementsByName('ctc6hours');
      var checkoutHoursCicle3 = [];
      for (var i=0; i<checkboxes.length; i++) {
            if(checkboxes[i].value!=""){
              checkoutHoursCicle3.push(checkboxes[i].value);
            }
           
      }
      

      
      

      /*
      //validacion horario rotativo
      var CheckInTime=$('#checkin_time2').val()
      var CheckOutTime=$('#checkout_time2').val()
      
      if(CheckInTime.length>0||CheckOutTime.length>0){
        if(CheckInTime.length<3){
          errors=true
          alert("debe seleccionar un horario de ingreso")
        }
        if(CheckOutTime.length<3){
          errors=true
          alert("debe seleccionar un horario de salida")
        }
      

      }*/
     // if(!errors){
        //alert(DaysSelected)
        $.ajax("http://localhost:8000/dashboard/admin/functions/empresa/insert_days.php",{
        type:'POST',
        dataType:'JSON',
        data:{
          'turn_name':$("#turn_name").val(),
          //dias
          'days':DaysSelected,
          'rotative_cicle2':RotativeDaysSelected2,
          'rotative_cicle3':RotativeDaysSelected3,

          //horas
          'checkinHoursCicle1':checkinHoursCicle1,
          'checkoutHoursCicle1':checkoutHoursCicle1,
          
          //ciclo2
          'checkinHoursCicle2':checkinHoursCicle2,
          'checkoutHoursCicle2':checkoutHoursCicle2,
          //ciclo3
          'checkinHoursCicle3':checkinHoursCicle3,
          'checkoutHoursCicle3':checkoutHoursCicle3,
          //dias rotativos
          //'rotative_days':RotativeDaysSelected,
          
          //horas
          //'checkin_time':$("#checkin_time").val(),
          //'checkout_time':$("#checkout_time").val(),
          //horas rotativas
          //'checkin_time2':$("#checkin_time2").val(),
          //'checkout_time2':$("#checkout_time2").val(),
          //verbo*/
          'create':$("#create").val(),

        }
      }).then(function(res){
        console.log(res);
        //location.reload();
      })
      alert(DaysSelected);
      alert(RotativeDaysSelected2);
      alert(RotativeDaysSelected3);


     
      //}

      
        

    

      


    }
  });
  $('#quickForm2').validate({
    rules: {
      turn_name:{
        minlength:3,
        required:true
      },
      
      
     
      
    },
    messages: {
      turn_name: {
        required: "Por favor ingrese el nombre del turno",
        minlength: "El nombre ingresado es muy corto",
      },
     
     
     
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