<?php
    $num = isset($_GET["nnum"])?$_GET["nnum"]:0;
    $op = isset($_GET["oper"])?$_GET["oper"]:1;

    switch ($op) {
        case 1:
            $res = $num * 2;
            break;
        case 2:
            $res = pow($num, 3);
            break;
        case 3:
            $res = pow($num, (1/2));
            break;
    }

    $res = "<span class='foco'>$res</span>"

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
        O resultado da operação solicitada foi <?= $res ?>
        <br/><a href="exercicio01.html">Voltar</a>
    </div>
</body>
</html>