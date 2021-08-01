<?php
function getWholeDB(){

    $getFile = file_get_contents('https://ops01.byside.com/desafio_byside/veiculos.json');
    $jsonFile = json_decode($getFile,true);

    return $jsonFile;
}
?>