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
                $v = ["A", "J", "M", "X", "K"];
                print_r($v);
                // $v[] = "O";
                // array_push($v, "O");
                array_pop($v);
                print_r($v);
            ?>
        </pre>
    </div>
</body>
</html>