<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <link rel="stylesheet" href="GeralStyle.css">

    <?php

    function Verificar($Numeros)
    {
        $Total = null;
        $Numeros_Negativos = null;

        foreach ($Numeros as $Numero) {
            if ($Numero > 0) {
                $Total = $Total + $Numero;
            } else {
                $Numeros_Negativos = $Numeros_Negativos + 1;
            }
        }

        echo "<div class = 'Verde'>Soma dos números positivos = $Total</div>";
        echo "<div class = 'Vermelho'>Total de números negativos = $Numeros_Negativos</div>";
    }
    ?>

</head>


<body align="center">

    <div class="Questoes">Questão 10</div>

    <?php
    $Numeros = array(
        -13,
        511,
        35,
        123,
        -4534,
        2432,
        -12,
        66,
        -89,
        305
    );

    Verificar($Numeros);

    ?>

</body>

</html>