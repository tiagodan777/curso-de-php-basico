<?php
    $dia = isset($_GET["ndia"])?$_GET["ndia"]:0;

    switch ($dia) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            $res = "Levanta-te e vai estudar :)";
            break;
        case 7:
        case 8:
            $res = "Descansa, pequeno gafanhoto ;)";
            break;
        default:
        $res = "Dia da semana inválido";
    }
?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css">
</head>
<body>
    <div>
        <?= $res ?>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>