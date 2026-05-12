<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "clinique";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Échec de connexion: " . $conn->connect_error);
}
?>