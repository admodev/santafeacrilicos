<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santa Fé Acrilicos</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Estilos -->
    <link rel="stylesheet" href="./css/home.css">
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
        <div class="row">
            <div class="col-sm m-3">
                <h1 class="font-weight-bold">Acrílicos</h1>
                <p class="text-break">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum dolores nisi tempore ullam corrupti minus omnis, laboriosam repellat, voluptate reiciendis sequi aut in sapiente aspernatur. Magni aperiam iste quaerat repellat!</p>
                <img class="my-auto" src="https://picsum.photos/300/300" alt="picsum">
                <button class="btn btn-primary w-100 mt-2" id="cotizarAcrilicos">Cotizar</button>
            </div>
            <div class="col-sm m-3">
                <h1 class="font-weight-bold">Policarbonatos</h1>
                <p text-break>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum dolores nisi tempore ullam corrupti minus omnis, laboriosam repellat, voluptate reiciendis sequi aut in sapiente aspernatur. Magni aperiam iste quaerat repellat!</p>
                <img class="my-auto" src="https://picsum.photos/300/300" alt="picsum">
                <button class="btn btn-primary w-100 mt-2" id="cotizarPolicarbonatos">Cotizar</button>
            </div>
            <div class="col-sm m-3">
                <h1 class="font-weight-bold">Alto Impácto</h1>
                <p text-break>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum dolores nisi tempore ullam corrupti minus omnis, laboriosam repellat, voluptate reiciendis sequi aut in sapiente aspernatur. Magni aperiam iste quaerat repellat!</p>
                <img class="my-auto" src="https://picsum.photos/300/300" alt="picsum">
                <button class="btn btn-primary w-100 mt-2" id="cotizarAltoImpacto">Cotizar</button>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid mt-5 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm m-3">
                    <h3 class="font-weight-bold">Dirección</h3>
                    <p>Pellegrini 2912</p>
                </div>
                <div class="col-sm m-3">
                    <h3 class="font-weight-bold">Correo Electrónico</h3>
                    <a href="mailto:santafeacrilicosrosario@hotmail.com.ar">santafeacrilicosrosario@hotmail.com.ar</a>
                </div>
                <div class="col-sm m-3">
                    <h3 class="font-weight-bold">Teléfono</h3>
                    <a href="tel:+0341-438-9092">(0341) 438 9092</a>
                </div>
            </div>
        </div>
    </div>




<script type="text/javascript">
let botonAcrilicos = document.getElementById("cotizarAcrilicos");
let botonPolicarbonatos = document.getElementById("cotizarPolicarbonatos");
let botonAltoImpacto = document.getElementById("cotizarAltoImpacto");

botonAcrilicos.onclick = function() {
    window.location.href = "cotizarAcrilicosPage.php";
}

botonPolicarbonatos.onclick = function() {
    window.location.href = "cotizarPolicarbonatosPage.php";
}

botonAltoImpacto.onclick = function() {
    window.location.href = "cotizarAltoImpactoPage.php";
}
</script>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- /Bootstrap -->
</body>

</html>
