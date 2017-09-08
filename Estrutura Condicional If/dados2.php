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
    $ano = isset($_GET["ano"])?$_GET["ano"]:"Informação invalida";
    $idade = date("Y") - $ano;

    echo "Nasceu em $ano  e tem $idade anos";

    if($idade < 16) {
        $voto =" não  vota"; 
    }elseif(($idade >= 16 && $idade < 18) || ($idade > 65))
    {
            $voto = " tem votação opcional";
        }else{
            $voto = " tem voto obrigatório";
        }
    

   echo "<br>Com sua idade você  $voto ";


    ?>

    </div>
</body>
</html>