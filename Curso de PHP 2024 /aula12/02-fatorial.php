<?php
    $num = isset($_GET["nnum"])?$_GET["nnum"]:1;
    $fat = $num;
    $c = $num - 1;

    do {
        $fat *= $c;
        $c--;
    } while ($c >= 1);
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
        <?php
            echo "<h1>A calcular o fatorial de $num</h1>";
            echo "<h2>$num ! = $fat</h2>";
        ?>
        <p><a href="02index.html">Voltar</a></p>
    </div>
</body>
</html>