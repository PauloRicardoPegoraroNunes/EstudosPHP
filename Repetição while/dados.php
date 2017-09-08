<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>Exercicio 1</title>
</head>
<body>
    <div id="div1">
    <?php
 $n = isset($_GET["n"])?$_GET["n"]:"Valor inválido";
 
  while ($n <= 100){
   echo $n. "<br>";
   $n++;
  }

    ?>

    

    </div>
</body>
</html>