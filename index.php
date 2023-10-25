<!-- Page d'accueil -->
<?php
session_start();
require_once 'views/parts/header.php';
require_once 'controllers/indexController.php';
?>

<main id="index">
      <header>
            <h1>LA CONQUÊTE DES DOFUS</h1>
      </header>
</main>
<div class="mainindex">
      <h2>Bienvenue sur la conquête des DOFUS</h2>
      <p>Bienvenue dans notre espace dédié aux guides, astuces et support. N'hésitez pas à poser vos questions pour obtenir de l'aide personnalisée.</p>
      <p>Alors, n'hésitez pas à visiter notre site, vous y trouverez des guides sur les monstres du jeu, ainsi que sur les quêtes et les classes.</p>
</div>
<script src="assets/js/script.js"></script>
<?php require_once 'views/parts/footer.php' ?>