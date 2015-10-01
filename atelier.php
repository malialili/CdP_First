<?php
include("connexion.php"); 
if (isset($_POST['titre']) AND isset($_POST['type']) AND isset($_POST['duree']) AND isset($_POST['capacite']) AND isset($_POST['theme']))
 {
 	
 $titre = $_POST['titre'];
 $type = $_POST['type'];
 $theme =$_POST['theme'];
 $duree=$_POST['duree'];
 $capacite=$_POST['capacite'];
  
		 if (empty($titre)) {
		  echo ("Saisissez votre titre");
		  exit();
		 }
 
  $sql = 'INSERT INTO Atelier VALUES (" " , "'.$titre.'", "'.$type.'", "'.$duree.'", "'.$capacite.'", "'.$theme.'")';     

  $requete= mysql_query ($sql,$db) or die(mysql_error());
 
		  if($requete){
		
		  	include("index.php"); 
		    echo "L insertion a ete correctement effectuee" ;
		  }
		  else
		    echo "L insertion a echouee" ;
 }
 mysql_close(); 
?>