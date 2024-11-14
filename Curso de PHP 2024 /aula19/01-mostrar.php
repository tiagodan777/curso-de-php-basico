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
                $tot = count($v);
                echo "O vetor tem $tot elementos <br/>";
                print_r($v);
                var_dump($v);
            ?>
        </pre>
    </div>
</body>
</html>