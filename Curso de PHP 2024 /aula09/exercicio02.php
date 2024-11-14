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
            $ano = isset($_GET["nano"])?$_GET["nano"]:1900;
            $idade = date("Y") - $ano;
            echo "Nasceste em $ano e por isso tens $idade anos. <br/>";

            if ($idade < 16) {
                $tipoVoto = "não vota";
            }

            elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
                $tipoVoto = "voto opcional";
            } else {
                $tipoVoto = "voto obrigatório";
            }

            echo "Com essa idade, $tipoVoto";
        ?>
    </div>
</body>
</html>