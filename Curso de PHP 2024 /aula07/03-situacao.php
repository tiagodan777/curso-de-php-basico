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
        <?php
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];

            $media = ($nota1 + $nota2) / 2;

            echo "A média entre $nota1 e $nota2 é $media<br/>";
            echo "A situação do aluno/a é " . (($media < 6)?"REPROVADO/A":"APROVADO/A");
        ?>
    </div>
</body>
</html>