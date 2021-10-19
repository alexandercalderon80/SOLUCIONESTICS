<?php
include("conexion_cursos.php");
$con=conectar();


$id_curso=$_POST['id_curso'];
$nom_curso=$_POST['nom_curso'];
$id_ano_acad=$_POST['id_ano_acad'];
$id_doc=$_POST['id_doc'];


$sql="INSERT INTO cursos VALUES('$id_curso','$nom_curso','$id_ano_acad','$id_doc')";

$query= mysqli_query($con,$sql);


if($query){
    Header("Location: cursos.php");
     
}else {
}
?>