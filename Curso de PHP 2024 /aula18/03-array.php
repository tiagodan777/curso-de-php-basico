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
        <table border="1">
            <tr>
                <pre>
                    <?php
                        $c = range(5, 20, 2);
                        
                        foreach ($c as $valor) {
                            echo "<td>$valor ";
                        }
                    ?>
                </pre>
        </table>
    </div>
</body>
</html>