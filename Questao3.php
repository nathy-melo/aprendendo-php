<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <link rel="stylesheet" href="GeralStyle.css">

    <?php
    function Pessoa($Nome, $Sexo, $Idade)
    {
        if ($Sexo == "Feminino" and $Idade < 25) {
            echo "$Nome, <div class = 'Verde'>Aceita.</div>";
        } else {
            echo "$Nome, <div class = 'Vermelho'>Não Aceita.</div>";
        }
    } 
    ?>

</head>


<body align="center">

    <div class="Questoes">Questão 3</div>

    <?php
    $Nome = "Caike";
    $Idade = "17";
    $Sexo = "Masculino";
    Pessoa($Nome, $Sexo, $Idade);
    ?>

</body>

</html>