
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>TechSolutions : l'entreprise</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
include "inc/infos.php";
require "inc/bdd.php";
$requete = $pdo->query("SELECT prenom, nom, service, role FROM utilisateurs ORDER BY nom");
$utilisateurs = $requete->fetchAll();
?>

<nav>
    <ul class="menu">
        <li><a class="lien-menu" href="index.php">Accueil</a></li>
        <li><a class="lien-menu" href="services.php">Nos services</a></li>
        <li><a class="lien-menu" href="entreprise.php">L'entreprise</a></li>
        <li><a class="lien-menu" href="contact.php">Contact</a></li>
    </ul>
</nav>

<header>
    <h1>L'entreprise</h1>
    <p>Découvrez qui nous sommes.</p>
</header>

<main>
    <section class="apropos">
        <h2>Notre histoire</h2>

        <p>
            TechSolutions est une entreprise informatique située
            à Brive-la-Gaillarde. Elle accompagne les petites
            entreprises dans la gestion et l'entretien de leur
            matériel informatique.
        </p>

        <p>
            Notre objectif est de proposer des solutions fiables,
            simples et adaptées aux besoins de chaque client.
        </p>

        <h2>Notre équipe</h2>
        <table>
  <?php foreach ($utilisateurs as $u) { ?>
  <ul>
    <li><?php echo $u["prenom"]; ?> <?php echo $u["nom"]; ?>, <?php echo $u["service"]; ?></li>
  </ul>
  <?php } ?>
</table>
        <p>
            Notre équipe est composée de professionnels passionnés
            par l'informatique. Nous mettons nos compétences au
            service de nos clients pour les accompagner au quotidien.
        </p>
    </section>
</main>

<footer class="pied-page">
    <p>TechSolutions - 12 rue des Innovateurs, 19100 Brive-la-Gaillarde</p>
    <p>05 55 88 77 66 - contact@techsolutions.fr</p>
</footer>

</body>
</html>
