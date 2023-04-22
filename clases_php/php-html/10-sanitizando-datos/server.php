<?php

$name = $_POST["nombre"];
$username = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];

$htmlentities = htmlentities($name); //CONVIERTE EN TEXTO
$addslashes = addslashes($username); //añade caracter slash
$onlywords = preg_replace("/\d/", "", $username); //QUITAS TODOS LOS NUMEROS
$onlynumbers = preg_replace("/\D/", "", $username); // SIN LETRAS
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$sanitize_int = filter_var($age, FILTER_SANITIZE_NUMBER_INT);

#https://www.php.net/manual/es/function.filter-var.php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de mi usuario</title>
</head>
<body>

    <p>Nombre:</p>
    <?= $htmlentities ?>

    <p>Username:</p>
    <?= $addslashes ?>

    <p>Username sin numeros:</p>
    <?= $onlywords ?>

    <p>Username sin letras:</p>
    <?= $onlynumbers ?>

    <p>Email:</p>
    <?= $email ?>

    <p>Edad:</p>
    <?= $sanitize_int ?>
    
</body>
</html>