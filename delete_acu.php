<?php

include("conexion_acu.php");
$con=conectar();

$id_acud=$_GET['id_acud'];

$sql="DELETE FROM acudiente  WHERE id_acud='$id_acud'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: acudientes.php");
    }
?>
