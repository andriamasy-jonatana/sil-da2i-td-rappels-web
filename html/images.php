<?php
$link = mysqli_connect('mysql-videotheque.alwaysdata.net', '170657', 'Videotheque')
or die('Pb de connexion au serveur: ' . mysqli_connect_error());
mysqli_select_db($link, 'videotheque_db') or die ('Pb de sélection BD : ' . mysqli_error($link));


$query ='SELECT id FROM picture';

while ($donnees = $query->fetch())
{
    echo $donnees['legende'] . '<br />';
}

$reponse->closeCursor();