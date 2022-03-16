<?php
    $nota1 = readline("Insira um número: ");
    $nota2 = readline("Insira um número: ");
    $nota3 = readline("Insira um número: ");

    $media = ($nota1 + $nota2 + $nota3)/3;

    if($media >= 7){
        echo "O aluno está aprovado com media $media";
    }
    elseif($media <= 5){
        echo "O aluno está reprovado com media $media";
    }
    else{
        echo "O aluno está de recuperação com media $media";
    }
?>