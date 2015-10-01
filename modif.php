<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Modifier un atelier</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

  <h1> Modifier un atelier</h1> 
<?php
include("connexion.php"); 
     $id = $_GET["id"];

 $sql = "SELECT * FROM Atelier WHERE ID =".$id; 
  $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());  
 $data = mysql_fetch_array($req);

  ?>
    <FORM name="update" method="POST" action="update.php">
        <input type="hidden" name="id" value="<?php echo $data['ID']; ?>">
        Titre* :   <INPUT type=text size=60 name=titre value="<?php echo $data['Titre']; ?>"> <BR>
        Type* :  <INPUT type=text size=30 name=type value="<?php echo $data['Type'];?>"><BR>
        Durée* :   <INPUT type=text size=2 name=duree value="<?php echo $data['Duree'];?>"><BR>
        Capacité :   <INPUT type=text size=2 name=capacite value="<?php echo $data['Capacite'];?>"><BR>
        Thèmes disciplinaire* :   <textarea type=textarea  name=theme rows="3" cols="60"><?php echo $data['Themes']; ?> </textarea>
        <BR><br>
       <input type="submit" id="button" name="Modifier" value="Modifier" />
       <INPUT type="submit" value="Annuler" name="annuler">
    </FORM>
<?php
mysql_close(); 
?>

</body>
</html>