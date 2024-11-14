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
        <?php
            $nome = "tiago DaNiel";
            $nome2 = ucfirst(strtolower($nome));
            print("O teu nome é $nome2");
        ?>
    </div>
</body>
</html>