
<?php
include "inc/infos.php";
require "inc/bdd.php";

$requete = $pdo->query("SELECT prenom, nom, service, role FROM utilisateurs ORDER BY nom");
$utilisateurs = $requete->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>TechSolutions : gestion des utilisateurs</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<header class="hero" id="haut">
  <div class="hero-interieur">
    <div class="hero-texte">
      <p class="hero-surtitre">Espace d'administration</p>
      <h1>TECHSOLUTIONS</h1>
      <h2>Gestion des utilisateurs</h2>
      <p>Administration des comptes du personnel de TechSolutions.</p>
    </div>
    <img src="TechSolutions.png" class="hero-logo" alt="Logo TechSolutions">
  </div>
</header>

<main class="apropos" id="utilisateurs">
  <div class="apropos-interieur">
    <div class="apropos-texte">
      <p class="section-surtitre">ADMINISTRATION</p>
      <h2 class="titre-apropos">Gestion des utilisateurs</h2>
      <p>Nombre de comptes : <?php echo count($utilisateurs); ?></p>
      <table>
      <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Service</th>
        <th>Rôle</th>
      </tr>
      <?php foreach ($utilisateurs as $u) { ?>
      <tr>
        <td><?php echo $u["prenom"]; ?></td>
        <td><?php echo $u["nom"]; ?></td>
        <td><?php echo $u["service"]; ?></td>
        <td><?php echo $u["role"]; ?></td>
      </tr>
      <?php } ?>
    </table>
    </div>
  </div>

  <div class="services">
    <div class="services-titre">
      <h2>Liste des utilisateurs</h2>
    </div>

    <div style="overflow-x:auto; padding: 20px;">
      <table style="width:100%; border-collapse:collapse; text-align:left;">
        <thead>
          <tr>
            <th style="padding:12px;">Prénom</th>
            <th style="padding:12px;">Nom</th>
            <th style="padding:12px;">Service</th>
            <th style="padding:12px;">Rôle</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($utilisateurs as $utilisateur) { ?>
          <tr>
            <td style="padding:12px;">
              <?= htmlspecialchars($utilisateur["prenom"]) ?>
            </td>
            <td style="padding:12px;">
              <?= htmlspecialchars($utilisateur["nom"]) ?>
            </td>
            <td style="padding:12px;">
              <?= htmlspecialchars($utilisateur["service"]) ?>
            </td>
            <td style="padding:12px;">
              <?= htmlspecialchars($utilisateur["role"]) ?>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<footer class="pied-page">
  <div class="pied-contenu">
    <div class="pied-marque">
      <div class="logo-ts">TS</div>
      <div>
        <h2>TechSolutions</h2>
        <p>Votre partenaire informatique</p>
      </div>
    </div>

    <div>
      <h3>Contact</h3>
      <p>12 rue des Innovateurs, 19100 Brive-la-Gaillarde</p>
      <p>05 55 88 77 66</p>
      <p>contact@techsolutions.fr</p>
    </div>

    <div>
      <h3>Liens utiles</h3>
      <a href="index.html">Accueil</a>
      <a href="index.html#services">Nos services</a>
      <a href="index.html#entreprise">L'entreprise</a>
      <a href="index.html#contact">Contact</a>
    </div>
  </div>

  <div class="pied-bas">
    <p>© 2026 TechSolutions. Tous droits réservés.</p>
  </div>

  <a class="retour-haut" href="#haut" aria-label="Retour en haut">↑</a>
</footer>

</body>
</html>
