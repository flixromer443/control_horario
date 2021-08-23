<?php
    //$dia_actual= getdate();
    //echo $dia_actual['weekday'];
    //DELETE
    if(isset($_POST['eliminar'])){
      $id=trim($_POST['id']);
      echo "funciona";
      $link=mysqli_connect("db","root","root","gestion_empleados");
      $query="DELETE FROM turnos WHERE id='$id'";
      $res=mysqli_query($link,$query);
      header("Location:/pages/forms/advanced");
      exit();
    }
    //nombre
    $nombre_turno=$_POST['nombre_turno'];
    //dias
    $dias=[$_POST['lunes'],$_POST['martes'],$_POST['miercoles'],$_POST['jueves'],$_POST['viernes'],$_POST['sabado']];
    $dias_rotativos=[$_POST['lunes2'],$_POST['martes2'],$_POST['miercoles2'],$_POST['jueves2'],$_POST['viernes2'],$_POST['sabado2']];
    //horas
    $hora_inicio=$_POST['hora_inicio'];
    $hora_fin=$_POST['hora_fin'];
    $hora_inicio2=$_POST['hora_inicio2'];
    $hora_fin2=$_POST['hora_fin2'];
    $link=mysqli_connect("db","root","root","gestion_empleados");

    //tranformar los arrays en strings
    $i=0;
    foreach($dias as $d){
        if(empty($dias[$i])){
            unset($dias[$i]);
        }
        $i++;
    }
    $i=0;
    foreach($dias_rotativos as $d){
      if(empty($dias_rotativos[$i])){
          unset($dias_rotativos[$i]);
      }
      $i++;
  }
    //Dias en strings
    $dias_separados=implode(";",$dias);
    $dias_rotativos_separados=implode(";",$dias_rotativos);
    
    //echo $res;
    //echo $nombre_turno."</br>";
    //echo $dias_separados."</br>";
    //echo $dias_rotativos_separados."</br>";
    //echo $hora_inicio."</br>";
    //echo $hora_fin."</br>";
    //echo $hora_inicio2."</br>";
    //echo $hora_fin2."</br>";

    //CREATE
    $query="SELECT * FROM turnos";
    $res=mysqli_query($link,$query);
    $id=mysqli_num_rows($res) + 1;

    $query="INSERT INTO turnos(id,nombre,id_dias,id_horarios) values('$id','$nombre_turno','$id','$id')";
    $res=mysqli_query($link,$query);

    $query="INSERT INTO dias(id,dias_semana1,dias_semana2) values('$id','$dias_separados','$dias_rotativos_separados')";
    $res=mysqli_query($link,$query);

    $query="INSERT INTO horarios(id,horas_desde,horas_hasta,horas_desde2,horas_hasta2) values('$id','$hora_inicio','$hora_fin','$hora_inicio2','$hora_fin2')";
    $res=mysqli_query($link,$query);
    //$vuelta=explode(";",$dias_separados);
    //foreach($vuelta as $v){
     //7  echo $v."</br>";
    //}

?>
