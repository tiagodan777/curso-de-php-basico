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
            $frase = "Eu vou estudar PHP agora";
            $cont = str_word_count($frase, 2);
            print_r($cont);
        ?>
    </div>
</body>
</html>