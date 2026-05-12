<?php
include 'connexion.php';

$result = $conn->query("
    SELECT C.*, P.Nom, P.Prenom 
    FROM Consultation C
    JOIN Patient P ON C.No_dossier = P.No_dossier
");

while ($row = $result->fetch_assoc()) {
    echo "Patient: " . $row["Nom"] . " " . $row["Prenom"] . "<br>";
    echo "Consultation du " . $row["Date_consultation"] . "<br>";
    echo "Diagnostic: " . $row["Diagnostique"] . "<br>";
    echo "Prescription: " . $row["Prescription"] . "<hr>";
}
?>