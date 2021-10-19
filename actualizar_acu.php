<?php 
    include("conexion_acu.php");
    $con=conectar();

$id_acud=$_GET['id_acud'];

$sql="SELECT * FROM acudiente WHERE id_acud='$id_acud'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Acudientes-actualizar</title>
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

                    <form action="update_acu.php" method="POST">
                    
    <input type="hidden" name="id_acud" value="<?php echo $row['id_acud']  ?>">

<label for="tipo_doc">TIPO DE DOCUMENTO</label>
    <select  type="text" class="form-control mb-3" id="tipo_doc" name="tipo_doc" value="<?php  echo $row['tipo_doc']  ?>">
        <option value="<?php echo $row['tipo_doc'] ?>"> Selecione un opción  </option>
        <option value="1">Tarjeta de identidad</option>
        <option value="2">Cedula de ciudadania</option>
        <option value="3">Cedula de extranjeria</option>
    </select>

<label for="nom_acu">NOMBRE</label>
    <input type="text" class="form-control mb-3" name="nom_acu" id="nom_acu"  value="<?php echo $row['nom_acu']  ?>">
<label for="ape_acu">APELLIDO</label>
    <input type="text" class="form-control mb-3" name="ape_acu" id="ape_acu" value="<?php echo $row['ape_acu']  ?>">

<label for="parentesco">PARENTESCO</label>    
    <select class="form-control mb-3" name="parentesco" value="<?php echo $row['dir_acu']  ?>" >
        <option value="<?php echo $row['dir_acu'] ?>">Seleccione una opción</option>
        <option value="Madre">Madre</option>
        <option value="Padre">Padre</option>
        <option value="Abuelo/a">Abuelo/a</option>
        <option value="Tio/a">Tio/a</option>
    </select>

<label for="dir_acu">DIRECCIÓN</label>    
    <input type="text" class="form-control mb-3" name="dir_acu" id="dir_acu" value="<?php echo $row['dir_acu']  ?>">

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

<label for="tel_acu">TELEFONO</label>    
    <input type="text" class="form-control mb-3" name="tel_acu" id="tel_acu" value="<?php echo $row['tel_acu']  ?>">

<label for="id_est">ID ESTUDIANTE</label>
    <input readonly type="text" class="form-control mb-3" name="id_est"  id="id_est" value="<?php echo $row['id_est']  ?>" > 

                               

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>