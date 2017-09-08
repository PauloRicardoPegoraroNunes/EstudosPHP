<html>
    <head>
        <title>Formulario</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>

	<div id="div1">
	<?php

	$nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
	$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[nao informado]";
	$ano = isset($_GET["ano"])?$_GET["ano"]:"[nao informado]";

	$idade = date("Y") - $ano;

	echo "<br>$nome tem $idade anos e seu sexo e $sexo";


	?>

	<a href="cadastro.html"> <input type="submit" value="Voltar"></a>
		</div>
        
         
        
      
    </body>
    
    
    
    
</html>




