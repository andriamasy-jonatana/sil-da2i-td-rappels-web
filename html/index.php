<?php
require '../config/config.php';

function getBlock($file, $data = []) {
    require $file;
}

$queryMovie = $bdd->prepare('SELECT * FROM movie ORDER BY title ASC');
$queryMovie -> execute();

$queryDirector = $bdd->prepare('SELECT * FROM movieHasPerson, person WHERE movieHasPerson.idPerson = person.id AND role=?');
$queryDirector -> execute(array("director"));

$queryActor = $bdd->prepare('SELECT * FROM movieHasPerson, person WHERE movieHasPerson.idPerson = person.id AND role=?');
$queryActor -> execute(array("actor"));
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Madagascar</title>
</head>
<body>
<?php
getBlock('header.php');
?>
<h1>Films</h1>
<ul>
    <?php while($movie = $queryMovie -> fetch()) {?>
        <li>
            <a href="./infos.php"><?= $movie['title'] ?></a>
        </li>
    <?php }?>
</ul>

<h1>Réalisateurs</h1>
<ul>
    <?php while($director = $queryDirector -> fetch()) {?>
        <li>
            <a href="./infos.php"><?= $director['firstname'] . " " . $director['lastname']?></a>
        </li>
    <?php }?>
</ul>

<h1>Acteurs</h1>
<ul>
    <?php while($actor = $queryActor -> fetch()) {?>
        <li>
            <a href="./infos.php"><?= $actor['firstname'] . " " . $actor['lastname']?></a>
        </li>
    <?php }?>
</ul>

<?php getBlock('footer.php') ?>
</body>
</html>