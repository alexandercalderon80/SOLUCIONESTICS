<?php 
    include("conexion_asignaturas.php");
    $con=conectar();


    $sql="SELECT *  FROM asignaturas";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);



    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> INGRESAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="icon" href="../dashboard/img/icon.png">
        
    </head>
    
<body style="background-color: #E8F5FF;">
    <h1 align="center" > 
        <p> 
        <img src="../dashboard/img/icon.png" alt="Esta imagen es el logo del SENA" align="center" width="120" height="120"/> 
       </p>INGRESE DATOS
    </h1>


<div style="width: 50%; margin: 20px 25%; ">
 <form action="insertar_asignaturas.php" method="POST">

<label for="id_asig">Id asig</label>
    <input type="text" class="form-control mb-3" name="id_asig" placeholder="Id" id="id_asig">

<label for="nom_asig">Nombre asignatura</label>
    <input type="text" class="form-control mb-3" name="nom_asig" placeholder="Nombre asignatura" id="nom_asig">
<label for="int_horarias">Int horaria</label>
    <input type="text" class="form-control mb-3" name="int_horaria" placeholder="Int horaria" id="int_horaria">

<label for="est_asig">Estado</label>
<select type="text" class="form-control mb-3" name="est_asig" id="est_asig"  value="<?php echo $row['est_asig']  ?>"> 
        <option value="<?php echo $row['est_asig'] ?>">Seleccione una opción</option>
        <option value="A">Activa</option>
        <option value="I">Inactiva</option>
       </select>
<label for="id_area">Área</label>         
    <select class="form-control mb-3" name="id_area" id="id_area">
        <option value="">Seleccione una opción</option>
        <option value="1">Matemáticas</option>
        <option value="2">Lenguaje</option>
        <option value="3">Ciencias sociales</option>
        <option value="4">Ciencias naturales</option>
        <option value="5">Inglés</option>
</select>  

<div align="center">
   <input type="submit" class="btn btn-primary" name="submit"><br><br>
</div>
            </form>
               </div>

                   
</body>
</html>