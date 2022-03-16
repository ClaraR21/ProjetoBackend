<?php
    $sexo = readline("Informe o sexo: [M] [F]: ");

    if ($sexo == "F" || $sexo == "M") {
        echo "Sexo válido";
    }
    else {
        echo "Sexo inválido";
    }
/* && (um E outro)
   || (um OU outro)*/
?>