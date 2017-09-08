<html>
    <head>
        <title>Atribuição</title>
        <link href="style.css" rel="stylesheet">
    </head>
    
    <body>
        <div id="div1">
        <?php
        
        $n1 = 2;
        $n2 = 2;
        $total = $n1 + $n2;
        $total += 4;
        
        echo "A soma de $n1 + $n2 + 4 é $total" ;
       
        echo"<br><h1>Preco do Produto e desconto</h1>";
           $preco = $_GET["p"];
           echo "<br>O valor total do produto é $preco";
           $preco += $preco*10/100;
           echo "<br>Com juros ficará $preco ";
           
           
        ?>
        </div> 
        
         
         
</body>
    
    
</html>
    
 




