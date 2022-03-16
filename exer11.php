<?php
    $pedido = 0;
    $codigo = readline("Codigo: ");
    $quantidade = readline("Quantidade: ");

    switch ($codigo) {
        case '100':
            $pedido = $quantidade * 1.10;
            $bebeida = number_format($pedido, 2, ",", ",");
            break;

        case '101':   
            $pedido = $quantidade * 1.30;
            break;


        default:
            echo "Codigo inválido";
            break;
    }

    echo "Valor total do pedido: $pedido";
?>