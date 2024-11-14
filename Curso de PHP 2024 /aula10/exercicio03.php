<?php
    $distrito = isset($_GET["ndistrito"])?$_GET["ndistrito"]:0;

    switch ($distrito) {
        case 1:
            $regiao = "<span class='vermelho'>Região Norte</span>";
            break;
        case 2:
            $regiao = "<span class='vermelho'>Região Centro</span>";
            break;
        case 3:
            $regiao = "<span class='vermelho'>Região Sul</span>";
            break;
        case 4:
            $regiao = "<span class='vermelho'>Região Autónuma dos Açores</span>";
            break;
        case 5:
            $regiao = "<span class='vermelho'>Região Autónuma da Madeira";
            break;
        default:
            $regiao = "<span class='vermelho'>ERRO! Região não encontrada</span>";
    }
?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css">
    <style>
        .vermelho {
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>
    <div>
        Moras na <?= $regiao ?>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>