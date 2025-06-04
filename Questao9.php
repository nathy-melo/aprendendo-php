<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <link rel="stylesheet" href="GeralStyle.css">

    <?php
    function Imprimir($Numero_de_Vezes)
    {
        for ($nt = 0; $nt < $Numero_de_Vezes; $nt++) {
            echo ($nt + 1) . " - SOL<br>";
        }
    }
    ?>

</head>


<body align="center">

    <div class="Questoes">Questão 9</div>

    <?php
    $Numero_de_Vezes = 13;
    Imprimir($Numero_de_Vezes);
    ?>

</body>

</html>