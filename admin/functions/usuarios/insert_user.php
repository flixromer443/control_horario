<?php
    //$dia_actual= getdate();
    //echo $dia_actual['weekday'];
    if($_POST['delete']){

        $id=trim($_POST['id']);
        echo $id;
        $link=mysqli_connect("db","root","root","gestion_empleados");
        $query="DELETE FROM users WHERE id='$id'";
        $res=mysqli_query($link,$query);
        header("Location:../../pages/usuarios/nomina.php");
        exit();
    }
    
    //create
    if($_POST['create']){
        header('Acces-Control-Allow-Origin: *');
        $datos=array();
        $firstnames= htmlspecialchars($_POST['firstnames'],ENT_QUOTES);
        $surnames= htmlspecialchars($_POST['surnames'],ENT_QUOTES);
        $document= htmlspecialchars($_POST['document'],ENT_QUOTES);
        $documents_type_id= htmlspecialchars($_POST['documents_type_id'],ENT_QUOTES);
        $date_of_birth= htmlspecialchars($_POST['date_of_birth'],ENT_QUOTES);
        $place_of_birth= htmlspecialchars($_POST['place_of_birth'],ENT_QUOTES);

        $address_street= htmlspecialchars($_POST['address_street'],ENT_QUOTES);
        $address_number= htmlspecialchars($_POST['address_number'],ENT_QUOTES);
        $address_location= htmlspecialchars($_POST['address_location'],ENT_QUOTES);
        $address_postal_code= htmlspecialchars($_POST['address_postal_code'],ENT_QUOTES);
        
        $cell_phone=htmlspecialchars($_POST['prefijo'],ENT_QUOTES).htmlspecialchars($_POST['cell_phone'],ENT_QUOTES);
        $email= htmlspecialchars($_POST['email'],ENT_QUOTES);


        
        
    
        $link=mysqli_connect("db","root","root","gestion_empleados");
        $query="INSERT INTO personal_data(firstnames,surnames,document,documents_type_id,date_of_birth,place_of_birth,address_street,address_number,address_location,cell_phone,email) VALUES('$firstnames','$surnames','$document','$documents_type_id','$date_of_birth','$place_of_birth','$address_street','$address_number','$address_location','$cell_phone','$email ')";
        $res=mysqli_query($link,$query);
        
        echo json_encode($res);
    }


    

?>
