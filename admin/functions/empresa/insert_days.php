<?php
  $verbo=$_POST['checkoutHoursCicle3'];
  echo json_encode($verbo);

  /*if(isset($_POST['create'])){
     //nombre del turno
   $turn_name=$_POST['turn_name'];

  echo "funciona";
   //dias
   $days=$_POST['days'];
   echo $turn_name;
   $days_separated=implode(',',$days);

   //dias rotativos
   $rotative_days=$_POST['rotative_days'];
   if(!empty($rotative_days)){
       $rotative_days_separated=implode(',',$rotative_days);      
       $rotative_days=$rotative_days_separated;
   }
   elseif(empty($rotative_days)){
     $rotative_days="-";
   }


   //horas
   $checkin_time=$_POST['checkin_time'];
   $checkout_time=$_POST['checkout_time'];

   //horas rotativas
   $checkin_time2=$_POST['checkin_time2'];
   $checkout_time2=$_POST['checkout_time2'];
  
    if(empty($checkin_time2)){
      $checkin_time2="-";
      $checkout_time2="-";
    }
    $link=mysqli_connect("db","root","root","gestion_empleados");

    $query="SELECT * FROM turns";
      $res=mysqli_query($link,$query);
      $id=mysqli_num_rows($res) + 1;
  
      $query="INSERT INTO turns(id,name,days_id,schedule_id) values('$id','$turn_name','$id','$id')";
      $res=mysqli_query($link,$query);
  
      $query="INSERT INTO days(id,weekdays1,weekdays2) values('$id','$days_separated','$rotative_days')";
      $res=mysqli_query($link,$query);
  
      $query="INSERT INTO schedules(id,checkin_time,checkout_time,checkin_time2,checkout_time2) values('$id','$checkin_time','$checkout_time','$checkin_time2','$checkout_time2')";
      $res=mysqli_query($link,$query);


   //echo json_encode($days);
  }*/















  //DELETE
  if(isset($_POST['delete'])){
    $id=trim(htmlspecialchars($_POST['id']));
    $link=mysqli_connect("db","root","root","gestion_empleados");
    $query="DELETE FROM turns WHERE id='$id'";
    $res=mysqli_query($link,$query);
    header("Location:http://localhost:8000/dashboard/admin/pages/empresa/turnos.php");
    exit();
  }




?>

    
 



