
<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="utf-8">
    <title>TechSolutions : nos services</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
require_once 'inc/infos.php';

$requete = $bdd->query("SELECT * FROM utilisateurs");
$utilisateurs = $requete->fetchAll(PDO::FETCH_ASSOC);
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
    <h1>Nos services</h1>
    <p>Des solutions informatiques adaptées à votre entreprise.</p>
</header>
<main>
    <section class="services">
        <h2>Nos prestations</h2>

        <ul>
            <li>Dépannage informatique</li>
            <li>Maintenance des équipements</li>
            <li>Sauvegarde des données</li>
            <li>Sécurité informatique</li>
        </ul>

        <h2>Nos formules</h2>

        <table>
            <tr>
                <th>Formule</th>
                <th>Prestations</th>
                <th>Tarif</th>
            </tr>
            <tr>
                <td>Essentielle</td>
                <td>Dépannage</td>
                <td>49 €/mois</td>
            </tr>
            <tr>
                <td>Confort</td>
                <td>Dépannage et maintenance</td>
                <td>89 €/mois</td>
            </tr>
            <tr>
                <td>Premium</td>
                <td>Maintenance et sauvegarde</td>
                <td>129 €/mois</td>
            </tr>
        </table>
    </section>
</main>
<p><u>Nos techniciens</u></p>
 <ul>
    <?php foreach ($utilisateurs as $u) { ?>
        <?php if ($u["service"] == "Technique") { ?>
            <li>
                <?php echo $u["prenom"]; ?>
                <?php echo $u["nom"]; ?>
                , <?php echo $u["service"]; ?>
            </li>
        <?php } ?>
    <?php } ?>
</ul>
<?php include "inc/pied.php"; ?>

</body>
</html>
