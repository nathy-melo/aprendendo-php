<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <link rel="stylesheet" href="Atividade 1.css">

    <?php
    function Divisao($Numero)
    {
        if ($Numero % 10 == 0) {
            echo "<div class = 'Verde'>Divisível por 10</div>";
        } elseif ($Numero % 5 == 0) {
            echo "<div class = 'Verde'>Divisível por 5</div>";
        } elseif ($Numero % 2 == 0) {
            echo "<div class = 'Verde'>Divisível por 2</div>";
        } else {
            echo "<div class = 'Vermelho'>Não é Divisível por 10, 5 ou 2.</div>";
        }
    }
    ?>

</head>

<body align="center">

    <div class="Questoes">Questão 2</div>

    <?php
    $Numero = 57;
    Divisao($Numero);
    ?>

</body>

</html>