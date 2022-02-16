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
$klasid = $_POST['klasid'];


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
   postcode = :postcode ,
   klasid = :klasid
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
    ':id' => $id ,
     ':klasid' => $klasid]);
header("Location:../students.php");
?>