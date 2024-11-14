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
            $a = 3;
            $b = "3";
            $r = ($a === $b)?"SIM":"NÃO";

            echo "As variáveis A e B são idênticas? $r";
        ?>
    </div>
</body>
</html>