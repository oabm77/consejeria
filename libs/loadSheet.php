<?php 
require_once 'reader.php';
$file = "data/Resultados.xlt";
$conn = new Spreadsheet_Excel_Reader();
$conn->read($file);
?>