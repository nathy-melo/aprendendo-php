<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <link rel="stylesheet" href="GeralStyle.css">

    <?php
    function Comparar($Numero1, $Numero2, $Numero3)
    {
        $Maior = 0;
        if ($Numero1 >= $Numero2 && $Numero1 >= $Numero3) {
            $Maior = $Numero1;
            if ($Numero2 >= $Numero3) {
                echo "<div class = 'Verde'>$Numero1,</div><div class = 'Amarelo'>$Numero2,</div><div class = 'Vermelho'>$Numero3.</div>";
            } else {
                echo "<div class = 'Verde'>$Numero1,</div><div class = 'Amarelo'>$Numero3,</div><div class = 'Vermelho'>$Numero2.</div>";
            }
        } elseif ($Numero2 >= $Numero1 && $Numero2 >= $Numero3) {
            $Maior = $Numero2;
            if ($Numero1 >= $Numero3) {
                echo "<div class = 'Verde'>$Numero2,</div><div class = 'Amarelo'>$Numero1,</div><div class = 'Vermelho'>$Numero3.</div>";
            } else {
                echo "<div class = 'Verde'>$Numero2,</div><div class = 'Amarelo'>$Numero3,</div><div class = 'Vermelho'>$Numero1.</div>";
            }
        } else {
            $Maior = $Numero3;
            if ($Numero1 >= $Numero2) {
                echo "<div class = 'Verde'>$Numero3,</div><div class = 'Amarelo'>$Numero1,</div><div class = 'Vermelho'>$Numero2.</div>";
            } else {
                echo "<div class = 'Verde'>$Numero3,</div><div class = 'Amarelo'>$Numero2,</div><div class = 'Vermelho'>$Numero1.</div>";
            }
        }
    }
    ?>

</head>


<body align="center">



    <div class="Questoes">Questão 4</div>

    <?php
    $Num1 = 15;
    $Num2 = 150;
    $Num3 = 45;
    Comparar($Num1, $Num2, $Num3);
    ?>

</body>

</html>