<?php
$bdd = new PDO('mysql:host=localhost;dbname=testphp', 'root');
$requete = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur) VALUES(?, ?)');
$requete->execute(array($_GET['nom'], $_GET['possesseur']));
?>
