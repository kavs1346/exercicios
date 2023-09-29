<?php
    //Declaração das variaveis
    $numero = 5;
    $nome = "";

    //lê a variavel
    switch($numero) {

        //Compara a variavel
        case 4:
            echo "O numero é igual a 4 <br>";
            break;

        //Compara a variavel
        case 5:
            echo "O numero é igual a 5 <br>";
            break;

            //Valor nulo
        default:
            echo "O numero não corresponde aos valores <br>";
    }

    //Le a variavel
    switch($nome) {

        //Compara a variavel
        case "Rosana":
            echo "O nome é Rosana";
            break;

        //Compara a variavel
        case "Isis":
            echo "O nome é Isis";
            break;

        //Valor nulo
        default:
            echo "O nome não foi encontrado";
    }
?>