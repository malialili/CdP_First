<?php

//juste 5 atelier

include_once('model/get_Atelier.php');
$ateliers = get_Atelier(0, 5);

foreach($ateliers as $cle => $atelier)
{
    $ateliers[$cle]['Titre'] = htmlspecialchars($atelier['Titre']);
    //$ateliers[$cle]['contenu'] = nl2br(htmlspecialchars($billet['contenu']));
}

// On affiche la page (vue)
include_once('view/index.php');
?>