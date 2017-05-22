<?php
header("Access-Control-Allow-Origin: *");
include("conexion.php");

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$email = $_POST["email"];

$sentencia = "INSERT INTO usuario (cedula, nombre, apellidos, telefono, direccion, email) VALUES ('".$cedula."','".$nombre."','".$apellidos."','".$telefono."','".$direccion."','".$email."')";

$query = mysqli_query($conexion, $sentencia);

if($query){
    echo "El usuario se registro correctamente ";
}else{
    echo "No fue posible registrar el usuario";
}

mysqli_close($conexion);

?>
