<?php
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no_dossier = $_POST['no_dossier'];
    $tel = $_POST['tel'];
    $adresse = $_POST['adresse'];

    $sql = "UPDATE Patient SET Tel='$tel', Adresse='$adresse' WHERE No_dossier=$no_dossier";

    if ($conn->query($sql) === TRUE) {
        echo "Patient modifié.";
    } else {
        echo "Erreur: " . $conn->error;
    }
}
?>