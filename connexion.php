<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css"> 
</head>
    <body>
        <h1>TechSolutions : espace salariés</h1>
        <h1>Espace salariés</h1>
        <p>Connectez-vous avec votre identifiant</p>
<form action="verifier.php" method="post" class="formulaire">
    <p>
        <label for="identifiant">Identifiant</label><br>
        <input type="text" id="identifiant" name="identifiant" class="input" required>
    </p>

    <p>
        <label for="motdepasse">Mot de passe</label><br>
        <input type="password" id="motdepasse" name="motdepasse" class="input" required>
    </p>

    <p>
        <button type="submit" class="bouton">Se connecter</button>
    </p>
</form>
    </body>
</html>