<!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8" />
    <title>mini_chat</title>
</head>
<body>
<p>
    <header>

</p>

<form action="minichat_post.php" method="post">
    <p>
        pseudo :
        <input type="text" name="pseudo" value=" <?php if (isset($_COOKIE['pseudo']))
        {
            echo $_COOKIE['pseudo'];
        }else
        {
            echo ' pseudo';
        } ?> " />
        <br/>
        message :
        <input type="text" name="message" /> <br/>

        <input type="submit" value="Valider" /> <br/>
        <input type="button" value="Actualiser" Onclick="javascript:window.history.go(0)">
    </p>

    </header>

    <section>

        <?php
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=recipes', 'root', '');
        }catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        $reponse = $bdd->query('SELECT * FROM mini_chat ORDER BY id DESC LIMIT 0, 10');
        while ($donnees = $reponse->fetch())
        {
            ?>
            <p>
                le <?php echo $donnees['date'] ; ?> <strong> <?php echo htmlspecialchars($donnees['pseudo']) ; ?> </strong> à dit :  <?php echo htmlspecialchars($donnees['message']) ; ?>  <br/>
            </p>
            <?php
        }
        $reponse->closeCursor();
        ?>

    </section>

</form>
</body>

</html>