<?php

try {
$dsn = 'mysql:host=mysql-videotheque.alwaysdata.net;dbname=videotheque_db;charset=utf8';
$bdd = new PDO($dsn, '170657', 'Videotheque');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
// ...
}

?>


<section>
    <h2>Informations sur le film</h2>
    <article class="infos">
        <h3>Date de sortie du film :</h3>
        <ul>
            <li><?php $query = $bdd->query('SELECT releaseDate FROM movie');
            $query->fetch();
            $reponse = $query;
            echo $reponse['releaseDate']?></li>
        </ul>

        <h3> Noms des acteurs principaux :</h3>
        <ul>
            <li>Alex le lion</li>
            <li>Marty le zèbre</li>
            <li>Gloria l\'hippopotame</li>
            <li>Melman la girafe</li>
        </ul>

        <h3> Synopsis :</h3>
        <p>Lorsqu\'un lion, un zèbre, une girafe, un hippopotame et une poignée de pingouins psychotiques fuient leur zoo new-yorkais pour secourir l\'un des leurs, l\'aventure s\'écrit avec un grand A. Et lorsque le destin les réunit sur l\'île de Madagascar, ils doivent apprendre en formation accélérée les rudiments de la vie à l\'air libre.</p>

        <h3> Note :</h3>
        <p>6.1 / 10</p>
    </article>
</section>;