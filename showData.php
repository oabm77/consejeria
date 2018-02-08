<?php 
/*
Consulta y cargue de la informacion almacenada en tablas matriz excel
*/
	require "libs/loadSheet.php";
	$col= 1;
	$matrix = $conn->sheets[0]["cells"];

	$length = count($matrix); 
	$documentos = array_column($matrix, 1);
	$sRow = array_search($_POST["Documento"], $documentos)+2;
	$eRow = $sRow + 1;
	$keys = array_map('utf8_encode', $matrix[3]);
	$values = array_map('utf8_encode', $matrix[$sRow]);

	echo json_encode(array_combine($keys, $values));

?>