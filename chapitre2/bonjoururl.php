<!DOCTYPE>
<html>
<meta charset="utf-8" />
<title>Page url</title>
<body
<p>
   <?php if (isset($_GET['nom']) and isset($_GET['prenom']))
{
    echo 'bonjouur' . $_GET['nom'] . ' ' . $_GET['prenom'];
}
?>


</p>

</body>
</html>
