<?php
    $nome = readline("Insira seu nome ");
    $idade = readline("Insira sua idade ");

    if ($idade > 18) {
        echo"$nome é maior de 18 e tem $idade Anos";
    }
    else{
        echo"$nome não é maior de 18 e tem $idade Anos";
    }
?>