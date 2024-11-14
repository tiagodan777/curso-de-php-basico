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
            $numero = isset($_GET["nnumeros"])?$_GET["nnumeros"]:1;

            $c = 1;

            echo "<h1>A Mostrar a Tabuada de $numero</h1>";

            do {
                $res = $numero * $c;

                echo "$numero x $c = $res<br/>";

                $c++;
            } while ($c <= 10);

        ?>
        <p><a href="03tabuada-parte1.php">Voltar</a></p>
    </div>
</body>
</html>