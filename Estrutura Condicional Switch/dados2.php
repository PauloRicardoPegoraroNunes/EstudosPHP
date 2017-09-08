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
    $n = isset($_GET["num"])?$_GET["num"]:0;
    
    switch($n){
        case 1: 
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
        echo"Dia de ir a aula"; 
        break;
        case 7:
        case 8:
        
        echo "descançar";
        break;
        default:
        echo "Dia da semana inválido";
        
    }
    ?>
 <a href="exercicio2.html"> <input  type="submit" id="botao"  value="Voltar"></a>
    </div>
</body>
</html>