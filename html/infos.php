<?php
require '../config/config.php';
require 'getBlock.php';
require 'head.php';

$getId = $_GET["id"];
$queryInfosMovie = $bdd->prepare('SELECT * FROM movie WHERE id=?');
$queryInfosMovie -> execute(array($getId));
$movie = $queryInfosMovie ->fetch();
?>

<body>
<?php
getBlock('header.php');
?>
<body>
<section>
    <h2>Informations</h2>
    <article>
        <h3>Titre du film :</h3>
        <h4><?php echo $movie['title']?></h4>

        <h3>Réalisateur :</h3>
        <a></a>

        <h3>Date de sortie du film :</h3>
        <ul>
            <li><?php $date = strftime('%d %B %Y', strtotime($movie['releaseDate']));
                echo $date;?></li>
        </ul>

        <h3>Synopsis :</h3>
        <p><?php echo $movie['synopsis'];?></p>

        <h3>Note :</h3>
        <a><?php echo $movie['rating'];?> / 10</a>

        <h3></h3>

        <h3>Acteurs :</h3>
        <ul>
            <li></li>
        </ul>
    </article>
</section>
</body>