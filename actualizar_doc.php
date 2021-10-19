<?php 
    include("conexion_doc.php");
    $con=conectar();

$id_doc=$_GET['id_doc'];

$sql="SELECT * FROM docentes WHERE id_doc='$id_doc'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Docentes-actualizar</title>
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
                    <form action="update_doc.php" method="POST">
                    
    <input type="hidden" name="id_doc" value="<?php echo $row['id_doc']  ?>">

<label for="tipo_doc">TIPO DE DOCUMENTO</label>
    <select  type="text" class="form-control mb-3" id="tipo_doc" name="tipo_doc" value="<?php  echo $row['tipo_doc']  ?>">
        <option value="<?php echo $row['tipo_doc'] ?>"> Selecione un opción  </option>
        <option value="1">Tarjeta de identidad</option>
        <option value="2">Cedula de ciudadania</option>
        <option value="3">Cedula de extranjeria</option>
    </select>
<label for="nom_doc">NOMBRE</label>
    <input type="text" class="form-control mb-3" name="nom_doc" id="nom_doc"  value="<?php echo $row['nom_doc']  ?>">
<label for="ape_doc">APELLIDO</label>
    <input type="text" class="form-control mb-3" name="ape_doc" id="ape_doc" value="<?php echo $row['ape_doc']  ?>">
<label for="gen_doc">GENERO</label>    
    <select type="text" class="form-control mb-3" name="gen_doc"  value="<?php echo $row['gen_doc']  ?>">
        <option value="<?php echo $row['gen_doc'] ?>">Seleccione una opción</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select>
<label for="dir_doc">DIRECCIÓN</label>    
    <input type="text" class="form-control mb-3" name="dir_doc" id="dir_doc" value="<?php echo $row['dir_doc']  ?>">
    <label for="ed_doc">EDAD</label>
    <input type="text" class="form-control mb-3" name="ed_doc" id="ed_doc" value="<?php echo $row['ed_doc']  ?>">
<label for="tel_doc">TELEFONO</label>    
    <input type="tel" class="form-control mb-3" name="tel_doc" id="tel_doc" value="<?php echo $row['tel_doc']  ?>">
<label for="em_doc">EMAIL</label>    
    <input type="email" class="form-control mb-3" name="em_doc" id="em_doc" value="<?php echo $row['em_doc']  ?>">
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

<label for="id_area">ÁREA</label>   
    <select type="text" class="form-control mb-3" name="id_area" id="id_area" value="<?php echo $row['id_area']  ?>">
        <option value="<?php echo $row['id_area']  ?>">Seleccione una opción</option>
        <option value="1">Matemáticas</option>
        <option value="2">Lenguaje</option>
        <option value="3">Ciencias sociales</option>
        <option value="4">Ciencias naturales</option>
        <option value="5">Inglés</option>
    </select>

<label for="id_asig">ASIGNATURA</label>  
    <select type="text" class="form-control mb-3" name="id_asig" id="id_asig" value="<?php echo $row['id_asig']  ?>">
        <option value="<?php echo $row['id_asig']  ?>">Seleccione una opción</option>
        <option value="1">Algebra</option>
        <option value="2">Geometría</option>
        <option value="3">Lectura</option>
        <option value="4">Geografía</option>
        <option value="5">Historia</option>
        <option value="6">Democracia</option>
        <option value="7">Biologia</option>
        <option value="8">Física</option>
        <option value="9">Química</option>
        <option value="10">Inglés</option>
    </select>
                               

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>