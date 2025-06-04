<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <link rel="stylesheet" href="GeralStyle.css">

    <?php
    function Imprimir($Numero)
    {
        $nt = 1;
        $produto = 1;

        do {
            echo "$nt - Produto: $produto<br>";
            $produto *= $nt;
            $nt++;
        } while ($nt <= $Numero);
    }
    ?>

</head>

<body align="center">
    <div class="Questoes">Questão 8</div><br><br><br>

    <?php
    $Numero = 15;
    Imprimir($Numero);
    ?>

</body>

</html>