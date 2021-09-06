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
  <!-- Navbar -->
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
      <?php
        $id=$_GET['id'];
        $con=mysqli_connect("db","root","root","gestion_empleados");
        $query="SELECT * FROM personal_data WHERE id='$id'";
        $res=mysqli_query($con,$query);
        $array=mysqli_fetch_array($res);

        $consulta="SELECT * FROM turns";
        $respuesta=mysqli_query($con,$consulta);
      ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $array[5].' '.$array[6];?></h1>
            <br>
            
            <div class="row">
                <div class="col-sm-4">
                  <a href="ficha.php?">
                    <button class="btn btn-primary" type="button">Descargar<i class="fa fa-download"></i>
                    </button>
                  </a>
                </div>
                <div class="col-sm-6">
                              <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Asignar turno y area <i class="fa fa-clock"></i>
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <label for="turno">Turno</label><br>
                              <select name="" id="turno" class="form-select">
                                <?php
                                    while($row=mysqli_fetch_array($respuesta)){
                                      echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                                    }
                                ?>
                                
                              </select>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                          </div>
                      </div> 



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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Informaci&oacute;n laboral</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Fecha de contrataci&oacute;n</th>
                      <th>Dias presente</th>
                      <th>Dias Ausente</th>
                      <th>Llegadas tarde</th>
                      <th>Licencias</th>
                      <th>Turno</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $query="SELECT * FROM working_information WHERE id='$id'";
                      $res=mysqli_query($con,$query);
                      $array=mysqli_fetch_array($res);
                      ?>
                    <tr>
                      <td><?php echo $array[0]; ?></td>
                      <td><?php echo $array[1]; ?></td>
                      <td><?php echo $array[3]; ?></td>
                      <td><?php echo $array[4]; ?></td>
                      <td><?php echo $array[5]; ?></td>
                      <td><?php echo $array[6]; ?></td>
                      <td><?php if($array[7]!=0){ echo $array[7];}else{echo "sin asignar";} ?></td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!--<form action="../../functions/insert_user.php" id="quickForm" method="POST">-->
        <div class="row">
          <div class="col-md-6">
            <div class="card card-default">
              
              <div class="card-body p-0">
              <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Datos personales</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
                 $query="SELECT * FROM personal_data WHERE id='$id'";
                 $res=mysqli_query($con,$query);
                 $array=mysqli_fetch_array($res);
              ?>
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombres</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $array[5];?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Apellidos</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $array[6];?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sexo</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="Masculino" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">N° de documento</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $array[0];?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Fecha y lugar de nacimiento</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $array[3].' - '.$array[4];?>" disabled>
                  </div>
                </div>
                <!-- /.card-body -->

               
              </form>
            </div>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
            <div class="card card-default">
              
              <div class="card-body p-0">
              <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Domicilio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Partido</label>
                    <?php
                      $query="select nombre from munis where id='$array[1]'";
                      $res2=mysqli_query($con,$query);
                      $array2=mysqli_fetch_array($res2);
                      $query="select postal_code from postal_codes  where place='$array[10]'";
                      $res3=mysqli_query($con,$query);
                      $array3=mysqli_fetch_array($res3);
                    ?>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $array2[0];?>" disabled >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Localidad</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $array[10];?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Codigo postal</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="CP<?php echo $array3[0];?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Domicilio</label>
                    <div class="row">
                        <div class="col-md-5">
                        <label for="">Calle</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="Zapiola"disabled>
                        </div>
                        <div class="col-md-5">
                        <label for="">Altura</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="946" disabled>
                        </div>
                        
                    </div>

                   
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-12">
              
              <div class="card-body p-0">
              <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Contacto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form3">
                <div class="card-body">
                <div class="form-group">
                        <label>Telefono celular:</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                          <span class="input-group-text">11</span>
                      </div>
                      <input type="hidden" name="user_id" id="user_id" value="<?php echo $id;?>">
                      <input type="tel" name="cell_phone" id="cell_phone" value="<?php echo $array[7];?>" class="form-control" placeholder="**** ****" disabled>
                    </div>
                    <div class="form-group">
                            <label>Correo electronico:</label>
                          
                          <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" name="email" id="email" class="form-control" value="<?php echo $array[2];?> " placeholder="***@gmail.com" disabled>
                    </div>
                    <div class="form-group">
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch3" onclick="enableForms(3)">
                      <label class="custom-control-label" for="customSwitch3">Editar</label>
                    </div>
                    </div>
                    <div class="form-group" >
                        <div class="row">
                        <div class="col-sm-2" id="submit3">

                        </div>
                        <div class="col-sm-10" id="message3">
                          
                        </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.card-body -->

                
              </form>
            </div>
              </div>
              <script>
                function enableForms(checkbox){
                  if(checkbox==3){
                    let email=document.getElementById('email').disabled;
                    let cell_phone=document.getElementById('cell_phone').disabled;
                    if(email==true && cell_phone==true){
                      document.getElementById('email').disabled=false;
                      document.getElementById('cell_phone').disabled=false;
                      document.getElementById("submit3").innerHTML='<button type="submit" id="btn3"  class="btn btn-primary">Enviar</button>';

                    }else{
                      email=document.getElementById('email').disabled=true;
                      document.getElementById('cell_phone').disabled=true;
                      document.getElementById("submit3").innerHTML='';

                    }
                  }
                }
              </script>
                           
               
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!--</form>-->
        <!-- /.row -->
        <!--INFORMACION LABORAL-->
        
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Historial de asistencia</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Hora de entrada</th>
                    <th>Hora de salida</th>
                    <th>Estado</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                   
                    $sql="SELECT * FROM presentismo WHERE id_usuario='$id'";
                
                  if($stmt = mysqli_prepare($con, $sql)){
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
                            <td>'.$row['fecha'].'</td>
                            <td>'.$row['hora_de_entrada'].'</td>
                            <td>'.$row['hora_de_salida'].'</td>';
                            if($row['id_estado_turno']==1){
                              echo '<td> Presente </td>';
                            }
                            if($row['id_estado_turno']==2){
                              echo '<td>Ausente</td>';
                            }
                            else if($row['id_estado_turno']==3){
                              echo '<td>Tarde </td>';
                            }
                            
                            
                            
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
                mysqli_close($con);
                
                    
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

                  $(function () {
                  $.validator.setDefaults({
                    submitHandler: function () {
                    
                        $.ajax("http://localhost:8000/dashboard/admin/functions/usuarios/update_personal_data.php",{
                        type:'POST',
                        dataType:'JSON',
                        data:{
                          'cell_phone':$("#cell_phone").val(),
                          'email':$('#email').val(),
                          'user_id':$('#user_id').val(),
                          'form':'contacto'
                        }
                      }).then(function(res){
                        console.log(res)
                        if(res===0){
                          document.getElementById('customSwitch3').checked=false
                          document.getElementById('email').disabled=true
                          document.getElementById('cell_phone').disabled=true
                          document.getElementById('customSwitch3').disabled=true
                          document.getElementById('btn3').disabled=true
                          document.getElementById('message3').innerHTML='<div class="alert alert-success alert-dismissible fade show" role="alert">El formulario ha sido enviado con exito<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
                          setTimeout(function(){ location.reload()}, 2000);

                        }else{
                          document.getElementById('message3').innerHTML='<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Error</strong>, los datos ingresados coinciden con los de otro usuario<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
                        }
                      })
                      
                    }
                  });
                  $('#form3').validate({
                    rules: {
                        cell_phone:{
                        minlength:8,
                        maxlength:8,
                        required:true
                        },
                        email:{
                          required:true,
                          email:true
                        }
                    },
                    messages: {
                      cell_phone: {
                        minlength:'El n° de telefono ingresado es muy corto',
                        maxlength:'El n° de telefono ingresado es muy corto', 
                        required: 'Ingrese un n° de telefono sin prefijo',
                      },
                      email:{
                        required:'Ingrese un correo electronico',
                        email:'Ingrese un correo electronico valido'
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

