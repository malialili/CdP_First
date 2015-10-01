<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Ajout d'un Atelier</title>
    <!--<link rel="stylesheet" href="table.css">-->
</head>
<body>
	<FORM name="accueil" method="POST">
			<table >
				<tr> 
					<th>
						ID
					</th>
					<th >
						Titre
					</th>
					<th>
						Type
					</th>
					<th>
						Duree
					</th>
					<th>
						Capacite
					</th>
					<th>
						Themes disciplinaires
					</th>
					<th>
						<a href="#" class="buttons edit"></a>
					</th>
					<th>
						<a href="#" class="buttons delete"></a>
					</th>
				</tr>

<?php                  	
include("connexion.php"); 
 
$sql = 'SELECT * FROM Atelier'; 

$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

while($data = mysql_fetch_assoc($req)) 
    { 	

    echo '<tr>';
    echo '<td>'.$data['ID'].' </td>';
    echo '<td>'.$data['Titre'].' </td>';
    echo '<td>'.$data['Type'].'</td>';
    echo '<td>'.$data['Duree'].'</td>';
    echo '<td>'.$data['Capacite'].'</td>';
    echo '<td>'.$data['Themes'].'</td>';

	echo '<td > <a href="modif.php?id='.$data['ID'].'" class="buttons edit" ></a></td>';
	?>
	<td><a href="supp.php?id=<?php echo $data['ID']; ?>" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cet atelier?'));" class="buttons delete" ></a></td>
    <?php echo '</tr>';		
    } 
include("deconnexion.php"); 
?>
</FORM>
	</table>

</body>
</html>