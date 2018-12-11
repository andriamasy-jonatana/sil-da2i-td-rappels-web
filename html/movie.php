<?php
function getBlock($file, $data = []) {
    require $file;
}
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

<?php getBlock('footer.php') ?>
</body>
</html>';