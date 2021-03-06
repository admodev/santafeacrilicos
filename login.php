<?php

require './databaseConnection.php';

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        die("Ingrese un usuario válido.");
    }

    if (empty($password)) {
        die("Por favor ingrese una contraseña válida.");
    }

    $user_check_query = "SELECT * FROM `admins` WHERE username='$username' AND password='$password' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: ./panel.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santa Fé Acrílicos</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilosLogin.css">

</head>

<body>
    <div class="container contenedorLogin">
        <form action="./panel.php" method="post">
            <h3 class="text-center font-weight-bold">Ingreso Administradores</h3>
            <input type="text" name="username" class="form-control mt-3 mb-3" placeholder="Usuario">
            <input type="password" name="password" class="form-control mt-3 mb-3" placeholder="Contraseña">
            <div class="text-center">
                <input type="submit" value="Ingresar" class="btn btn-primary px-5 rounded-pill">
            </div>
        </form>
    </div>
</body>



<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- /Bootstrap -->

</html>