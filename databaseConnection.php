<?php

require './environmentVariables.php';

$hostname = $_ENV['HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$database = $_ENV['DATABASE_NAME'];

$db = mysqli_connect($hostname, $username, $password, $database);
