<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/main.min.css">
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Inter:wght@300&display=swap" rel="stylesheet">
</head>

<body>

  <nav>
    <!-- LOGO -->
    <div class="navbar">
      <div class="logo">
        <a href="/accueil"><img src="assets/images/LOGO DOFUS.png" alt="" width="75px"></a>
      </div>
      <!-- MENU DÉROULANT -->

      <div class="dropdown">
        <button class="dropbtn">Bestiaire</button>
        <div class="dropdown-content">
          <a href="/monstres">Monstres</a>
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
        <button class="dropbtn">Classes</button>
        <div class="dropdown-content">
          <a href="/liste-des-classes">Explications des 19 classes</a>
        </div>
      </div>
      <!-- Barre de recherche -->
      <div class="search">
        <form action="#" method="get" class="searchForm">
          <input type="text" name="search" id="search" placeholder="Rechercher...">
          <input type="submit" value="Rechercher">
        </form>
      </div>
      <!-- PROFIL -->
      <div class="profil">
        <?php if (!isset($_SESSION['user'])) { ?>
          <a href="/inscription" id="inscription"><button class="navbtn">Inscription</button></a>
          <a href="/connexion" id="connexion"><button class="navbtn">Connexion</button></a>
        <?php } else { ?>
          <div class="dropdown">
            <button class="dropbtn"><?= $_SESSION['user']['username'] ?></button>
            <div class="dropdown-content">
              <a href="#">Mon compte</a>
              <a href="#">Déconnexion</a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </nav>
 