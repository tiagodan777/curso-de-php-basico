<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP para Iniciantes</title>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css">
</head>
<body>
    <div>
        <form action="02tabuada.php" method="get">
            <select name="num" id="num">
                <?php
                    for ($c = 1; $c <= 10; $c++) {
                        echo "<option value='$c'>$c</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Gerar Tabuada">
        </form>
    </div>
</body>
</html>