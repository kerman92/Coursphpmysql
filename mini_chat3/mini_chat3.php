<!DOCTYPE html>

<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <meta charset="utf-8" />
    <title>mini_chat3</title>
</head>
     <style>
         form
         {
             text-align: center;
         }
     </style>
<body>

    <form  action="mini_chat3post.php" method="post">
        <p>
            <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br/>
            <label for="message">Message</label> : <input type="text" name="message" id="message" /><br/>

            <input type="submit" value="Envoyer" />

        </p>

    </form>



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


    // Récupération des 10 derniers messages

    $reponse = $bdd->query('SELECT pseudo, message FROM mini_chat3 ORDER BY id DESC LIMIT 2, 10');


    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

    while ($donnees = $reponse->fetch())

    {

        echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';

    }


    $reponse->closeCursor();


    ?>

</body>

</html>