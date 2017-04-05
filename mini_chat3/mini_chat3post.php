<?php

// Connexion à la base de données

try

{

$bdd = new PDO('mysql:host=localhost;dbname=testphp;charset=utf8', 'root', '');

}

catch(Exception $e)

{

die('Erreur : '.$e->getMessage());

}


// Insertion du message à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO mini_chat3 (pseudo, message) VALUES(?, ?)');

$req->execute(array($_POST['pseudo'], $_POST['message']));


// Redirection du visiteur vers la page du minichat

header('Location: mini_chat3.php');

?>