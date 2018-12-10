<?php
require '../config/config.php';

$query ='SELECT id FROM picture';

while ($donnees = $query->fetch())
{
    echo $donnees['legende'] . '<br />';
}

$reponse->closeCursor();