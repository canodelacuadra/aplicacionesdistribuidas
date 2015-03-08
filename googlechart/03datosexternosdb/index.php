<!DOCTYPE html>
<html lang='es'>
  <head>
  <title>Cargando datos</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta charset='utf-8'>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/superhero/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript">
	
	//cargamos el paquete de googlechart
    google.load('visualization', '1', {'packages':['corechart']});
      
    // Ponemos a funcionar el grafico cuano la api está cargada.
    google.setOnLoadCallback(drawChart);
      //utilizamos jquery para cargar los datos 
    function drawChart() {
      var jsonData = $.ajax({
          url: "irDatos.php",
          dataType:"json",
          async: false
          }).responseText;
		  
	
    /* Se definen algunas opciones para el grafico*/
    var opciones = {
        title: 'Libros de la Biblioteca',
        hAxis: {title: 'precio/cantidad'},
        vAxis: {title: 'libros'},
        backgroundColor:'#ffffcc',
        legend:{position: 'bottom', textStyle: {color: 'blue', fontSize: 13}},
        width:900,
        height:500
    };	 
          
      // creamos nuestro dataTable json con datos que vendrán de nuestro servidor.
      var data = new google.visualization.DataTable(jsonData);

      // instanciamos y dibujamos nuestro gráfico pasándole algunas opciones.
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, opciones);
    }

    </script>
  </head>

  <body>
    <!--En este div colocamos el gráfico-->
    <div class="container">
	<h1>Los datos provienen de una base de  datos MySQL</h1>
	 <!--En este div colocamos el gráfico-->
	<div id="chart_div"></div></div>
  </body>
</html>
