<?php
header("Access-Control-Allow-Origin: *");
include("conexion.php");

$tipo = $_POST["tipo"];
$nombreser = $_POST["nombreser"];
$detalle = $_POST["detalle"];
$valor = $_POST["valor"];


$sentencia = "INSERT INTO servicios (tipo, nombreser, detalle, valor) VALUES ('".$tipo."','".$nombreser."','".$detalle."','".$valor."')";

$query = mysqli_query($conexion, $sentencia);

if($query){
    echo "El servicio se registro correctamente ";
}else{
    echo "No fue posible registrar el servicio";
}

mysqli_close($conexion);

?>
