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
                $v = array( "nome" => "Tiago",
                            "idade" => 18,
                            "peso" => 112.5,
                        );
                print_r($v);
            ?>
        </pre>
    </div>
</body>
</html>