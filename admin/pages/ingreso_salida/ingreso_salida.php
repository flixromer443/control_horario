<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- SweetAlert2 -->
   <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Bienvenido</p>

      <form action="ingresar.php" id="quickForm" method="post">
        <div class="input-group mb-3">
          <input type="number"  name="document" id="document" class="form-control" placeholder="N° de documento">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password"class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div id="checkinMessage"></div>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
              
             
          
        

            

          

            
          </div>
              <!-- /.card -->
            </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- jquery-validation -->
<script src="../../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Toastr -->
<script src="../../plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>



<script>
  //validation
  $(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      $.ajax("http://localhost:8000/dashboard/admin/pages/ingreso_salida/ingresar.php",{
        type:'POST',
        dataType:'JSON',
        data:{
          'document':$("#document").val(),
        },
        //0 dia equivocado
        //1 presente
        //2 tarde
        success: function(res){
          if(res==0){
          $('#checkinMessage').html('<div class="row"><div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Holy guacamole!</strong> Lo sentimos pero te equivocaste de dia, hoy no ten&eacute;s que trabajar<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

          }
          else if(res==1){
            $('#checkinMessage').html('<div class="row"><div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Holy guacamole!</strong> Te deseamos que tengas una bunea jornada<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          }
          else if(res==2){
            $('#checkinMessage').html('<div class="row"><div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Holy guacamole!</strong> Llegaste tarde, por favor prest&aacute; mas atencion a tu horario de trabajo<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          }
        }
      
              
      }).then(function(res){
        console.log(res);
        
        
      });
    
      //alert( "Usuario cargado exitosamente" );

    }

  });
  $('#quickForm').validate({
    rules: {
     document:{
       required:true,
       minlength:8,
       maxlength:8
     },
    },
    messages: {
     document: {
       required: "Este campo es obligatorio",
       minlength:"El n° de documento ingresado es muy corto",
       maxlength:"El n° de documento ingresado es muy largo"
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