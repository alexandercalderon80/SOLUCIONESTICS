<?php
include("conexion_doc.php");
$con=conectar();


$id_doc=$_POST['id_doc'];
$tipo_doc=$_POST['tipo_doc'];
$nom_doc=$_POST['nom_doc'];
$ape_doc=$_POST['ape_doc'];
$gen_doc=$_POST['gen_doc'];
$dir_doc=$_POST['dir_doc'];
$ed_doc=$_POST['ed_doc'];
$tel_doc=$_POST['tel_doc'];
$em_doc=$_POST['em_doc'];
$id_pais=$_POST['id_pais'];
$id_ciu=$_POST['id_ciu'];
$id_area=$_POST['id_area'];
$id_asig=$_POST['id_asig'];


$sql="INSERT INTO docentes VALUES('$id_doc','$tipo_doc','$nom_doc','$ape_doc','$gen_doc','$dir_doc','$ed_doc', '$tel_doc','$em_doc','$id_pais','$id_ciu','$id_area', '$id_asig')";

$query= mysqli_query($con,$sql);


if($query){
    Header("Location: docentes.php");
     
}else {
}
?>