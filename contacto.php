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
<link rel="stylesheet" href="./css/contacto.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img class="navbar-brand" src="./assets/img/Logo.png" alt="logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="#">Inicio <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#">Servicios</a>
                <a class="nav-link" href="./contacto.php">Contacto</a>
            </div>
        </div>
    </nav>
  <div class="container mt-5">
<h2 class="text-center font-weight-bold">Contacto</h2>
<form>
<div class="form-group">
    <label for="exampleInputEmail1">Correo Electrónico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre">
  </div>
<div class="form-group">
    <label for="nombre">Empresa</label>
    <input type="text" class="form-control" id="nombre">
  </div>
<div class="form-group">
    <label for="nombre">Teléfono</label>
    <input type="text" class="form-control" id="nombre">
  </div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Mensaje</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No soy un robot.</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>

<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- /Bootstrap -->
</body>
