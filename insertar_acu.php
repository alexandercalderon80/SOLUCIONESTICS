<?php
include("conexion_acu.php");
$con=conectar();


$id_acud=$_POST['id_acud'];
$tipo_doc=$_POST['tipo_doc'];
$nom_acu=$_POST['nom_acu'];
$ape_acu=$_POST['ape_acu'];
$parentesco=$_POST['parentesco'];
$dir_acu=$_POST['dir_acu'];
$id_pais=$_POST['id_pais'];
$id_ciu=$_POST['id_ciu'];
$tel_acu=$_POST['tel_acu'];
$id_est=$_POST['id_est'];


$sql="INSERT INTO acudiente VALUES('$id_acud','$tipo_doc','$nom_acu','$ape_acu','$parentesco','$dir_acu','$id_pais','$id_ciu', '$tel_acu', '$id_est')";
$query= mysqli_query($con,$sql);




if($query){
    Header("Location: acudientes.php");
    
}else {
}
?>