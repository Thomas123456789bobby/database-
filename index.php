<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "basiccrud";
$voornaam = "thomas";
$achternaam = "dekker";
$id = "1";
// set DSN
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

$pdo = new PDO($dsn, $user, $pass);

// insrt data

$sql = "INSERT INTO student(id, voornaam, achternaam) VALUES (:id, :voornaam, :achternaam, :id,)";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'id' => $id, 'voornaam' => $voornaam, 'achternaam' => $achternaam]);
echo "Data is toegevoegd";