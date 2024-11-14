<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <?php
        $txt = isset($_GET["ntxt"])?$_GET["ntxt"]:"Texto Genérico";
        $tam = isset($_GET["ntam"])?$_GET["ntam"]:"12pt";
        $cor = isset($_GET["ncor"])?$_GET["ncor"]:"#000000";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css">
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$txt</span>";
        ?>
    </div>
</body>
</html>