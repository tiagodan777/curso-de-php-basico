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
            $ano = $_GET["an"];
            $idade = 2024 - $ano;
            echo "Quem nasceu em $ano, tem idade de $idade anos";

            $tipo = ($idade >= 18 && $idade <= 64)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";

            echo "<br/>E dessa forma, o teu voto é $tipo";
        ?>
    </div> 
</body>
</html>