<?php
    $form=$_POST['form'];
    $user_id=$_POST['user_id'];
    if(trim($form)=='contacto'){

        $cell_phone=$_POST['cell_phone'];
        $email=$_POST['email'];
        $con=mysqli_connect("db","root","root","gestion_empleados");
        $query="select id from personal_data where id!='$user_id' and cell_phone='$cell_phone'";
        $res=mysqli_query($con,$query);
        if(mysqli_num_rows($res)>0){
            echo json_encode(1);
        }

        else{
            $query="select id from personal_data where id!='$user_id' and email='$email'";
            $res=mysqli_query($con,$query);
            if(mysqli_num_rows($res)>0){
                echo json_encode(1);
            }else{
                $query="UPDATE personal_data SET cell_phone='$cell_phone', email='$email' WHERE id='$user_id'";
                mysqli_query($con,$query);
                echo json_encode(0);
            }
        }
        
    }
?>