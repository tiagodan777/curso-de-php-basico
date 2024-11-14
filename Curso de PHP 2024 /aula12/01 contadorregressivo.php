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

        do {
            echo "$c " ;
            $c -= 2;
        } while ($c >= 0);
        ?>
    </div>
</body>
</html>