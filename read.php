
<header>
    <link type="text/css" rel="stylesheet" href="Design.css">
    
    <h1>
    <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
    Les Argonautes
  </h1>
</header>
<main>
    
    <h2>Liste de l'équipage</h2>
</main>

<!-- Requête SQL permettant d'afficher le contenu de la table identite sur une page html -->
<center>
<?php

   require "connexion.php";
   
$req = "SELECT * FROM `identite`";
$resultat = $mysqli->query($req);
while ($ligne = $resultat->fetch_assoc()){;

    echo $ligne['Prenom'].'<br>';}
    $mysqli->close();
?>
</center>
<br>

<!-- Bouton permettant un retour sur la page d'accueil-->
<center>
<form method="post" action ="index.php">
      <button type="submit"> Retour</button>
  </form>
</center>
