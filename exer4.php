<?php
    $nota1 = readline("Insira uma nota: ");
    $nota2 = readline("Insira uma nota: ");
    $nota3 = readline("Insira uma nota: ");
    $nota4 = readline("Insira uma nota: ");

    $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

    if ($media >= 6) {
        echo "Aluno aprovado";
    }
    else {
        echo "Aluno reprovado";
    }
?>