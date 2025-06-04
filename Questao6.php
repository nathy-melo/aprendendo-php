<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <link rel="stylesheet" href="GeralStyle.css">

    <?php

    function Qual_o_Mes($Numero) {
    $Meses = array(
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        12 => "Novembro",
        12 => "Dezembro",
    );
    if ($Numero >= 1 and $Numero <= 12) {
    echo "$Meses[$Numero]";
    }
    } 
    ?>

</head>


<body align="center">

    <div class="Questoes">Questão 6</div>

    <?php
    $Numero = 5;
    Qual_o_Mes($Numero);
    ?>

</body>

</html>