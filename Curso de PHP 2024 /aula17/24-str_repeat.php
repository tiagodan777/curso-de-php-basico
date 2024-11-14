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
            $txt = str_repeat("Php", 5);
            print("O texto gerado foi $txt");
            echo "<br/>";
            print(str_repeat("-", 20));
        ?>
    </div>
</body>
</html>