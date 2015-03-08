<?php 
///https://groups.google.com/forum/#!topic/google-visualization-api/UdOFybnvFo0
// Podríamos adaptar este script a cualquier visualización de tabla
include 'conectar.php';
$consulta="SELECT * FROM libros";
$resultado=mysqli_query($conexion , $consulta);
$table = array();
$table['cols'] = array(
	/* Aqui definimos las columnas de nuestra tabla
	 * cada columna tendrá su propio array
	 * la sintaxis de cada array será:
	 * label => etiqueta de columna
	 * type => tipo de dato de columna (string, number, date, datetime, boolean)
	 */
    array('label' => 'titulo', 'type' => 'string'),
	array('label' => 'precio', 'type' => 'number'),
	array('label' => 'cantidad', 'type' => 'number')
	// etc...
);

$rows = array();
while($r = mysqli_fetch_assoc($resultado)) {
    $temp = array();
	// cada columna necesitamos colocarla en el array temp $temp 
	$temp[] = array('v' => $r['titulo']);
	$temp[] = array('v' => $r['precio']);
	$temp[] = array('v' => $r['cantidad']);
	// etc...
	
	// insertamos el array temp en el array $rows
    $rows[] = array('c' => $temp);
}

// creamos la data con los registros de datos
$table['rows'] = $rows;

// parseamos los datos como JSON
$jsonTable = json_encode($table);
// colocamos esto en el header; los dos primeros previenen que las cachés no nos molesten en IE
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
// return the JSON data
echo $jsonTable;

?>