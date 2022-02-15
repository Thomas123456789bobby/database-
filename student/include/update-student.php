<?php
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$id = $_POST['id'];
$email = $_POST['email'];
$telefoonnummer = $_POST['telefoonnummer'];
$straatnaam = $_POST['straatnaam'];
$huisnummer = $_POST['huisnummer'];
$huisnummertoevoeging = $_POST['huisnummertoevoeging'];
$woonplaats = $_POST['woonplaats'];
$postcode = $_POST['postcode'];


include "connectdb.php";
$sql = "UPDATE student SET 
voornaam = :voornaam, 
achternaam = :achternaam, 
email = :email, 
telefoonnummer = :telefoonnummer,
 straatnaam = :straatnaam, 
 huisnummer = :huisnummer,
  huisnummertoevoeging = :huisnummertoevoeging, 
  woonplaats = :woonplaats,
   postcode = :postcode
    WHERE id = :id ";
$stmt = $db->prepare($sql);
$stmt->execute([':voornaam' => $voornaam,
 ':achternaam' => $achternaam , 
 ':email' => $email,
  ':telefoonnummer' => $telefoonnummer,
   ':straatnaam' => $straatnaam, 
   ':huisnummer' => $huisnummer, 
   ':huisnummertoevoeging' => $huisnummertoevoeging,
    ':woonplaats' => $woonplaats, 
    ':postcode' => $postcode , 
    ':id' => $id]);
header("Location:../students.php");
?>