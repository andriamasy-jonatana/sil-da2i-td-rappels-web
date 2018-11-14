<?php
/*$link = mysqli_connect('mysql-videotheque.alwaysdata.net', '170657', 'Videotheque')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

mysqli_select_db($link, 'videotheque_db')
or die ('Erreur de sélection de la BD : ' . mysqli_error($link));

mysqli_set_charset($link, 'utf8');*/
/*$bdd = new PDO('mysql:host=mysql-videotheque.alwaysdata.net;dbname=videotheque_db;charset=utf8', '170657', 'Videotheque');
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
$bdd-> exec('SET CHARACTER SET utf8');

setlocale (LC_TIME, 'fr_FR.utf8', 'fra');*/

/*try
{
    $bdd = new PDO('mysql:host=mysql-videotheque.alwaysdata.net;dbname=videotheque_db;charset=utf8', '170657', 'Videotheque');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}*/

try {
    $dsn = 'mysql:host=mysql-videotheque.alwaysdata.net;dbname=videotheque_db;charset=utf8';
    $bdd = new PDO($dsn, '170657', 'Videotheque');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
    // ...
}