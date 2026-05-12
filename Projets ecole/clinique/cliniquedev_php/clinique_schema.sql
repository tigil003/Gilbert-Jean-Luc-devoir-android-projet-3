CREATE DATABASE IF NOT EXISTS clinique;
USE clinique;

CREATE TABLE IF NOT EXISTS Patient (
    No_dossier INT PRIMARY KEY,
    Nom VARCHAR(50),
    Prenom VARCHAR(50),
    Sexe CHAR(1),
    Age INT,
    Tel VARCHAR(20),
    Adresse VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS Consultation (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    No_dossier INT,
    Diagnostique TEXT,
    Prescription TEXT,
    Date_consultation DATE,
    FOREIGN KEY (No_dossier) REFERENCES Patient(No_dossier)
);
