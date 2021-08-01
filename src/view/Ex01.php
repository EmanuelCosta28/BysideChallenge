<?php

require '../controller/controller.class.php';
require '../model/model.inc.php';

$veiculosArray = getWholeDB();

$veiculos = new Veiculos($veiculosArray);

$veiculosEstado = $veiculos->getVehicleStatus();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
</head>
<body>
    <a href="../index.php"><h3>Voltar ao início</h3></a>
    <table>
        <tr>
            <td>
                Marca
            </td>
            <td>
                Modelo 
            </td>
            <td>
                Cor
            </td>
            <td>
                Combustível
            </td>
            <td>
                Categoria
            </td>
            <td>
                Preço
            </td>
            <td>
                Estado
            </td>
        </tr>
        <?php
            foreach($veiculosEstado as $veiculo=>$caracteristicas){
        ?>
                <tr>
                <td>
                    <?=$caracteristicas['Marca']?>
                </td>
                <td>
                    <?=$caracteristicas['Modelo']?>
                </td>
                <td>
                    <?=$caracteristicas['Cor']?>
                </td>
                <td>
                    <?=$caracteristicas['Combustível']?>
                </td>
                <td>
                    <?=$caracteristicas['Categoria']?>
                </td>
                <td>
                    <?=$caracteristicas['Preço']?>
                </td>
                <td>
                    <?=$caracteristicas['Estado']?>
                </td>
                </tr>
        <?php 
            }
        ?>
    </table>
</body>
</html>