<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <form  method="post">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST") { //Permet de s'assurer si  la fonction a été bien envoyé
        $nom = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        if (empty($nom) || empty($email) || empty($message)) {
            echo "Tous les champs sont obligatoires.";
        } else {
            echo "Nom : $nom<br>";
            echo "Email : $email<br>";
            echo "Message : $message<br>";
            
        }
    
    }
?>