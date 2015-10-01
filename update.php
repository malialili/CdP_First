<?php
// on se connecte à notre base
include("connexion.php"); 
?>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Modifier un atelier</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
	
<?php
$id = $_POST['id'];
if (isset($_POST['titre']) && isset($_POST['type']) && isset($_POST['duree']) && isset($_POST['capacite']) && isset($_POST['theme'])) {

	$titre=$_POST['titre'];
	$type=$_POST['type'];
	$duree=$_POST['duree'];
	$capacite=$_POST['capacite'];
	$theme=$_POST['theme'];
	echo $_GET['id'];
	$sql ="UPDATE Atelier SET titre='".$titre."' , type='".$type."', duree='".$duree."', capacite='".$capacite."', themes='".$theme."' WHERE ID=".$id;

	mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
}
include("index.php"); 
echo "un atelier viennent d être modifiés";

mysql_close();
?>
</body>
</html>