<?php

require 'controller/controller.class.php';
require 'model/model.inc.php';

$veiculosArray = getWholeDB();

$veiculos = new Veiculos($veiculosArray);

$veiculosValidos = $veiculos->getValidVehicles();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <a href="view/Ex01.php">Ex01</a>
    <a href="view/Ex02.php">Ex02</a>
    <a href="view/Ex03.php">Ex03</a>
    <a href="view/Ex04.php">Ex04</a>
    <a href="view/Ex05.php">Ex05</a>
</body>
</html>