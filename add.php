<?php
include("connexion.php"); 

?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Ajout d'un Atelier</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

  <h1> Ajouter un atelier</h1> 
    
    <P>
    Les champs (*) sont obligatoir
    </P>
<FORM name="insertion" method="POST" action="atelier.php">


    Titre*                 <INPUT type=text size=60 name=titre><br>
    Type*                   <INPUT type=text size=30 name=type><br>
    Durée*                  <INPUT type=text size=2 name=duree><br>
    Capacité                <INPUT type=text size=2 name=capacite><br>
    Thèmes disciplinaire*   <textarea type=text&nbsp&nbsp&nbsparea  name=theme rows="5" cols="60"> </textarea><br>
  
  <br><br><br><br>

    <INPUT type="submit" value="Ajouter" name="ajouter">
    <input type="button" value="Annuler" onclick="location.href='index.php'" />
   
</FORM>

</body>
</html>