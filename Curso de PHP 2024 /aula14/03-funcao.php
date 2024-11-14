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
            function soma() {
                $p = func_get_args();
                $tot = func_num_args();
                $s = 0;

                for ($i = 0; $i < $tot; $i++) {
                    $s += $p[$i];
                }

                return $s;
            }

            $res = soma(3, 5, 2, 8, 9, 4);
            echo "A soma dos valores é $res";
        ?>
    </div>
</body>
</html>