<?php 
    include("conexion_logros.php");
    $con=conectar();


    $sql="SELECT *  FROM logros";
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
 <form action="insertar_logros.php" method="POST">

<label for="id_logro">Id logro</label>
    <input type="text" class="form-control mb-3" name="id_logro" placeholder="Id" id="id_logro">

<label for="nom_logro">Logro</label>
    <input type="text" class="form-control mb-3" name="nom_logro" placeholder="Nombre logro" id="nom_logro">

<label for="per_logro">Periodo</label>
<select type="text" class="form-control mb-3" name="per_logro" id="per_logro"  value="<?php echo $row['per_logro']  ?>"> 
        <option value="0">Seleccione una opción</option>
        <option value="1">Primero</option>
        <option value="2">Segundo</option>
        <option value="3">Tercero</option>
        <option value="4">Cuarto</option>
       </select>

<label for="id_ano_esc">Año escolar</label>
    <select type="text" class="form-control mb-3" name="id_ano_esc" id="id_ano_esc"  value="<?php echo $row['id_ano_esc']  ?>">   
        <option value="0">Seleccione una opción</option>
        <option value="1">2020</option>
        <option value="2">2021</option>
       </select>
                  

<div align="center">
   <input type="submit" class="btn btn-primary" name="submit"><br><br>
</div>
            </form>
               </div>

                   
</body>
</html>