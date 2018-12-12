<?php
$bdd = new PDO('mysql:host=mysql-videotheque.alwaysdata.net;dbname=videotheque_db', '170657', 'Videotheque');
$bdd->exec('SET CHARACTER SET utf8');

setlocale (LC_TIME, 'fr_FR.utf8','fra');
?>
