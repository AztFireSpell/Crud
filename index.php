<?php
include('usuarios.php');
$alumnos = new usuarios();
$resultado = $alumnos -> verusuarios();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Registro de alumnos</h1>

    <form method="post">
    <label for="nombre">Ingrese el nombre</label>
        <input type="text" class="form form-control" name="nombre" >
        <label for="matricula">Ingrese la matricula</label>
        <input type="text" class="form form-control" name="matricula" >
        <label for="correo">Ingrese el correo</label>
        <input type="text" class="form form-control" name="correo" >
        <input type="submit" class="btn btn-success" value="Registrar" name="registrar">
    </form>


    <h1>Mostrando usuarios</h1>


    <table class="table table-dark">
    <thead>
    <tr>
      <th scope="col">Eliminar</th>
      <th scope="col">Editar</th>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Matricula</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>
  <tbody>

    <?php
            while ($fila = $resultado->fetch_assoc()) {
    ?>
    <tr>
    <td><a href="eliminacion.php?id=<?php echo $fila['id']?>" class="btn btn-danger">X</a></td>
    <td><a href="modificar.php?id=<?php echo $fila['id']?>" class="btn btn-primary">Editar</a></td>
    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['nombre']; ?></td>
    <td><?php echo $fila['matricula']; ?></td>
    <td><?php echo $fila['correo']; ?></td>
    </tr>
    


                <?php
            }
    ?>

</tbody>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

<?php

if(isset($_POST['registrar'])){
    $alumnos->registrousuario($_POST['nombre'],$_POST['correo'],$_POST['matricula']);
    
}

?>