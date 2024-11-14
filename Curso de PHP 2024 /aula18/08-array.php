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
        <pre>
            <?php
                $m = [[6, 4], [4, 9], [3, 2]];
                $m[0][1] = $m[2][0];
                print_r($m);
            ?>
        </pre>
    </div>
</body>
</html>