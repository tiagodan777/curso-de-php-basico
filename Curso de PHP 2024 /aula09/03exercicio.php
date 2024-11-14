<?php 
    $nota1 = isset($_GET["nn1"])?$_GET["nn1"]:0;
    $nota2 = isset($_GET["nn2"])?$_GET["nn2"]:0;
    
    $media = ($nota1 + $nota2) / 2;

    $nota1 = "<span class='vermelho'>" . number_format($nota1, 1) . "</span>";
    $nota2 = "<span class='vermelho'>" . number_format($nota2, 1) . "</span>";

    if ($media < 5) {
        $situacao = "<span class='vermelho'>REPROVADO/A</span>";
    } elseif ($media < 7) {
        $situacao = "<span class='vermelho'>RECUPERAÇÃO</span>";
    } elseif ($media <= 10) {
        $situacao = "<span class='vermelho'>APROVADO</span>";
    } else {
        $situacao = "<span class='vermelho'>ERRO! VALOR IMPOSSÍVEL -> MÉDIA = $media</span>";
    }

    $media = "<span class='vermelho'>" . number_format($media, 1) . "</span>";
?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de Médias</title>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css">
    <style>
        span.vermelho {
            font-weight: bold;
            color: red;
        }

        a {
           padding: 10px;
           background-color: blue;
           color: white; 
        }
    </style>
</head>
<body>
    <div>
        A média entre <?= $nota1 ?> e <?= $nota2 ?> é igual a <?= $media ?><br/>
        Situação do aluno/a: <?= $situacao ?><br/><br/>
        <a href="03exercicio.html">Voltar</a>
    </div>
</body>
</html>