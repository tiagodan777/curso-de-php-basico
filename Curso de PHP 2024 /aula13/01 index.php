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
            for ($i = 1; $i <= 10; $i++) {
                echo "$i ";
            }
            echo "<br/>";
            for ($i = 10; $i >= 1; $i--) {
                echo "$i ";
            }
            echo "<br/>";
            for ($i = 0; $i <= 50; $i += 5) {
                echo "$i ";
            }
            echo "<br/>";
            for ($i = 20; $i >= 0; $i -= 2) {
                print "$i ";
            }
        ?>
    </div>
</body>
</html>