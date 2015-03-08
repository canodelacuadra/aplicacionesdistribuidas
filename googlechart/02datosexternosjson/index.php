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
      
    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);
      
    function drawChart() {
      var jsonData = $.ajax({
          url: "irDatos.php",
          dataType:"json",
          async: false
          }).responseText;
          
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(jsonData);

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, {width: 400, height: 240});
    }

    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div class="container">
	<h1>Los datos provienen de un archivo json</h1>
	<div id="chart_div"></div></div>
  </body>
</html>
