<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $c = 1;

            while ($c <= 5) {
                $num = isset($_GET["nv$c"])?$_GET["nv$c"]:0;

                echo "Valor $c: $num <br/>";

                $c++;
            }
        ?>
    </div>
</body>
</html>