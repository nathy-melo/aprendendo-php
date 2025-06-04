<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <link rel="stylesheet" href="GeralStyle.css">

    <?php
    function Soma($Numero1, $Numero2)
    {
        $Total = $Numero1 + $Numero2;

        if ($Total > 20) {
            $Total = $Total + 8;
            echo "<div>Resultado = <a class ='Verde'>$Total<a></div>";
        } else {
            $Total = $Total - 5;
            echo "<div>Resultado = <a class ='Vermelho'>$Total<a></div>";
        }
    }
    ?>

</head>

<body align="center">

    <div class="Questoes">Questão 1</div>

    <?php
    $a = 16;
    $b = 13;
    Soma($a, $b);
    ?>

</body>

</html>