
<?php
session_start();

// Page réservée aux personnes connectées...
if (!isset($_SESSION["id"])) {
    header("Location: connexion.php");
    exit;
}
// ... et, parmi elles, à l'administrateur
if ($_SESSION["role"] != "admin") {
    header("Location: espace.php");
    exit;
}
include "inc/infos.php";
require "inc/bdd.php";

$requete = $pdo->query("SELECT id, prenom, nom, service, role FROM utilisateurs ORDER BY nom");
$utilisateurs = $requete->fetchAll();
$requete_admin = $pdo->query("SELECT prenom FROM utilisateurs WHERE role = 'admin' ORDER BY nom");
$utilisateurs_admin = $requete_admin->fetchAll();
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
      <p><a href="ajouter.php" class="bouton">Ajouter un utilisateur</a></p>
      <p>dont <?php echo count($utilisateurs_admin); ?> administrateur(s)</p>
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
        <body>
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
           
<td style="padding:12px;">
    <form action="supprimer.php" method="post">
       <input type="hidden" name="id" value="<?php echo htmlspecialchars($utilisateur['id']); ?>">
        <button type="submit" class="bouton-supprimer">
            Supprimer
        </button>
    </form>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>


    <p style="text-align:center; margin: 20px;">
      <a href="espace.php">Retour à mon espace</a>
    </p>

  </div>
</main>

<?php include "inc/pied.php"; ?>

</body>
</html>
