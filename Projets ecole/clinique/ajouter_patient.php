<?php
$nom = "Michel";
$prenom = "Pierre";
$date_naissance = "1990-05-14";
$adresse = "123 Rue Centrale";

$sql = "INSERT INTO Patients (nom, prenom, date_naissance, adresse) VALUES ('$nom', '$prenom', '$date_naissance', '$adresse')";
if ($conn->query($sql) === TRUE) {
    echo "Nouveau patient ajouté avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}
?>