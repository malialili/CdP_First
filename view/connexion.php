<?php 
// on se connecte à MySQL 
$db = mysql_connect('localhost', 'root', 'root'); 

// on sélectionne la base 
mysql_select_db('CdP',$db); 

// on crée la requête SQL 
$sql = 'SELECT ID, Titre, Type FROM Atelier'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

// on fait une boucle qui va faire un tour pour chaque enregistrement 
while($data = mysql_fetch_assoc($req)) 
    { 
    // on affiche les informations de l'enregistrement en cours 
    echo '<b>'.$data['ID'].' '.$data['Titre'].'</b> ('.$data['Type'].')'; 
    } 

// on ferme la connexion à mysql 
mysql_close(); 
?>