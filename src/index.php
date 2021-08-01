<?php

require 'controller/controller.class.php';
require 'model/model.inc.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a href="view/Ex01.php" class="card-link">
                    <div class="card" style="width: 18rem; height: 12rem;">
                        <div class="card-body">
                            <h5 class="card-title">Desafio 1</h5>
                            <p class="card-text">Listagem de todos os veículos com informação válida e inválida.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="view/Ex02.php" class="card-link">
                    <div class="card" style="width: 18rem; height: 12rem;">
                        <div class="card-body">
                            <h5 class="card-title">Desafio 2</h5>
                            <p class="card-text">Listagem de todos os veículos de cor diferente de Branco.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="view/Ex03.php" class="card-link">
                    <div class="card" style="width: 18rem; height: 12rem;">
                        <div class="card-body">
                            <h5 class="card-title">Desafio 3</h5>
                            <p class="card-text">Listagem de todos os carros do tipo SUV, que estão acima de 18,000.00€ e com o combustível Hibrido.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="view/Ex04.php" class="card-link">
                    <div class="card" style="width: 18rem; height: 12rem;">
                        <div class="card-body">
                            <h5 class="card-title">Desafio 4</h5>
                            <p class="card-text">Listagem dos 5 veículos mais baratos de toda a BD.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="view/Ex05.php" class="card-link">
                    <div class="card" style="width: 18rem; height: 12rem;">
                        <div class="card-body">
                            <h5 class="card-title">Desafio 5</h5>
                            <p class="card-text">Listagem de todos os veículos da marca Toyota.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>