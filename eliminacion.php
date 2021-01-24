<?php


$id = $_GET['id'];

include('usuarios.php');
$alumnos = new usuarios();
$alumnos->eliminarusuario($id);
header("Location:index.php");



?>