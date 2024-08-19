<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
<form method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br>
        <label for="confirm_password">Confirmation du mot de passe :</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>
        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirm_password"];
        $errors = []; // cette tableau va stoker les erreur de chque champs 
        if (strlen($username) < 5) {
            $errors[] = "Le nom d'utilisateur doit comporter au moins 5 caractères.";
        }
        if (strlen($password) < 8) {
            $errors[] = "Le mot de passe doit comporter au moins 8 caractères.";
        }
        if ($password !== $confirmPassword) {
            $errors[] = "Le mot de passe et la confirmation doivent correspondre.";
        }
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo "$error<br>";
            }
        } else {
            echo "Inscription réussie !";
        }
    }
    ?>