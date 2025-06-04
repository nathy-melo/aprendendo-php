<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <link rel="stylesheet" href="GeralStyle.css">

    <?php
    function Triangulo($Lado1, $Lado2, $Lado3)
    {
        // confere se é um triângulo
        if ($Lado1 + $Lado2 > $Lado3 and $Lado1 + $Lado3 > $Lado2 and $Lado2 + $Lado3 > $Lado1) {
            if ($Lado1 == $Lado2 and $Lado2 == $Lado3) {
                echo "É um Triângulo Equilátero.";
            }
            elseif ($Lado1 == $Lado2 or $Lado2 == $Lado3 or $Lado1 == $Lado3) {
                echo "É um Triângulo Isósceles.";
            }
            elseif ($Lado1 != $Lado2 and $Lado2 != $Lado3 and $Lado1 != $Lado3) {
                echo "É um Triângulo Escaleno.";
            }
        } else {
            echo "Não é um triângulo.";
        }
    }
    ?>

</head>


<body align="center">

    <div class="Questoes">Questão 5</div>

    <?php
    $Numero1 = 44;
    $Numero2 = 68;
    $Numero3 = 77;
    Triangulo($Numero1, $Numero2, $Numero3)
    ?>

</body>

</html>