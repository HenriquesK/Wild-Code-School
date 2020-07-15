<header>
    <link type="text/css" rel="stylesheet" href="Design.css">
    <h1>
    <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
    Les Argonautes
  </h1>
</header>

<!-- Requête SQL qui va récupérer les informations du formulaire via la méthode POST et inserer dans la base de données-->

<center>
<?php

 require 'connexion.php';

$var = $_POST["name"];
$req = "INSERT INTO identite (Prenom) values('$var')";
$mysqli->query($req);
$mysqli->close();

echo 'Votre ajout à été éffectué';
?>
</center>
<br>

<!-- Bouton permettant un retour sur la page d'accueil-->
<center>
<form method="post" action ="index.php">
      <button type="submit"> Retour</button>
  </form>

</center>