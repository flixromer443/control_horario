<?php
    $con=mysqli_connect("db","root","root","gestion_empleados");
    $query="insert into cron(nombre) values('felix')";
    mysqli_query($con,$query);
    mysqli_close($con);
?>