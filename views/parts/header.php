<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/navbar.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/register.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>

  <nav>
    <!-- LOGO -->
    <div class="navbar">
      <div class="logo">
        <a href="/Accueil"><img src="assets/images/LOGO DOFUS.png" alt="" width="75px"></a>
      </div>
      <!-- MENU DÉROULANT -->
      <div class="dropdown">
        <a href="/Accueil"><button class="dropbtn">Accueil</button></a>
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
        <button class="dropbtn">Quêtes</button>
        <div class="dropdown-content">
          <a href="#">Quêtes des 26 dofus</a>
          <a href="#">Alignements bontarien</a>
          <a href="#">Alignements brakmarien</a>
        </div>
      </div>

      <div class="dropdown">
        <button class="dropbtn">Tutoriels</button>
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
      <div class="recherche">
        <form action="#" method="get">
          <input type="text" name="search" id="search" placeholder="Rechercher...">
          <input type="submit" value="Rechercher">
        </form>
      </div>
      <!-- PROFIL -->
      <div class="profil">
          <a href="/Inscription" id="inscription"><button class="inscription">Inscription</button></a>
          <a href="/Connexion" id="connexion"><button class="connexion">Connexion</button></a>
      </div>
    </div>
  </nav>