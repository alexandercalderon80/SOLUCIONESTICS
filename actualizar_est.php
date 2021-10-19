<?php 
    include("conexion_est.php");
    $con=conectar();

$id_est=$_GET['id_est'];

$sql="SELECT * FROM estudiantes WHERE id_est='$id_est'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Estudiantes-actualizar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="icon" href="../dashboard/img/icon.png">
        
    </head>
     <body style="background-color: #E8F5FF;">                


<h1 align="center" > 
        <p> 
        <img src="../dashboard/img/icon.png" alt="Esta imagen es el logo del SENA" align="center" width="120" height="120"/> 
       </p>ACTUALIZACIÓN DE DATOS
    </h1>

<div style="width: 50%; margin: 20px 25%; ">
                    <form action="update_est.php" method="POST">
                    
    <input type="hidden" name="id_est" value="<?php echo $row['id_est']  ?>">

<label for="tipo_doc">TIPO DE DOCUMENTO</label>
    <select  type="text" class="form-control mb-3" id="tipo_doc" name="tipo_doc" value="<?php  echo $row['tipo_doc']  ?>">
        <option value="<?php echo $row['tipo_doc'] ?>"> Selecione un opción  </option>
        <option value="1">Tarjeta de identidad</option>
        <option value="2">Cedula de ciudadania</option>
        <option value="3">Cedula de extranjeria</option>
    </select>

<label for="nom_est">NOMBRE</label>
    <input type="text" class="form-control mb-3" name="nom_est" id="nom_est"  value="<?php echo $row['nom_est']  ?>">
<label for="ape_est">APELLIDO</label>
    <input type="text" class="form-control mb-3" name="ape_est" id="ape_est" value="<?php echo $row['ape_est']  ?>">
<label for="ed_est">EDAD</label>
    <input type="text" class="form-control mb-3" name="ed_est" id="ed_est" value="<?php echo $row['ed_est']  ?>">
<label for="fecnac_est">FECHA DE NACIMIENTO</label>    
    <input type="date" class="form-control mb-3" name="fecnac_est" id="fecnac_est" value="<?php echo $row['fecnac_est']  ?>">

<label for="gen_est">GENERO</label>    
    <select type="text" class="form-control mb-3" name="gen_est"  value="<?php echo $row['gen_est']  ?>">
        <option value="<?php echo $row['gen_est'] ?>">Seleccione una opción</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select>

<label for="dir_est">DIRECCIÓN</label>    
    <input type="text" class="form-control mb-3" name="dir_est" id="dir_est" value="<?php echo $row['dir_est']  ?>">
<label for="tel_est">TELEFONO</label>    
    <input type="text" class="form-control mb-3" name="tel_est" id="tel_est" value="<?php echo $row['tel_est']  ?>">
<label for="em_est">EMAIL</label>    
    <input type="email" class="form-control mb-3" name="em_est" id="em_est" value="<?php echo $row['em_est']  ?>">

<label for="id_pais">PAIS</label>    
    <select type="text" class="form-control mb-3" name="id_pais" id="id_pais" value="<?php echo $row['id_pais']  ?>">
        <option value="<?php echo $row['id_pais']  ?>">Seleccione una opción</option>
        <option value="1">Colombia</option>
        <option value="2">Mexico</option>
        <option value="3">EEUU</option>
    </select>

<label for="id_ciu">CIUDAD</label>    
    <select type="text" class="form-control mb-3" name="id_ciu" id="id_ciu" value="<?php echo $row['id_ciu']  ?>">
        <option value="<?php echo $row['id_ciu']  ?>">Seleccione una opción</option>
        <option value="1">Bogota</option>
        <option value="2">Girardot</option>
        <option value="3">Flandes</option>
        <option value="4">Tocaima</option>
        <option value="5">Ricaurte</option>
    </select>

<label for="id_curso">CURSO</label>    
    <select type="text" class="form-control mb-3" name="id_curso" id="id_curso" value="<?php echo $row['id_curso']  ?>">
        <option value="<?php echo $row['id_curso']  ?>">Seleccione una opción</option>
        <option value="1101">1101</option>
        <option value="1102">1102</option>
        <option value="1103">1103</option>
        <option value="1104">1104</option>
    </select>
                               

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>