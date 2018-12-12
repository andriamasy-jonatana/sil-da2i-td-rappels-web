<?php
require '../config/config.php';
require 'index.php'
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Madagascar</title>
</head>
<body>
<section>
    <h2>Informations sur le film</h2>
    <article class="infos">
        <h3>Date de sortie du film :</h3>
        <ul>
            <?php $query = 'SELECT releaseDate FROM movie';
            $result = mysqli_query($link, $query);
            $reponse = $query;
            if (!$result)
            {
                echo 'Impossible d\'exécuter la requête ', $query, ' : ', mysqli_error($link);
            }
            else
            {
                if (mysqli_num_rows($result) != 0)
                {
                    while ($row = mysqli_fetch_assoc($result))
                    {?>
                        <li><?php echo $row['releaseDate'];?></li>
                        <?php
                    }
                }
            }
            ?>
        </ul>

        <h3> Noms des acteurs principaux :</h3>
        <ul>
            <li>Alex le lion</li>
            <li>Marty le zèbre</li>
            <li>Gloria l\'hippopotame</li>
            <li>Melman la girafe</li>
        </ul>

        <h3> Synopsis :</h3>
        <?php $query ='SELECT synopsis FROM movie';
        $result = mysqli_query($link, $query);
        $reponse = $query;
        while ($row = mysqli_fetch_assoc($result))
        {?>
            <p><?php echo $row['synopsis'];?></p>
            <?php
        }
        ?>
        <h3> Note :</h3>
        <?php $query ='SELECT rating FROM movie';
        $result = mysqli_query($link, $query);
        $reponse = $query;
        while ($row = mysqli_fetch_assoc($result))
        {?>
            <p><?php echo $row['rating'];?> / 10</p>
            <?php
        }
        ?>
    </article>
</section>
</body>
</html>