<?php
    $nivel = readline("Qual o nivel do professor: ");
    $hora = readline("Quantas aulas: ");
    $salario = 0;

    switch ($opcao) {
        case '1':
            $salario = $hora *12;
            echo "Seu salário é de: $salario";
            break;

        case '2':
            $salario = $hora *17;
            echo "Seu salário é de: $salario";
            break;

        case '3':
            $salario = $hora *25;
            echo "Seu salário é de: $salario";
            break;

        default:
            echo "opção inválida";
            break;
    }
?>