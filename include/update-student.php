<?php
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$id = $_POST['id'];
$email = $_POST['email'];
$telefoonnummer = $_POST['telefoonnummer'];
$straatnaam = $_POST['straatnaam'];
$huisnummer = $_POST['huisnummer'];
$huisnummertoevoegin = $_POST['huisnummertoevoegin'];
$woonplaats = $_POST['woonplaats'];
$postcode = $_POST['postcode'];


include "connectdb.php";
$sql = "UPDATE student SET voornaam = :voornaam, achternaam = :achternaam, email = :email, telefoonnummer = :telefoonnummer, staartnaam = :staartnaam, huisnummer = :huisnummer, huisnummer_toevoegin = :huisnummer_toevoegin, woonplaats = :woonplaats, postcode = :postcode WHERE id = :id ";
$stmt = $db->prepare($sql);
$stmt->execute(['voornaam' => $voornaam, 'achternaam' => $achternaam , 'email' => $email, 'telefoonnummer' => $telefoonnummer, 'staartnaam' => $staartnaam, 'huisnummer_toevoegin' => $huisnummer_toevoegin, 'woonplaats' => $woonplaats, 'postcode' => $postcode]);
header("Location:../index.php");
?>