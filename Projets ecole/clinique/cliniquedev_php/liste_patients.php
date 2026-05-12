<?php
include 'connexion.php';

$result = $conn->query("SELECT * FROM Patient");

while ($row = $result->fetch_assoc()) {
    echo $row["No_dossier"] . " - " . $row["Nom"] . " " . $row["Prenom"] . "<br>";
}
?>