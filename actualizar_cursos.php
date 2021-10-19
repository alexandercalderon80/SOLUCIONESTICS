<?php 
    include("conexion_cursos.php");
    $con=conectar();

$id_curso=$_GET['id_curso'];

$sql="SELECT * FROM cursos WHERE id_curso='$id_curso'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Cusos-actualizar</title>
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
                    <form action="update_cursos.php" method="POST">
                    
    <input type="hidden" name="id_curso" value="<?php echo $row['id_curso']  ?>">


<label for="nom_curso">NOMBRE DE CURSO</label>
    <input readonly class="form-control mb-3" name="nom_curso" id="nom_curso"  value="<?php echo $row['nom_curso']  ?>">
<label for="id_ano_acad">Id año academico</label>
    <select type="text" class="form-control mb-3" name="id_ano_acad" id="id_ano_acad"  value="<?php echo $row['id_ano_acad']  ?>">   
        <option value="<?php echo $row['id_ano_acad'] ?>">Seleccione una opción</option>
        <option value="1">2020</option>
        <option value="2">2021</option>
       </select>

<label for="id_doc"> ID DOC</label>
<select type="text" class="form-control mb-3" name="id_doc" id="id_doc"  value="<?php echo $row['id_doc']  ?>">   
        <option value="0">Seleccione una opción</option>
        <option value="1">ALVARO MEJIA</option>
        <option value="2">MARTHA ALONSO</option>
        <option value="3">YESSICA GONZALES JIMENEZ</option>
        <option value="4">JAVIER LEAL</option>
        <option value="5">MARTHA DONDEL</option>
        <option value="6">FERNANDO CETARES</option>
        <option value="7">CONCEPCION GARCIA</option>
        <option value="8">STELLA TRUJILLO</option>
        <option value="9">ANABEATRIZ VANEGAS</option>
        <option value="10">NO EXISTE</option>
       </select>
                               
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>