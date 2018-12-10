<?php
function getBlock($file, $data = []) {
    require $file;
}
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
<ul>
    <li>
        <a href="./infos.php">Madagascar</a>
    </li>
    <li>
        <a href="./infos.php">The Dark Knight</a>
    </li>
    <li>
        <a href="./infos.php">Avengers : Infinity Wars</a>
    </li>
</ul>
<?php
getBlock('infos.php');
getBlock('images.php');
?>

<section>
    <h2>Les réalisateurs</h2>
    <?php getBlock('realisateur.php')?>
</section>
<?php getBlock('footer.php') ?>
</body>
</html>';