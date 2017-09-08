<html>
    <head>
        <title>Formulario</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        

		
		<div id="div1">

	<h1>Seu valor e raiz quadrada</h1>

		<?php
		$valor = $_GET["v"];
		$raizquadrada=sqrt($valor);
		echo "<br>Voce digitou o valor $valor";
		echo "<br>A raiz quadrada de $valor e: ".number_format($raizquadrada,2);
		
	   ?>
        <a href="calculo.html"> <input type="submit" value="Voltar"></a>
         
        </div>
      
    </body>
    
    
    
    
</html>




