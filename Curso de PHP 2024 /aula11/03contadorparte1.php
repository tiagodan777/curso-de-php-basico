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
        <form action="03contadorparte2.php" method="get">
            Inicio: <input type="number" name="nini" id="iini"><br/>
            Fim: <input type="number" name="nfim" id="ifim"><br/>
            Incremento: <select name="nincremento" id="iincremento">
                <?php
                    $c = 1;

                    while ($c <= 5) {
                        echo "<option value='$c'>$c</option>";
                        $c++;
                    }
                ?>
            </select>
            <br><input type="submit" value="Contar">
        </form>
    </div>
</body>
</html>