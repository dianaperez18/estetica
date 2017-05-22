<?php
header("Access-Control-Allow-Origin: *");
include("conexion.php");

$nombreusuario = $_POST["nombreusuario"];
$tipo = $_POST["tipo"];
$nombreser = $_POST["nombreser"];
$nota = $_POST["nota"];



$sentencia = "INSERT INTO solicitud (nombreusuario,tipo, nombreser, nota) VALUES ('".$nombreusuario."','".$tipo."','".$nombreser."','".$nota."')";

$query = mysqli_query($conexion, $sentencia);

if($query){
    echo "La solicitud se registro correctamente ";
}else{
    echo "No fue posible registrar la solicitud";
}

mysqli_close($conexion);

?>
