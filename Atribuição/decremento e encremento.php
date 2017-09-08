<html>
    <head>
        <title>Decremento e Encremento</title>
        <link href="style.css" rel="stylesheet">
    </head>
    
    <body>
        <div id="div1">
        <?php
        
           echo"<br><h1>Anos decremento e encremento</h1>";
           $an = $_GET["a"];
           echo"Ano atual é $an ano anterior foi : ".--$an. " e um ano depois do ano passado é  :  ".++$an;
           
        ?>
        </div> 
        
         
         
</body>
    
    
</html>