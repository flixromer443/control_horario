<?php
//The socket functions described here are part of an extension to PHP which must be enabled at compile time by giving the --enable-sockets option to configure.
//Add extension=php_sockets.dll in php.ini and extension=sockets
//user defined rule 4
//super admin rule 14
//normal user 0

include "zklibrary.php";
echo 'Library Loaded</br>';
$zk = new ZKLibrary('192.168.1.53', 4370, 'TCP');
echo 'Requesting for connection</br>';
$zk->connect();
echo 'Connected</br>';
//$zk->disableDevice();
//echo 'disabling device</br>';
$users = $zk->getUser();
$attendace = $zk->getAttendance();
/*<td>UID</td>
    <td>ID</td>
    <td>Name</td>
    <td>Role</td>
    <td>Password</td>*/


$con=mysqli_connect("db","root","root","gestion_empleados");


                    
foreach($attendace as $user){
    //echo $user[0]."\n";
    //echo $user[1]."\n";
   // echo $user[3];
    $fecha=explode(' ',$user[3]);
    //dias
    //echo $fecha[0];
    //horas<script>
    //setTimeout(function(){location.reload()}, 10000);
    ///</script>
    //echo $fecha[1];
    foreach($users as $u ){
        if($user[0]==$u[0]){
            //se encontro un login en el reloj
            $dni=trim($u[1]);
            $query="select pd.id,wi.id_turno from personal_data as pd left join working_information as wi on pd.id=wi.id where pd.document='$dni'";
            $res=mysqli_query($con,$query);
            if(mysqli_num_rows($res)>0){
                
                //echo "se encontro el usuario del reloj en la base de datos";
                while($row = mysqli_fetch_array($res)){
                    //id usuario bd 
                    $id_user=trim($row[0]);
                    //id turno
                    $turn_id=trim($row[1]);

                    //PREGUNTO SI YA HUBO CHECKIN
                    $query="select * from temp where id_usuario='$id_user'";
                    $res=mysqli_query($con,$query);
                    //CHECKOUT
                    if(mysqli_num_rows($res)>0){

                        while($row=mysqli_fetch_array($res)){
                            //hora del reloj
                            //echo $fecha[1];
                            $query="update presentismo set hora_de_salida='$fecha[1]' where id='$row[0]'";
                            mysqli_query($con,$query);
                        }
                    }
                    
                    //CHEKIN
                    else{
                        //VALIDO QUE NO HAYA DOBLE CHEKCKIN EL MISMO DIA
                        $query='SELECT DATE_FORMAT(now(), "%Y-%m-%d");';
                        $res2=mysqli_query($con,$query);
                        $date=mysqli_fetch_array($res2);
                        //echo $date[0];
                        $query="SELECT fecha FROM presentismo WHERE id_usuario='$id_user'";
                        $res3=mysqli_query($con,$query);
                        $found=mysqli_fetch_array($res3);
                        //echo $found[0];
                        if(trim($found[0])!=trim($date[0])||empty($found)){
                            $query="select t.description,s.checkin_day,s.checkin_hour from turns as t left join schedules as s on s.turn_id=t.id where t.id='$turn_id'";
                            $res=mysqli_query($con,$query);
                            if(mysqli_num_rows($res)>0){
                                echo "se en encontro el horario en la bd";
                                while($row=mysqli_fetch_array($res)){
                                    $now=getdate();
                                    //dia
                                    if(trim($now['wday'])==$row[1]){
                                        //echo "el dia coincide";
                                        //horario de la bd
                                        $horario_bd=explode(":",$row[2]);
                                        //hh:hh
                                        //echo $horario_bd[0];
                                        //mm:mm
                                        //echo $horario_bd[1];
                                        //ss:ss
                                        //echo $horario_bd[2];
                                        
        
                                        //hora del reloj
                                        $dia=trim($fecha[0]);
                                        $horario_clock=explode(":",$fecha[1]);
                                        //hh:hh
                                        //echo $horario_clock[0];
                                        //mm:mm
                                        //echo $horario_clock[1];
                                        //ss:ss
                                        //echo $horario_clock[2];
                                        //COMPARAR HORAS
                                        switch($horario_clock){
                                            case $horario_clock[0]<=$horario_bd[0]:
                                                //echo "esta en hora";
                                                $minutos=$horario_bd[1]-$horario_clock[1];
                                                //COMPARAR MINUTOS
                                                switch($minutos){
                                                    case $minutos<=30:
                                                        //PRESENTE
                                                        
                                                        $query="INSERT INTO presentismo(id_usuario,hora_de_entrada,fecha,id_estado_turno)VALUES('$id_user','$fecha[1]','$fecha[0]',1)";
                                                        mysqli_query($con,$query);
                                                        $query="SELECT dias_presente FROM working_information WHERE id='$id_user'";
                                                        $res=mysqli_query($con,$query);
                                                        $array=mysqli_fetch_array($res);
                                                        $param=$array[0]+1;
                                                        $query="UPDATE working_information SET dias_presente='$param'";
                                                        mysqli_query($con,$query);
                                                    break;
                                                    default:
                                                        echo "llego tarde";
                                                        //tarde
                                                        $query="INSERT INTO presentismo(id_usuario,hora_de_entrada,fecha,id_estado_turno)VALUES('$id_user','$fecha[1]','$fecha[0]',3)";
                                                        mysqli_query($con,$query);
                                                        $query="SELECT llegadas_tarde FROM working_information WHERE id='$id_user'";
                                                        $res=mysqli_query($con,$query);
                                                        $array=mysqli_fetch_array($res);
                                                        $param=$array[0]+1;
                                                        $query="UPDATE working_information SET llegadas_tarde='$param'";
                                                        mysqli_query($con,$query);
                                                    break;
                                                }
                                            break;
                                            default :
                                                echo "llego tarde";
                                                $query="INSERT INTO presentismo(id_usuario,hora_de_entrada,fecha,id_estado_turno)VALUES('$id_user','$fecha[1]','$fecha[0]',3)";
                                                        mysqli_query($con,$query);
                                                        $query="SELECT llegadas_tarde FROM working_information WHERE id='$id_user'";
                                                        $res=mysqli_query($con,$query);
                                                        $array=mysqli_fetch_array($res);
                                                        $param=$array[0]+1;
                                                        $query="UPDATE working_information SET llegadas_tarde='$param'";
                                                        mysqli_query($con,$query);
                                            break;
                                        }
                                        
                                    }
                                }
                            }
                        }

                    }
                }
            }

        }
    }
    /*$query="select pd.id,wi.id_turno from personal_data as pd left join working_information as wi on pd.id=wi.id where pd.document='$dni'";
    $res=mysqli_query($con,$query);
    if(mysqli_num_rows($res)>0){
        echo "se encontro el usuario del reloj en la base de datos";
    }*/
    //echo $user[3]."\n";
    //echo $user[4]."\n";

}

//traer datos de un usuario
//$zk->getSelectedUser($uid)

//formatear en dias y horas
//decodeTime($data)

//crear usuario
//setUser($uid, $userid, $name, $password, $role)

//eliminar usuario
//$zk->deleteUser($uid)

//apagar el reloj
//$zk->shutdownDevice();

//borrar los datos de asistencia del reloj
//$zk->clearAttendance();

//borrar todos los usuarios
//$zk->clearUser();

//borar todos los datos del reloj
//$zk->clearData();

$zk->clearAttendance();
$zk->enableDevice();
$zk->disconnect();

?>

<script>
    //setTimeout(function(){location.reload()}, 6000);
</script>