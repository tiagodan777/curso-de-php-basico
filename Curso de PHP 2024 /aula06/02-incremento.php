<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../aulaPHP/_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        /* Este exercício pretende demonstrar  
        uso de operadores
        de incremento
        e decremnto */
        $atual = $_GET["aa"];   // Esta linha vai pegar o ano na URL
        echo "O ano atual é $atual e o ano anterior foi " . --$atual;
    ?>
</div>
</body>
</html>
 