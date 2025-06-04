<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <link rel="stylesheet" href="GeralStyle.css">

    <?php
    function Biblioteca($Livros, $Usuario, $Nome, $Codigo_do_Livro)
    {
        if (in_array($Codigo_do_Livro, array_keys($Livros))) {
            if ($Usuario == "Professor") {
                echo "$Usuario: $Nome<br>Livro: $Livros[$Codigo_do_Livro]<br>Prazo de devolução 10 dias a partir do dia:<br>", date('d-m-Y');
            } elseif ($Usuario == "Aluno") {
                echo "$Usuario: $Nome<br>Livro: $Livros[$Codigo_do_Livro]<br>Prazo de devolução 3 dias a partir do dia:<br>", date('d-m-Y');
            } else {
                echo "Informação de Usuário Incorreta.";
            }
        } else {
            echo "O Código do Livro escolhido não correspondende aos livros existentes.";
        }
    }
    ?>

</head>

<body align="center">

    <div class="Questoes">Questão 7</div>

    <?php
    $Livros = array(
        1 => "É Assim que Acaba",
        2 => "O Trono de Vidro",
        3 => "Feliz Ano Velho",
        4 => "Harry Potter",
        5 => "Dom Quixote"
    );
    $Nome = "Caike";
    $Usuario = "Aluno";
    $Codigo_do_Livro = 1;
    Biblioteca($Livros, $Usuario, $Nome, $Codigo_do_Livro);
    ?>

</body>

</html>