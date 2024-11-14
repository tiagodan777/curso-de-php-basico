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
            $c = 10;

            while ($c >= 0) {
                echo $c . "<br/>";
                $c -= 2;
            }
        ?>
    </div>
</body>
</html>