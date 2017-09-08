<html>
    <head>
        <title>Formulario</title>
        <link href="style.css" rel="stylesheet">
			<?php

	$txt = isset($_GET["t"])?$_GET["t"]:"Texto Genérico";
	$tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
	$cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";

	

	?>
	<style>
	 span.texto{ font-size:<?php echo $tam ;?>; color: <?php echo $cor ;?>;}
     
	</style>

    </head>
    <body>

	<div id="div1">
	
	 <span class='texto'><?php echo $txt ?></span>
	 <a href="criartexto.html"> <input type="submit" value="Voltar"></a>
		</div>
        
         
        
      
    </body>
    
    
    
    
</html>




