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
           $frase = "Gosto de estudar Matemática!!! Matemática é muito fixe!";
           $novaFrase = str_ireplace("matemática", "PHP", $frase);
           print($novaFrase);  
        ?>
    </div>
</body>
</html>