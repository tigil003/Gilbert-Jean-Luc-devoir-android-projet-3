<?php
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $diagnostique = $_POST['diagnostique'];
    $prescription = $_POST['prescription'];

    $sql = "UPDATE Consultation SET Diagnostique='$diagnostique', Prescription='$prescription' WHERE Id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Consultation modifiée.";
    } else {
        echo "Erreur: " . $conn->error;
    }
}
?>