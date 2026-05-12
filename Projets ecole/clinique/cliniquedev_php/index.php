<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil Clinique</title>
</head>
<body>
    <h1>Bienvenue dans le système de gestion de la clinique</h1>

    <h2>Menu</h2>
    <ul>
        <li><a href="ajouter_patient.php">Ajouter un patient</a></li>
        <li><a href="ajouter_consultation.php">Ajouter une consultation</a></li>
        <li><a href="liste_patients.php">Lister les patients</a></li>
        <li><a href="liste_consultations.php">Lister les consultations</a></li>
    </ul>

    <hr>

    <h2>Formulaire d'ajout d'un patient</h2>
    <form action="ajouter_patient.php" method="post">
        <label>Numéro de dossier: <input type="number" name="no_dossier" required></label><br>
        <label>Nom: <input type="text" name="nom" required></label><br>
        <label>Prénom: <input type="text" name="prenom" required></label><br>
        <label>Sexe: 
            <select name="sexe" required>
                <option value="M">Masculin</option>
                <option value="F">Féminin</option>
            </select>
        </label><br>
        <label>Âge: <input type="number" name="age" required></label><br>
        <label>Téléphone: <input type="text" name="tel" required></label><br>
        <label>Adresse: <input type="text" name="adresse" required></label><br>
        <input type="submit" value="Ajouter le patient">
    </form>

    <hr>

    <h2>Formulaire d'ajout d'une consultation</h2>
    <form action="ajouter_consultation.php" method="post">
        <label>Numéro de dossier du patient: <input type="number" name="no_dossier" required></label><br>
        <label>Diagnostic: <textarea name="diagnostique" required></textarea></label><br>
        <label>Prescription: <textarea name="prescription" required></textarea></label><br>
        <label>Date de consultation: <input type="date" name="date_consultation" required></label><br>
        <input type="submit" value="Ajouter la consultation">
    </form>
</body>
</html>
