<?php
  //$verbo=$_POST['checkoutHoursCicle3'];
  //echo json_encode($verbo);
  if(isset($_POST['create'])){
      //echo json_encode("funciona");
      $turn_name=$_POST['turn_name'];
    
      //dias de ingreso
      $checkin_days=$_POST['checkin_days'];

      //horas de ingreso
      $checkin_hours=$_POST['checkin_hours'];

      //dias de salida
      $checkout_days=$_POST['checkout_days'];

      //horas de salida
      $checkout_hours=$_POST['checkout_hours'];
      
      if(!empty($turn_name)&&!empty($checkin_days)&&!empty($checkin_hours)&&!empty($checkout_days)&&!empty($checkin_hours)){
        $con=mysqli_connect("db","root","root","gestion_empleados");
        $query="insert into turns(description) values('$turn_name')";
        mysqli_query($con,$query);
        $query="select turn_id from schedules where checkin_day=0 and checkin_hour='00:00:00'";
        $res=mysqli_query($con,$query);
        $id=mysqli_fetch_array($res);
        $query="delete from schedules where turn_id='$id[0]'";
        mysqli_query($con,$query);
        for($i=0;$i<=count($checkin_days);$i++){
            $query="insert into schedules(turn_id,checkin_day,checkin_hour,checkout_day,checkout_hour) values('$id[0]','$checkin_days[$i]','$checkin_hours[$i]','$checkout_days[$i]','$checkout_hours[$i]')";
            mysqli_query($con,$query);

        }
        echo json_encode($id);
      }
      else{
        echo json_encode(0);
      }
      
      
   }

  //DELETE
  if(isset($_POST['delete'])){
    $id=trim(htmlspecialchars($_POST['id']));
    $link=mysqli_connect("db","root","root","gestion_empleados");
    $query="DELETE FROM turns WHERE id='$id'";
    $res=mysqli_query($link,$query);
    header("Location:../../pages/empresa/turnos.php");
    exit();
  }

?>

    
 



