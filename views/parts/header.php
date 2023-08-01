<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/css/Accueil.css">
</head>

<body>

  <nav>
    <!-- LOGO -->
    <div class="NAVBAR">
      <div class="LOGO">
        <a href="index.php"><img src="assets/images/LOGO DOFUS.png" alt="" width="75px"></a>
      </div>
      <!-- MENU DÉROULANT -->
      <div class="dropdown">
        <button class="dropbtn">Accueil</button>
        <div class="dropdown-content">
          <a href="#">Notes de patch</a>
          <a href="#">Contact</a>
        </div>
      </div>

      <div class="dropdown">
        <button class="dropbtn">Donjons</button>
        <div class="dropdown-content">
          <a href="#">Explication de tous les donjons sous forme de liste</a>
          <a href="#">Explication des mobs et de leurs sorts</a>
        </div>
      </div>

      <div class="dropdown">
        <a class="dropbtn">Quêtes</a>
        <div class="dropdown-content">
          <a href="#">Quêtes des 26 dofus</a>
          <a href="#">Alignements bontarien</a>
          <a href="#">Alignements brakmarien</a>
        </div>
      </div>

      <div class="dropdown">
        <a class="dropbtn">Tutoriels</a>
        <div class="dropdown-content">
          <a href="#">Attitudes</a>
          <a href="#">Les chemins</a>
          <a href="#">Les compagnons</a>
          <a href="#">Les familiers et montiliers</a>
          <a href="#">Les montures</a>
          <a href="#">Explications des 19 classes</a>
        </div>
      </div>
      <!-- Barre de recherche -->
      <div class="RECHERCHE">
        <form action="#" method="get">
          <input type="text" name="search" id="search" placeholder="Rechercher...">
          <input type="submit" value="Rechercher">
        </form>
      </div>
      <!-- PROFIL -->
      <div class="PROFIL">
        <ul>
          <li><a href="views/users/register.php" id="INSCRIPTION">S'inscrire</a></li>
          <li><a href="#" id="CONNEXION">Connexion</a></li>
        </ul>
      </div>
    </div>
  </nav>