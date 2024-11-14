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
        <form action="02parte2.php" method="get">
            <?php
                $c = 1;
                while ($c <= 5) {
                    echo "Valor $c: <input type='number' name='nv$c' id='iv$c' max='100' min='0' value='0'><br/>";
                    $c++;
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>