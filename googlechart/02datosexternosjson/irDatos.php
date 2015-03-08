<?php 

// Esto es un ejemplo para leer datos de un servidor y enviarlas al cliente
// Aquí leemos los datos de un archivo local en formato json

$string = file_get_contents("sampleData.json");
echo $string;

?>