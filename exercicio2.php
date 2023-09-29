<?php
    $num1 = 15;
    $num2 = 200.5;
    $nome = "Adalberto";
    $resul = $num2 * 2;

if(is_string($num1)) {
    echo "Isso é um nome";
} else {
    $resul = $num1 * 2;
} 

if ($resul >= 100) {
    echo "Esse numero é maior que 100";
} else {
    echo "Esse numero não é maior que 100";
}


?>