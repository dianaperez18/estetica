<?php

	header("Access-Control-Allow-Origin: *");
	include("conexion.php");

	$valor = $_POST["valor"];
		

		$sql = "SELECT * FROM servicios WHERE valor = '".$valor."'";
		$query = mysqli_query($conexion, $sql);
	
	$cantidadRegistros = mysqli_num_rows($query);
	
	if($cantidadRegistros > 0)
		{
			while($row = mysqli_fetch_array($query))//Recorrer los resultados de la consulta
			{
				echo "Tipo: ".$row["tipo"]."<br/>";
				echo "Nombre Servicio: ".$row["nombreser"]."<br/>";
				echo "Detalle: ".$row["detalle"]."<br/>";
				echo "Valor: ".$row["valor"]."<br/>"."<br/>";
				
			}
		}
		else
		{
			print "No se encontraron registros.";
		}
	

	mysqli_close($conexion);
?>