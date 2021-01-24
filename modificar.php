<?php

$id = $_GET['id'];

include('usuarios.php');

$usuario = new usuarios();

if(isset($_POST['actualizar'])){
    $usuario->actualizarusuario($_POST['nombre'],$_POST['correo'],$_POST['matricula'],$id);
    header("location:index.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $verususario = $usuario->verususario($id);
while ($fila = $verususario->fetch_assoc()) {
    ?>

<form method="post">
    <label for="nombre">Ingrese el nombre</label>
        <input type="text" name="nombre" value=<?php echo $fila['nombre'] ?>>
        <label for="matricula">Ingrese la matricula</label>
        <input type="text" name="matricula" value=<?php echo $fila['matricula'] ?> >
        <label for="correo">Ingrese el correo</label>
        <input type="text" name="correo" value=<?php echo $fila['correo'] ?>>
        <input type="submit" value="Actualizar" name="actualizar">
    </form>


<?php
}
?>


</body>
</html>