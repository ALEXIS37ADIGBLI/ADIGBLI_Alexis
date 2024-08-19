<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
<form method="post">
        <label for="materiel">Sélectionnez vos Matériels :</label>
        <select id="materiel" name="materiel[]">
            <option value="PC">PC</option>
            <option value="CLAVIER">CLAVIER</option>
            <option value="SOURIS">SOURIS</option>
            <option value="UC">UC</option>
            <option value="RAM">RAM</option>
        </select>
        <input type="submit" value="Valider">
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["materiel"])) {
            $Selectionnes = $_POST["materiel"];
            echo "matériel sélectionnés :<br>";
            foreach ($Selectionnes as $materiel) {
                echo "$materiel<br>";
            }
        } else {
            echo "Aucun materiel sélectionné.";
        }
    }
    ?>