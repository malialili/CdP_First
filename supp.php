<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> supprimer un atelier</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php

include("connexion.php"); 

 $id=$_GET['id'];
 
 
$sql ='DELETE FROM Atelier WHERE ID="'.$id.'"';
mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

include("index.php"); 
echo "un atelier viennent d être supprimer.";

mysql_close(); 
?>
</body>
</html>