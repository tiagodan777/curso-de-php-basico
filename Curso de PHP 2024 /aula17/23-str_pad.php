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
            $nome = "Guanabara";
            $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
            print("O meu professor $novo é lindo!");

            // ESTA FUNÇÃO NÃO ESTÁ FUNCIONAR EM MARÇO DE 2024
        ?>
    </div>
</body>
</html>