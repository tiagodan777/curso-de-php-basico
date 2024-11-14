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
        <form action="03tabauada-parte2.php" method="get">
            Número: <select name="nnumeros" id="inumeros">
            <?php
                $c = 1;

                do {
                    echo "<option value='$c'>$c</option>";
                    $c++;
                } while ($c <= 10);
            ?>
            </select>
            <input type="submit" value="Gerar Tabuada">
        </form>
    </div>
</body>
</html>