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

            if ($idade >= 18) {
                $voto = "JÁ PODES VOTAR";
                $conduzir = "JÁ PODES CONDUZIR";
            } 
            else {
                $voto = "NÃO PODES VOTAR";
                $conduzir = "NÃO PODES CONDUZIR";
            }

            echo "Com essa idade, $voto e também $conduzir";
        ?>
    </div>
</body>
</html>