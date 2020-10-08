<?php

require './databaseConnection.php';

?>

<DOCTYPE HTML5>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Santa Fé Acrílicos</title>
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- Estilos -->
<link rel="stylesheet" href="./css/cotizaciones.css">
</head>
<body>
<div class="container mt-5">
<form method="post" action="">
  <div class="form-group">
    <label for="ladoX">Lado X</label>
    <input type="number" class="form-control" id="ladoX" oninput="LengthConverter(this.value)" onchange="LengthConverter(this.value)">
  </div>
  <div class="form-group">
    <label for="ladoY">Lado Y</label>
    <input type="number" class="form-control" id="ladoY" oninput="LengthConverter(this.value)" onchange="LengthConverter(this.value)">
  </div>
<div class="form-group">
<label for="inputState">Medida en...</label>
      <select id="inputState" class="form-control">
        <option selected>milimetros</option>
        <option>centimetros</option>
        <option>pulgadas</option>
        <option>metro</option>
      </select>
</div>
  <button class="btn btn-primary" onclick="LengthConverter(this.value)">Cotizar</button>
</form>
<p>Medida en metros: <span id="outputMeters"></span></p>
</div>
<div>



<script type="text/javascript">
function LengthConverter(sumaDeLados) {
  var ladoX = document.getElementById("ladoX");
  var ladoY = document.getElementById("ladoY");
  var ladoXaEntero = parseInt(ladoX.value);
  var ladoYaEntero = parseInt(ladoY.value);
  var sumaDeLados = ladoXaEntero + ladoYaEntero;
  document.getElementById("outputMeters").innerHTML=sumaDeLados/100;
}
</script>
</body>
