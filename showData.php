<?php 
/*
Consulta y cargue de la informacion almacenada en tablas matriz excel
*/
require("libs/reader.php");
if(isset($_POST["Documento"])) {
	$file = "data/Resultados.xlt";
	$conn = new Spreadsheet_Excel_Reader();

	$conn->read($file);
	$col= 1;
	$matrix = $conn->sheets[0]["cells"];

	$length = count($matrix); 
	$documentos = array_column($matrix, 1);
	$sRow = array_search($_POST["Documento"], $documentos)+2;
	$eRow = $sRow + 1;
	$resultado = array_map('utf8_encode', $matrix[$sRow]);

	echo json_encode($resultado);
}

?>