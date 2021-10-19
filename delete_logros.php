<?php

include("conexion_logros.php");
$con=conectar();

$id_logro=$_GET['id_logro'];

$sql="DELETE FROM logros WHERE id_logro='$id_logro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: logros.php");
    }
?>
