<!-- Header section -->
<header>
    <link type="text/css" rel="stylesheet" href="Design.css">
    <h1>
    <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
    Les Argonautes
  </h1>
</header>

<!-- Main section -->
<main>
  
  <!-- New member form -->
  <h2>Ajouter un(e) Argonaute</h2>
  <center>
  <form method="post" action="create.php">
    <label for="name">Nom de l&apos;Argonaute</label>
    <input id="name" name="name" type="text" placeholder="Charalampos" />
    <button type="submit">Envoyer</button>
  </form>
  
  <!-- Member list -->
  <h2>Afficher la liste des noms</h2>
  <form method="post" action ="read.php">
      <button type="submit"> Afficher</button>
  </form>
  </center>

</main>

<footer>
  <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
</footer>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

