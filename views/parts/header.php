<!-- Ma vue du header -->

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/main.min.css">
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Inter:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <nav>
    <!-- LOGO -->
    <div class="navbar">
      <div class="logo">
        <a href="/accueil"><img src="assets/images/LOGO DOFUS.png" alt="logo dofus" width="75px"></a>
      </div>
      <!-- MENU DÉROULANT -->

      <div class="dropdown">
        <button class="dropbtn">Bestiaire</button>
        <div class="dropdown-content">
          <a href="/monstres">Monstres</a>
        </div>
      </div>

      <div class="dropdown">
        <button class="dropbtn">Guides</button>
        <div class="dropdown-content">
          <a href="/dofus-pourpre">QUÊTE DU DOFUS POURPRE</a>
          <a href="/dofus-emeraude">QUÊTE DU DOFUS EMERAUDE</a>
          <a href="/questionsliste">Vos questions réponses</a>
        </div>
      </div>

      <div class="dropdown">
        <button class="dropbtn">Classes</button>
        <div class="dropdown-content">
          <a href="/liste-des-classes">Explications des 19 classes</a>
        </div>
      </div>
      <!-- PROFIL -->
      <div class="profil">
        <?php if (!isset($_SESSION['user'])) { ?>
          <a href="/inscription" id="inscription"><button class="navbtn">Inscription</button></a>
          <a href="/connexion" id="connexion"><button class="navbtn">Connexion</button></a>
        <?php } else { ?>
          <div class="dropdown">
            <button class="dropbtn" id="usernamep"><?= $_SESSION['user']['username'] ?></button>
            <div class="dropdown-content">
              <a href="/profil">Mon compte</a>
              <a href="/deconnexion">Déconnexion</a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </nav>
  <nav id="responsive">
    <div class="logo">
      <img src="assets/images/LOGO DOFUS.png" alt="logo dofus" width="75px" id="responsiveMenuButton">
    </div>
    <ul id="responsiveMenu">
      <li><a href="/accueil">Accueil</a></li>
      <li><a href="/monstres">Monstres</a></li>
      <li>Guides</li>
      <ul>
        <li><a href="/dofus-pourpre">QUÊTE DU DOFUS POURPRE</a></li>
        <li><a href="/dofus-emeraude">QUÊTE DU DOFUS EMERAUDE</a></li>
        <li><a href="/questionsliste">Vos questions réponses</a></li>
      </ul>
      <ul id="hiddenclasses">
        <li><a href="/liste-des-classes">Explications des 19 classes</a></li>
      </ul>
      <?php if (!isset($_SESSION['user'])) { ?>
        <li><a href="/inscription" id="inscription"><button class="navbtn">Inscription</button></a></li>
        <li><a href="/connexion" id="connexion"><button class="navbtn">Connexion</button></a></li>
        <?php } else { ?>
          <li><?= $_SESSION['user']['username'] ?></li>
          <ul>
            <li><a href="/profil">Mon compte</a></li>
            <li><a href="/deconnexion">Déconnexion</a></li>
          </ul>
          <?php } ?>
      </ul>
  </nav>