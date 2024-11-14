<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            $inicio = isset($_GET["nini"])?$_GET["nini"]:0;
            $fim = isset($_GET["nfim"])?$_GET["nfim"]:0;
            $incremento = isset($_GET["nincremento"])?$_GET["nincremento"]:0;

            if ($inicio < $fim) {
                while ($inicio <= $fim) {
                    echo "$inicio ";
                    $inicio += $incremento;
                }
            } elseif ($inicio > $fim) {
                while ($inicio >= $fim) {
                    echo "$inicio ";
                    $inicio -= $incremento;
                }
            } else {
                echo "Oh palhaça, achas que dá para contar assim?";
            }
        ?>
        <br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>