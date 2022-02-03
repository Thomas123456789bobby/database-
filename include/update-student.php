<?php
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$id = $_POST['id'];

include "connectdb.php";

$sql = "UPDATE student SET voornaam = :voornaam, achternaam = :achternaam WHERE id = :id ";
$stmt = $db->prepare($sql);
$stmt->execute(['voornaam' => $voornaam, 'achternaam' => $achternaam]);
echo "Data is geudateerd";
 
?>