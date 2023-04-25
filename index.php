<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'authentification en PHP</title>
</head>
<body>
    <h1>Connexion</h1>
    
    <form method="post" action="dashboard.php">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" id="username" required>

        <br>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password" required>

        <br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
