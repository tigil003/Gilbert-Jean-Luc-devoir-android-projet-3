CREATE DATABASE clinique;
USE clinique;

CREATE TABLE Patient (
    No_dossier INT PRIMARY KEY,
    Nom VARCHAR(50),
    Prenom VARCHAR(50),
    Sexe ENUM('H', 'F'),
    Age INT,
    Tel VARCHAR(15),
    Adresse VARCHAR(100)
);

CREATE TABLE Consultation (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    No_dossier INT,
    Diagnostique TEXT,
    Prescription TEXT,
    Date_consultation DATE,
    FOREIGN KEY (No_dossier) REFERENCES Patient(No_dossier)
);