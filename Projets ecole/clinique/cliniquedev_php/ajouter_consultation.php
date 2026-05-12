<?php
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no_dossier = $_POST['no_dossier'];
    $diagnostique = $_POST['diagnostique'];
    $prescription = $_POST['prescription'];
    $date_consultation = $_POST['date_consultation'];

    $sql = "INSERT INTO Consultation (No_dossier, Diagnostique, Prescription, Date_consultation)
            VALUES ('$no_dossier', '$diagnostique', '$prescription', '$date_consultation')";

    if ($conn->query($sql) === TRUE) {
        echo "Consultation enregistrée.";
    } else {
        echo "Erreur: " . $conn->error;
    }
}
?>