<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>La liste des ateliers</title>
         <link rel="stylesheet" href="main.css">
    </head>
        
    <body>
        <h1>La liste des ateliers </h1>
        <p>Les ateliers sont classé en ordre alphabétique</p>
 
            
<?php
include("CdP/connexion.php"); 
include("CdP/list_atelier.php"); 
foreach($ateliers as $atelier)
{
?>
<div class="news">
    <h3>
        <?php echo $atelier['Titre']; ?>
        
    </h3>
       
</div>
<?php
 include("CdP/deconnexion.php");
}
?>
</body>
</html>