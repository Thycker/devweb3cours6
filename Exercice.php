<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice</title>
</head>
<body>
<h2>
Exercice
</h2>
<form method="post">
    <label for="user_name">Nom d'utilisateur</label></br>
    <input type="text" id="user_name" name="user_name" required 
    pattern="\D{7,10}"></br>
    <label for="password">Mot de passe</label></br>
    <input type="text" id="password" name="password" required></br>
    <input type="submit" value="Me connecter">
    </form>
</body>
</html>