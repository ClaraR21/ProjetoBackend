<?php
    $sexo = readline("Irforme o sexo: [M] [F]: ");
    $nota1 = readline("Insira uma nota: ");
    $nota2 = readline("Insira uma nota: ");
    $nota3 = readline("Insira uma nota: ");
    $nota4 = readline("Insira uma nota: ");

    $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

    if ($sexo == "M" && $media >= 6) {
        echo "Caro aluno seu resultado é $media";
    }
    else {
        echo "Cara aluna seu resultado é $media";
    }
?>