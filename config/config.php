<?php
/*$link = mysqli_connect('mysql-videotheque.alwaysdata.net', '170657', 'Videotheque')
or die('Pb de connexion au serveur: ' . mysqli_connect_error());
mysqli_select_db($link, 'videotheque_db') or die ('Pb de sélection BD : ' . mysqli_error($link));*/

$bdd = new PDO('mysql:host=mysql-videotheque.alwaysdata.net;dbname=videotheque_db', '170657', 'Videotheque');
$bdd->exec('SET CHARACTER SET utf8');

setlocale (LC_TIME, 'fr_FR.utf8','fra');
?>
