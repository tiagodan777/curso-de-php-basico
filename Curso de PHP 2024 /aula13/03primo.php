<?php
    $cont = 0;
    $e_ou_nao_primo = '';
    $num = isset($_GET["nnum"])?$_GET["nnum"]:1;

    for ($c = 1; $c <= $num; $c++) {
        $res = $num % $c;

        if ($res == 0) {
            $cont++;
        }
    }

    if ($cont == 2) {
        $e_ou_nao_primo = "<span class='vermelho'>É PRIMO!</span>";
    } else {
        $e_ou_nao_primo = "<span class='vermelho'>NÃO É PRIMO</span>";
    }
?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP para Iniciantes</title>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css">
    <style>
        .vermelho {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>
        <h2>Analizando o número <?= $num ?></h1>
        Valores múltiplos: 
        <?php
            for ($c = 1; $c <= $num; $c++) { 
                if ($num % $c == 0) {
                    echo "$c ";
                }
            }
        ?>
        <br/>Total de múltiplos: <?= $cont ?>
        <br>Resultado: <?= "$num $e_ou_nao_primo" ?>
        <br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>