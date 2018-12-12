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
	<header>
		<a href="./index.html">
			<img class="photo_accueil" src="../css/img/Madagascar_(film)_Logo.png" alt="Accueil">
		</a>
		<nav id="menu">
			<ul>
				<li><a href="./index.php">Accueil</a></li>
				<li><a href="./director.php">Directeurs</a></li>
				<li><a href="./actor.php">Acteurs</a></li>
			</ul>
		</nav>
	</header>
    <?php getBlock('footer.php') ?>
</body>
</html>