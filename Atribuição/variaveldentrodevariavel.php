<html>
    <head>
        <title>Variaveis referenciadas</title>
        <link href="style.css" rel="stylesheet">
    </head>
    
    <body>
        <div id="div1">
        <?php
         echo"<h1>variavel dentro de variavel</h1>";
         
         
          $x = "abc";
          $$x = "dev";
         
          echo "O valor da variavel n é $x";
          echo"O valor da variavel criada é $abc";
          
        ?>
        </div> 
        
         
         
</body>
    
    
</html>
