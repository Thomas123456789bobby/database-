<?php
include "connectdb.php";
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];


$sql = "INSERT INTO student(voornaam, achternaam) VALUES (:voornaam, :achternaam)";
$stmt = $db->prepare($sql);
$stmt->execute(['voornaam' => $voornaam, 'achternaam' => $achternaam]);
echo "Data is toegevoegd";
header("Location:../index.php");
?>