<?php
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no_dossier = $_POST['no_dossier'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $age = $_POST['age'];
    $tel = $_POST['tel'];
    $adresse = $_POST['adresse'];

    $sql = "INSERT INTO Patient (No_dossier, Nom, Prenom, Sexe, Age, Tel, Adresse)
            VALUES ('$no_dossier', '$nom', '$prenom', '$sexe', $age, '$tel', '$adresse')";

    if ($conn->query($sql) === TRUE) {
        echo "Patient ajouté avec succès.";
    } else {
        echo "Erreur: " . $conn->error;
    }
}
?>