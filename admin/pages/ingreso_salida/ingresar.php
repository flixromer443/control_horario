<?php
    $document=trim($_POST['document']);
    $password=$_POST['password'];
    $now=getdate();
    $day_found=false;
    //echo $now['wday'];
    //return 0=se equivoco de dias
    //return 1=presente
    //return 2=llego tarde
    
        $link=mysqli_connect("db","root","root","gestion_empleados");
        //primer consulta
        $query="select id from personal_data where document='$document';";

   
        $res=mysqli_query($link,$query);
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
                //echo $row['id']."\n";
                $id=trim($row['id']);
                
                $query="select id_turno from working_information where id='$id'";
                $res=mysqli_query($link,$query);
                while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
                    //echo $row['id_turno']."\n";
                    $turn_id=trim($row['id_turno']);

                    $query="select d.weekdays1, s.checkin_time,s.checkout_time from turns as t left join days as d on d.id=t.id left join schedules as s on s.id=t.id where t.id='$turn_id'";
                    $res=mysqli_query($link,$query);
                    while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
                        $days_separated=explode(",",$row['weekdays1']);
                        $checkin_separated=explode(":",$row['checkin_time']);
                        
                        //comparar dias
                        $days_count=count($days_separated);
                        foreach($days_separated as $d){
                            $now=getdate();
                            $day=trim($now['wday']);
                            $hour=trim($now['hours']);
                            $minutes=trim($now['minutes']);
                            $validate_minutes=false;
                            if($day==$d){
                                //echo "es el dia correcto";
                                //comparar horas
                                switch($hour){
                                    case $hour<$checkin_separated[0]:
                                        echo json_encode(1);
                                        exit();
                                        //echo "llego bien";
                                        break;

                                    case $hour==$checkin_separated[0]:
                                        //validar minutos(tolerancia de media hora)
                                        //echo "hay que validar los minutos";
                                        switch($minutes){
                                            case $minutes<=$checkin_separated[1]:
                                                //echo json_encode("llego en tiempo y forma");
                                                //return 1;
                                                echo json_encode(1);
                                                exit();
                                                break;
                                            case $minutes-$checkin_separated[1] <=30:
                                                $calculo=$minutes-$checkin_separated[1];
                                                echo json_encode(1); 
                                                exit();      
                                                //echo json_encode('llego con una demora tolerable de '.$calculo.'minutos');             
                                                //return 1;
                                                break;
                                            case $minutes-$checkin_separated[1]>30:
                                                //echo json_encode("llego tarde");
                                                echo json_encode(2);
                                                exit();
                                                //return 2;
                                                break;
                                            }
                                      

                                        break;
                                    case $hour>$checkin_separated[0]:
                                        //echo json_encode("Llego tarde");
                                        echo json_encode(2);
                                        exit();
                                        break;    
                                }
                                   
                                   
                                
                            }
                            $days_count--;
                            //echo $days_count;
                            if($days_count==0){
                                 echo json_encode(0);
                                 exit;  
                            }
                        }
                    }
                }
            }
        }
      
    

   

?>