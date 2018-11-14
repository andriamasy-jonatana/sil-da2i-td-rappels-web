<?php
try {
    $dsn = 'mysql:host=mysql-videotheque.alwaysdata.net;dbname=videotheque_db;charset=utf8';
    $bdd = new PDO($dsn, '170657', 'Videotheque');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
    // ...
}

$query = $bdd->query('SELECT id FROM picture');

while ($donnees = $query->fetch())
{
    echo $donnees['legende'] . '<br />';
}

$reponse->closeCursor();