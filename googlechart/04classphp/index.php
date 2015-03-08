<!DOCTYPE html>
<html lang='es'>
  <head>
  <title>Clase Google Chart PHP</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta charset='utf-8'>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/superhero/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  </head>
  <body>
  <div class="container">
  <h1>Google Chart <a href="https://code.google.com/p/googchart/"> ClassPHP</a></a></h1>
<p> </p>
 	
  <div class="row">
  <div class="col-md-6">
  <div style="width: 730px; margin: 20px auto; font-family:sans-serif;">
<?php
/** Include class */
include( 'GoogChart.class.php' );
//obtenemos los datos de la base de dados
include'conectar.php';
$consulta="SELECT * FROM libros";
$resultado=mysqli_query($conexion , $consulta);
/** Creamos el gráfico */
$chart = new GoogChart();
// le incorporamos los datos mediante un bucle
$data = array();
while($fila = mysqli_fetch_assoc($resultado)) {
$data[]= array($fila['titulo'] => $fila['cantidad'],);
}
var_dump($data);
// Set graph colors
$color = array(
			'#99C754',
			'#54C7C5',
			'#999999',
		);

/* # Gráfico 1 # */
echo '<h2>Gráfico Horizontal</h2>';
$chart->setChartAttrs( array(
	'type' => 'bar-horizontal',
	'title' => 'Libros de mi lbrería',
	'data' => $data,
	'size' => array( 800, 300 ),
	'color' => $color,
	));
// Print chart
echo $chart;
?>
</div>
	
	</div>
	</div>
	</div>
  </body>
</html>