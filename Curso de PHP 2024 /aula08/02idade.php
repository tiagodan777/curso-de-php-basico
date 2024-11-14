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
            $nome = isset($_GET["nNome"])?$_GET["nNome"]:"[não informado]";
            $ano = isset( $_GET["nAno"])?$_GET["nAno"]:0;
            $sexo = isset($_GET["nSexo"])?$_GET["nSexo"]:"[sem sexo]";

            $idade = date("Y") - $ano;

            echo "$nome é $sexo e tem $idade anos";
        ?>
        <a href="02exercicio.html">Voltar</a>
    </div>
</body>
</html>