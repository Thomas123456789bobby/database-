<?php
include "connectdb.php";
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];
$telefoonnummer = $_POST['telefoonnummer'];
$straatnaam = $_POST['straatnaam'];
$huisnummer = $_POST['huisnummer'];
$huisnummertoevoeging = $_POST['huisnummertoevoeging'];
$woonplaats = $_POST['woonplaats'];
$postcode = $_POST['postcode'];


$sql = "INSERT INTO student(voornaam, achternaam, email, telefoonnummer, straatnaam, huisnummer, huisnummertoevoeging, woonplaats, postcode )
 VALUES (:voornaam, :achternaam, :email, :telefoonnummer, :straatnaam, :huisnummer, :huisnummertoevoeging, :woonplaats, :postcode)";
$stmt = $db->prepare($sql);
$stmt->execute(['voornaam' => $voornaam, 'achternaam' => $achternaam , 'email' => $email, 'telefoonnummer' => $telefoonnummer,
 'straatnaam' => $straatnaam, 'huisnummer'=> $huisnummer, 'huisnummertoevoeging' => $huisnummertoevoeging, 'woonplaats' => $woonplaats, 'postcode' => $postcode]);
echo "Data is toegevoegd";
header("Location:../students.php");
?>