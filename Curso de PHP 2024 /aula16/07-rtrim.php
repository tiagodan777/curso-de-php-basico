<!DOCTYPE html>
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
            $nome = "   José da Silva   ";
            echo (strlen($nome));
            $novo = rtrim($nome);
            echo (strlen($novo));
        ?>
    </div>
</body>
</html>