<?php
include 'connexion.php';

$result = $conn->query("SELECT * FROM Consultation");

while ($row = $result->fetch_assoc()) {
    echo "Dossier: " . $row["No_dossier"] . " | Date: " . $row["Date_consultation"] . "<br>";
    echo "Diagnostic: " . $row["Diagnostique"] . "<br>";
    echo "Prescription: " . $row["Prescription"] . "<hr>";
}
?>