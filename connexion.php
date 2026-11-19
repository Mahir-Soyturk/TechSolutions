connexion.php 
<!DOCTYPE html>
<html lang="fr">
    <body>
        <h1>TechSolutions : espace salariés</h1>
        <h1>Espace salariés</h1>
        <p>Connectez-vous avec votre identifiant</p>
   <form action="verifier.php" method="post">
      <p>
        <label for="identifiant">Identifiant</label><br>
        <input type="text" id="identifiant" name="identifiant" required>
      </p>
      <p>
        <label for="motdepasse">Mot de passe</label><br>
        <input type="password" id="motdepasse" name="motdepasse" required>
      </p>
      <p>
        <button type="submit">Se connecter</button>
      </p>
    </form>
    </body>
</html>