<?php
    $province_id=htmlspecialchars(trim($_POST['province_id']));
    
    $link=mysqli_connect("db","root","root","gestion_empleados");
    $sql="select postal_code from postal_codes where province_id='$province_id';";
    $res=array();
  if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    
                  
    // Set parameters
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);

            /* Fetch result row as an associative array. Since the result set
            contains only one row, we don't need to use while loop */
    $i=0;
           
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
              $res[$i]= '<option value='.$row['postal_code'].'>CP'.$row['postal_code'].'</option>';
                $i++;
          
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



    echo json_encode($res);
?>