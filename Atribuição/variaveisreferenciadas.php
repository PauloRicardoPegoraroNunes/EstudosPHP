<html>
    <head>
        <title>Variaveis referenciadas</title>
        <link href="style.css" rel="stylesheet">
    </head>
    
    <body>
        <div id="div1">
        <?php
         echo"<h1>Com Referencia</h1>";
          $n1 = 2;
          $n2 = &$n1;
          $n2 += 10;
          
          echo "<br> A variavel a vale $n1";
          echo"<br>A variavel b vale $n2";
          
          echo"<h1><br>sem Referencia</h1>";
          
          $nu1 = 2;
          $nu2 = $nu1;
          $nu2 += 10;
          
          echo "<br>A variavel a vale $nu1";
          echo"<br>A variavel b vale $nu2";
        ?>
        </div> 
        
         
         
</body>
    
    
</html>
