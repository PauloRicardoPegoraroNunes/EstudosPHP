<html>
    <head>
        <title>Variaveis e calculo</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        
        <div id="div1">
        <?php
        
         
         $numero = 4;
         $numero2 = 2;
         echo "<br><h1>Area de desenvolvimento </h1>";
         
         
         $total = $numero+$numero2;
         $valortotal = $numero*$numero2;
         $valoertotal2 = $numero-$numero2;
         $valortotal3 = $numero/$numero2;
         $valortotal4 = $numero%$numero2;
         $media = ($numero+$numero2)/2;
         
         echo "O valor absoluto do numero $numero é: ".abs($numero);
         echo "<br>A parte inteira de $numero2 é: ". intval($numero2);
         echo "<br>O valor de $numero em moeda é R$ ".number_format($numero,2,",",".");
         echo "<br>A raiz quadrada de $numero é: ".sqrt($numero);
         echo "<br>O valor de $numero <sup>$numero2</sup> é: ". pow($numero , $numero2);
         echo "<br>Valor total soma = $total";
         echo "<br> Valor total multiplicado = $valortotal";
         echo "<br> Valor total subtraido = $valoertotal2";
         echo "<br> Valor total Dividido = $valortotal3";
         echo "<br> Módulo do calculo resto de divisão = $valortotal4";
         echo "<br> A médai entre os dois valores  = $media";
         
         
        ?>
        </div>
        
       
      
    </body>
    
    
    
    
</html>




